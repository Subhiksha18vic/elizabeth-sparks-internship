<style>
    /* Style the video: 100% width and height to cover the entire window */
    #bg-video {
      position: fixed;
      left: 50%;
      top: 50%;
      bottom: auto;
      right: auto;
      min-width: 100%;
      min-height: 100%;
      transform: translateX(-50%) translateY(-50%);
      z-index: -100;
      background-image: url(https://picsum.photos/1920/720);
      background-position: center;
      background-size: cover;
      background-repeat: no-repeat;
    }
  </style>
<video autoplay muted loop id="bg-video">
  <source src="gfp-astro-timelapse.mp4" type="video/mp4">
</video>
<nav  class="navbar">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
      </button>
      <a style="font-weight: bold; font-family: Montserrat;"class="navbar-brand" href="index.php" >Swiss Bank</a>
    </div> <!-- .navbar-header -->
    <div class="collapse navbar-collapse" id="navbar">
      <ul style="font-weight: bold; font-family: Montserrat;" class="nav text-white navbar-nav navbar-right">
        <li><a href="index.php">Home</a></li>
        <li><a href="customers.php">Manage Customers</a></li>
        <li><a href="history.php">Transactions</a></li>
      </ul>
    </div> <!-- .navbar-collapse -->
  </div> <!-- .container -->
</nav>

