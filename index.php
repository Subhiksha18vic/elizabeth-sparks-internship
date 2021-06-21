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
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
    integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous">
  </script>

  
</head>


<body>
  <?php
  require_once 'connection.php';
  include 'navbar.php';
  ?>
    <div style="min-height: 78vh; min-width: 100vw;" class="d-flex align-items-center justify-content-center">
      <div style="background: transparent;" class="jumbotron photo-cover text-white">
        <div id="hero" class="container">
          <div class="col-md-6 text-left">
            <h1 style="color: aliceblue; font-weight: bold; font-family: Montserrat;">Swiss Bank</h1>
            <div id="buttons">
              <a href="customers.php">
                <button class="btn btn-primary">
                  Manage Customers
                </button>
              </a>
              <a href="history.php">
                <button class="btn btn-primary">
                  Transactions
                </button>
              </a>
            </div>
          </div> <!-- .col-md-6 -->
        </div> <!-- .jumbotron -->
      </div>
    </div>

  <?php include "footer.php" ?>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
  </script>
</body>