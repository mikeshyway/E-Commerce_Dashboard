<?php 
  $page = substr($_SERVER['SCRIPT_NAME'], strrpos($_SERVER['SCRIPT_NAME'], "/")+1);
?>

<aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-gradient-dark" id="sidenav-main">
    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand m-0 mt-3 <?= $page == "index.php" ?> " href="index.php">
        <span class="ms-1 font-weight-bold text-white">MICSON Dashboard</span>
      </a>
    </div>
    <hr class="horizontal light mt-0 mb-2">
    <div class="collapse navbar-collapse  w-auto  max-height-vh-100" id="sidenav-collapse-main">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link text-white <?= $page == "index.php"? ' text-bg-warning active primary':'' ?> " href="index.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">dashboard</i>
            </div>
            <span class="nav-link-text ms-1">Dashboard</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white <?= $page == "category.php"? ' text-bg-warning active primary':'' ?> " href="category.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">table_view</i>
            </div>
            <span class="nav-link-text ms-1">All Categories</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white <?= $page == "add-category.php"? ' text-bg-warning active primary':'' ?>" href="add-category.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">add</i>
            </div>
            <span class="nav-link-text ms-1">Add Category</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white <?= $page == "products.php"? ' text-bg-warning active primary':'' ?>" href="products.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">table_view</i>
            </div>
            <span class="nav-link-text ms-1">All Products</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white <?= $page == "add-product.php"? ' text-bg-warning active primary':'' ?>" href="add-product.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">add</i>
            </div>
            <span class="nav-link-text ms-1">Add Product</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white <?= $page == "orders.php"? ' text-bg-warning active primary':'' ?>" href="orders.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">table_view</i>
            </div>
            <span class="nav-link-text ms-1">All Orders</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white <?= $page == "users.php"? ' text-bg-warning active primary':'' ?> " href="users.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">people</i>
            </div>
            <span class="nav-link-text ms-1">All Users</span>
          </a>
        </li>
      </ul>
    </div>
    <div class="sidenav-footer position-absolute w-100 bottom-6 ">
      <div class="mx-3">
        <?php 
          if(isset($_SESSION['auth']))
          {
            ?>
            <a class="btn btn-success mt-4 w-100" role="button"> Current Admin: 
            <br> <i class="fa fa-user"></i> <?= $_SESSION['auth_user']['name']; ?>  </a>
            <?php
          }
       ?>
        
      </div>
    </div>
    <div class="sidenav-footer position-absolute w-100 bottom-0 ">
      <div class="mx-3">
        <a class="btn btn-danger mt-4 w-100 text-white" 
        href="../logout.php">Logout</a>
      </div>
    </div>
  </aside>