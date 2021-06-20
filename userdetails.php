<?php
include 'connection.php';

if(isset($_POST['submit']))
{
    $send = $_GET['id'];
    $rec = $_POST['to'];
    $amount1 = $_POST['amount1'];
    $sql = "SELECT * from user_details where id=$send";
    $query = mysqli_query($con,$sql);
    $row1 = mysqli_fetch_array($query); 
    $sql = "SELECT * from user_details where id=$rec";
    $query = mysqli_query($con,$sql);
    $row2 = mysqli_fetch_array($query);
    if (($amount1)<0)
   {
        echo '<script type="text/javascript">';
        echo ' alert("Oops! Negative values cannot be transferred")';
        echo '</script>';
    }
   else if(($amount1) > $row1['current_balance']) 
    {
        
        echo '<script type="text/javascript">';
        echo ' alert("Bad Luck! Insufficient Balance")'; 
        echo '</script>';
    }
     else if($amount1 == 0){

         echo "<script type='text/javascript'>";
         echo "alert('Oops! Zero value cannot be transferred')";
         echo "</script>";
     }
else {
        $newbalance = $row1['current_balance'] - $amount1;
        $sql = "UPDATE user_details set current_balance=$newbalance where id=$send";
        mysqli_query($con,$sql);
        $newbalance = $row2['current_balance'] + $amount1;
        $sql = "UPDATE user_details set current_balance=$newbalance where id=$rec";
        mysqli_query($con,$sql);
                
                $sender = $row1['name'];
                $receiver = $row2['name'];
                $sql = "INSERT INTO transaction(`sender`, `receiver`, `amount`) VALUES ('$sender','$receiver','$amount1')";
                $query=mysqli_query($con,$sql);

                if($query){
                     echo "<script> alert('Transaction Successful');
                                     window.location='viewcustomers.php';
                           </script>";
                    
                }

                $newbalance= 0;
                $amount1 =0;
        }
    
}
?>

<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Sparks Bank</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="icon" href="logo-licet.png" type="image/icon type">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<style>
@media only screen and (max-width: 600px) {
  html,body {
    overflow-x: hidden;
  }

}
html,
body,
main {
  height: 101.5%;
}
.photo-cover {
  background: #34495e no-repeat center center / cover fixed;
  height: 100%;
  position: relative;
  width:100%
}
#buttons{
  margin-top: 100px;
  height: 100%;

  display: flex;
  align-items: center;
  justify-content: center;
}
@media only screen and (max-width: 600px) {
#buttons{
  margin-top:7px;
  height:80%;
  width:120%;
  margin-left:-34px;
  
}

}
button.btn{
  background: transparent;
  color: white;
  border: 2px solid white;
  font-size: 20px;
  letter-spacing: 2px;
  padding: 25px 80px;
  text-transform: uppercase;
  cursor: pointer;
  display: inline-block;
  margin: 15px 30px;
  -webkit-transition: all 0.4s;
	-moz-transition: all 0.4s;
	transition: all 0.4s;

}


button.btn-1:hover{
  background-color: white;
  color: black;
  -webkit-transition: all 0.4s;
	-moz-transition: all 0.4s;
	transition: all 0.4s;
}

button.btn-2{
  overflow: hidden;
  position: relative;
 
}

button.btn-2:hover{
  color: black;
}


button.btn-2:after {
	content: '';
	position: absolute;
	z-index: -1;
	-webkit-transition: all 0.4s;
	-moz-transition: all 0.4s;
	transition: all 0.4s;
	width: 100%;
	height: 0;
	top: 0;
	left: 0;
	background: #fff;
}

button.btn-2:hover:after,
button.btn-2:active:after {
	height: 100%;
}


</style>
</head>
<body>
<?php
  include 'navbar.php';
?>
<div class="container photo-cover">
<h2 class="text-center pt-4" style="padding-top:70px; color: white;">Transaction</h2>
<?php
                include 'connection.php';
                $sid=$_GET['id'];
                $sql = "SELECT * FROM  user_details where id=$sid";
                $result=mysqli_query($con,$sql);
                if(!$result)
                {
                    echo "Error : ".$sql."<br>".mysqli_error($con);
                }
                $row=mysqli_fetch_assoc($result);
            ?>
            <form method="post" name="tcredit" class="tabletext" ><br>
        <div style="padding-top:50px;">
        <div class="table-responsive" >
			<table class="table ">
				<tr>
                    
					<th class="text-center" style="color:#222222;">ID</th>
					<th class="text-center" style="color:#222222;">Name</th>
					<th class="text-center" style="color:#222222;">Mobile Number</th>
					<th class="text-center" style="color:#222222;">Email</th>
                    <th class="text-center" style="color:#222222;">Balance</th>
				</tr>
                <tr>
                    <td class="text-center" style="color:#bdb3b3;"><?php echo $row['id'] ?></td>
                    <td class="text-center" style="color:#bdb3b3;"><?php echo $row['name'] ?></td>
                    <td class="text-center" style="color:#bdb3b3;"><?php echo $row['mob_no'] ?></td>
                    <td class="text-center" style="color:#bdb3b3;"><?php echo $row['email'] ?></td>
                    <td class="text-center" style="color:#bdb3b3;"><?php echo $row['current_balance'] ?></td>
                </tr>
                </table>
                </div>
                </div>
                <br><br><br>
                <div class="form-group">
        <label class="col-sm-2 control-label" style="color:#bdb3b3; font-size:17px; width:13%; padding-top:5px;">Transfer To</label>
        <div class="col-sm-4">
        <select name="to" class="form-control" required>
            <option value="" disabled selected>Choose</option>
            <?php
                include 'connection.php';
                $sid=$_GET['id'];
                $sql = "SELECT * FROM user_details where id!=$sid";
                $result=mysqli_query($con,$sql);
                if(!$result)
                {
                    echo "Error ".$sql."<br>".mysqli_error($con);
                }
                while($row = mysqli_fetch_assoc($result)) {
            ?>
            <option class="table" value="<?php echo $row['id'];?>" >
                
                <?php echo $row['name'] ;?> (Balance: 
                <?php echo $row['current_balance'] ;?> ) 
           
            </option>
        <?php 
            } 
        ?>
      
        </select>
        </div>
        </div>
        <label class="col-sm-2 control-label"  style=" margin-bottom:20px; margin-top:-15px; color:#bdb3b3; font-size:17px; width:13%; padding-top:5px;">Amount</label>
					<div class="col-sm-4" style=" margin-top:-15px;">
						<input type="number" name="amount1" class="form-control" placeholder="Specify the Amount" >
					</div>
                    <div id="buttons" class="container">
  
    <button class="btn btn-2" name="submit" type="submit" id="mybtn">Transfer</button></a>
  </div>
  </div>
  <nav  class="navbar navbar-inverse  ">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <!-- <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false">
        
      </button> -->
      <div class="navbar-brand center" ><h5 style="margin-top:0px; ">Internship project by Sharwin Xavier R @ The Sparks Foundation</h5></div>
    </div> <!-- .navbar-header -->
   
  </div> <!-- .container -->
</nav>
</body>
</html>
