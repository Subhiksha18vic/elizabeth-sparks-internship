

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
.photo-cover {
  background: #34495e no-repeat center center / cover fixed;
  height: 100%;
  position: relative;
  width:100%
}
html,
body,
main {
  height: 120%;
}
</style>
</head>
<body>
<?php 
include 'navbar.php';
?>
<div class="container photo-cover">
<h2 class="text-center pt-4" style="padding-top:70px; color: white;">Transaction History</h2>
<div class="table-responsive" style="padding-top:40px;">
			<table class="table ">
				<tr>
                    <th class="text-center" style="color:#222222; font-size: 17px;">S.no</th>
					<th class="text-center" style="color:#222222; font-size: 17px;">Sender</th>
					<th class="text-center" style="color:#222222; font-size: 17px;">Receiver</th>
                    <th class="text-center" style="color:#222222; font-size: 17px;">Amount</th>
                    <th class="text-center" style="color:#222222; font-size: 17px;">Date & Time</th>
                    
				</tr>
                
            <?php 
             include 'connection.php';

             $sql ="SELECT * from transaction";
 
             $query =mysqli_query($con, $sql);
             if($query === FALSE) { 
              die(mysqli_error());
           }
           
                $no = 1;
                while($row=mysqli_fetch_assoc($query)){
                    echo '
						<tr>

                            <td class="text-center" style="color:#bdb3b3;">'.$no.'</td>
							<td class="text-center" style="color:#bdb3b3;">'.$row['sender'].'</td>	
                            <td class="text-center" style="color:#bdb3b3;">'.$row['receiver'].'</td>
                            <td class="text-center" style="color:#bdb3b3;">'.$row['amount'].'</td>
							<td class="text-center" style="color:#bdb3b3;">'.$row['timestamp'].'</td>
                            
                        
                           
                            
                          </tr>' ;
                          $no++;
                }

?>
                </table>
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