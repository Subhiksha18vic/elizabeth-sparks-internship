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
        echo ' alert("Sorry! Negative values cant be transferred")';
        echo '</script>';
    }
   else if(($amount1) > $row1['current_balance']) 
    {
        
        echo '<script type="text/javascript">';
        echo ' alert("Insufficient Balance")'; 
        echo '</script>';
    }
     else if($amount1 == 0){

         echo "<script type='text/javascript'>";
         echo "alert('Zero value cannot be transferred')";
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
                                     window.location='customers.php';
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
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
    integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous">
  </script>
</head>

<body>
  <?php
  include 'navbar.php';
?>
  <div class="container photo-cover"  style="min-height: 78vh; min-width: 100vw;">
    <h2 class="text-center pt-4" style="padding-top:70px; color: white; font-family: Montserrat;">Transactions</h2>
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
    <form method="post" name="tcredit" class="tabletext"><br>
      <div style="padding-top:50px;">
        <div class="table-responsive">
          <table class="table ">
            <tr>

              <th class="text-center" style="color:#ffffff;">ID</th>
              <th class="text-center" style="color:#ffffff;">Name</th>
              <th class="text-center" style="color:#ffffff;">Mobile Number</th>
              <th class="text-center" style="color:#ffffff;">Email</th>
              <th class="text-center" style="color:#ffffff;">Balance</th>
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
        <label class="col-sm-2 control-label"
          style="color:#bdb3b3; font-size:17px; width:13%; padding-top:5px;">Transfer To</label>
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
            <option class="table" value="<?php echo $row['id'];?>">

              <?php echo $row['name'] ;?> (Balance:
              <?php echo $row['current_balance'] ;?> )

            </option>
            <?php 
            } 
        ?>

          </select>
        </div>
      </div>
      <label class="col-sm-2 control-label"
        style=" margin-bottom:20px; margin-top:-15px; color:#bdb3b3; font-size:17px; width:13%; padding-top:5px;">Amount</label>
      <div class="col-sm-4" style=" margin-top:-15px;">
        <input type="number" name="amount1" class="form-control" placeholder="Specify the Amount">
      </div>
      <div class="col-md-6 text-right">
        <div id="buttons" class="container">
          <button class="btn btn-primary" name="submit" type="submit" id="mybtn">
            Transfer
          </button></a>
        </div>
      </div>
  </div>
  <?php include "footer.php" ?>
</body>

</html>