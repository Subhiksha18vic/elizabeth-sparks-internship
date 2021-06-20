<?php
include("connection.php");
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
	html,
body,
main {
  height: 100%;
  width:100%;
}
@media only screen and (max-width: 600px) {
  html,body {
    overflow-x: hidden;
  }
}

#buttons{
  display: flex;
  align-items: center;
  justify-content: center;
  width:50%;
}

}
@media only screen and (min-device-width: 360px) and (max-device-height: 640px) and (orientation : landscape) and (-webkit-device-pixel-ratio: 3){
		/* Styles */
    
		}





		}
::selection {
  background:  #34495e;
  color: #fff;
}
.jumbotron {
  /* // Stops gaps between jumbotrons */
  padding-top: 150px;
  
  margin-bottom: 0;
  background-color: rgb(17, 17, 17);
}

.center {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
}

.photo-cover {
  background: #34495e url(bg.jpg) no-repeat center center / cover fixed;
  height: 100%;
  position: relative;
}

#buttons{
  margin-top: 100px;
  height: 100%;

  display: flex;
  align-items: center;
  justify-content: center;
}
/* #buttons1{
  margin-top: 100px;
  height: 100%;

  display: flex;
  align-items: center;
  justify-content: center;
} */
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
@media only screen and (max-width: 600px) {
#buttons{
  display:block;

}
button.btn {
    background: transparent;
    color: white;
    border: 2px solid white;
    font-size: 10px;
    letter-spacing: 2px;
    padding: 25px 80px;
    text-transform: uppercase;
    cursor: pointer;
    display: inline-block;
    margin: 15px 30px;
    -webkit-transition: all 0.4s;
    -moz-transition: all 0.4s;
    transition: all 0.4s;
    margin-left: -100px;
   
}
button.btn-1{
  overflow: hidden;
  position: relative;
  align-items: center;
  justify-content: center;
  padding-left: 92px;
}
}

	</style>
</head>


<body>
<?php
  require_once 'connection.php';
  include 'navbar.php';
  ?>
  <div class="jumbotron photo-cover text-inverse">
  <div id="hero" >
      <div class="col-md-6 text-center center">
        <h1 style="color: aliceblue;">The Sparks Bank</h1>
        <div id="buttons" class="container"><a href="viewcustomers.php" >
    <button class="btn btn-1">View Customers</button></a>
 <a href="history.php" >
    <button class="btn btn-2">Transfer History</button></a></div>
  
   
   
      </div> <!-- .col-md-6 -->
	
    </div> <!-- .jumbotron -->
	
    
	</div>

	<nav  class="navbar navbar-inverse navbar-fixed-bottom ">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header" >
      <!-- <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false">
        
      </button> -->
      <div  class="navbar-brand justify"><h5 style="margin-top:0px; ">Internship project by Sharwin Xavier R @ The Sparks Foundation</h5></div>
    </div> <!-- .navbar-header -->
   
  </div> <!-- .container -->
</nav>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>