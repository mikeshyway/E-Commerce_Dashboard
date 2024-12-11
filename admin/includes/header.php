<!-- ?php session_start(); ? -->
<!-- Redirect from functions.php -->

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title>
  MICSON Dashboard 
  </title>
  <!-- add icon link -->
  <link rel="icon" href="../uploads/micson-text-only-favicon.ico" type="image/x-icon"> 
  </head> 
  <!-- Fonts and icons -->
  <link rel="stylesheet" type="text/css"
    href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <!-- Material Icons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
  <!-- CSS Files -->
  <link id="pagestyle" href="assets/css/material-dashboard.min.css" rel="stylesheet" />
  
  <!-- Altertify.js -->
  <link href="assets/css/alertify.min.css" rel="stylesheet">
  <link href="assets/css/bootstrap.min.css" rel="stylesheet">
  
  <style>
    .form-control {
      border: 1px solid #b3a1a1 !important;
      padding: 8px 10px;
    }

    .form-select{
      border: 1px solid #b3a1a1 !important;
      padding: 8px 10px;
    }
  </style>

</head>

<body class="g-sidenav-show  bg-gray-200">
  <?php include('sidebar.php'); ?>
  <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    <?php include('navbar.php'); ?>