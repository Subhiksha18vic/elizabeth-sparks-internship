<nav  class="navbar navbar-inverse navbar-fixed-top ">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
      </button>
      <a class="navbar-brand" href="index.php" >The Sparks Bank</a>
    </div> <!-- .navbar-header -->
    <div class="collapse navbar-collapse" id="navbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="index.php">Home</a></li>
        <li><a href="viewcustomers.php">View Customers</a></li>
        <li><a href="history.php">Transaction History</a></li>

      </ul>
    </div> <!-- .navbar-collapse -->
  </div> <!-- .container -->
</nav>

<style>
.navbar {

background: -webkit-linear-gradient(to left, #2C5364, #203A43, #0F2027); 

}

.navbar-inverse {
  transition: all 0.2s ease-in;
}
@media only screen and (max-width: 600px) {
.navbar-inverse {
    transition: all 0.2s ease-in;
    margin-bottom: -3px;
}
}</style>