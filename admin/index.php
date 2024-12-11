<?php 
// Dashboard Index - Admin Page 
include('../middleware/adminMiddleware.php'); 
include('includes/header.php');

?>

<div class="container-fluid w-70 ms-12">
    <div class="row">
        <div class="col-md-12">
            <br>
            <h1 class="text-center">Welcome to Admin Dashboard!!!</h1>
            <br>
            <div class="col-md-12 text-center">
                    <img src="../uploads/admin_icon.png" class="img-fluid" width="200px" height="200px" alt="...">
            </div>
            <br><br>
            <div class="container-fluid w-70 ms-12">
                <h4>Here's a brief list of tasks an admin can typically perform in MICSON e-commerce website:</h4>
                <div class="underline mb-2 align-justify"></div>
                <br>
                <p>
                1. Product Management: Admins can add new products, edit existing ones, and remove products from the store.
                </p>
                <p>
                2. Order Management: Admins view and process orders, update their status, and handle cancellations or refunds when necessary.
                </p>
                <p>
                3. User Management: Admins manage registered users, edit user details, and take action against policy violators.
                </p>
            </div>
            
        </div>
    </div>

<div>

<?php include('includes/footer.php'); ?>