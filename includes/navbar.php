<nav class="navbar navbar-expand-lg sticky-top bg-body-tertiary">
  <div class="container-fluid w-85 ms-11 ms-5 me-5">

    <a href="index.php"> <img class="img-responsive" height="100px" src="uploads/mclogo4.png" href="index.php" alt="..."> </a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
      aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse me-5" id="navbarNavDropdown">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active"> | </a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="aboutus.php">About Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active"> | </a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="size-chart.php">Footwear Size Chart</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active"> | </a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="categories.php">All Categories</a>
        </li>

        
        <?php 
          if(isset($_SESSION['auth']))
          {
            ?>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-align-justify"></i>
            <?= $_SESSION['auth_user']['name']; ?>
          </a>
          <ul class="dropdown-menu">
            <!-- <li><a class="dropdown-item" href="user-profile.php"><i class="fa fa-user"></i> User Profile</a></li> -->
            <li><a class="dropdown-item" href="cart.php"><i class="fa fa-shopping-cart"></i> My Cart</a></li>
            <li><a class="dropdown-item" href="my-orders.php"><i class="fa fa-envelope"></i> My Order</a></li>
            <li><a class="dropdown-item" href="logout.php"><i class="fa fa-sign-out"></i> Logout</a></li>
          </ul>
        </li>
        <?php
          }
          else
          {
            ?>
        <li class="nav-item">
          <a class="nav-link active"> | </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="register.php">Register</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active"> | </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="login.php">Login</a>
        </li>
        <?php 
          }
        ?>
      </ul>
    </div>
  </div>
</nav>