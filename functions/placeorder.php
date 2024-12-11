<?php

// Place Order - User Page Cart and Order Management System
session_start();  
include("../config/dbcon.php");


if(isset($_SESSION['auth']))
{
    if(isset($_POST['placeOrderBtn']))
    {
        $name = mysqli_real_escape_string($con, $_POST['name']);
        $email = mysqli_real_escape_string($con, $_POST['email']);
        $phone = mysqli_real_escape_string($con, $_POST['phone']);
        $pincode = mysqli_real_escape_string($con, $_POST['pincode']);
        $address = mysqli_real_escape_string($con, $_POST['address']);
        $payment_mode = mysqli_real_escape_string($con, $_POST['payment_mode']);
        $payment_id = mysqli_real_escape_string($con, $_POST['payment_id']);
        
        
        // If any variables are inputted with null value (empty), pop-up message to prompt users to fill in the form 
        if($name == "" || $email == "" || $phone == "" || $pincode == "" || $address == "")
        {
            $_SESSION['message'] = "All Fields are Mandatory";
            header('Location: ../checkout.php');
            exit(0);
        }

        // To retrieve cart items record
        $userId = $_SESSION['auth_user']['user_id'];
        $query = "SELECT c.id as cid, c.prod_id, c.prod_qty, p.id as pid, p.name, p.image_thumbnail, p.selling_price 
                FROM carts c, products p WHERE c.prod_id=p.id AND c.user_id='$userId' ORDER BY c.id DESC ";
        $query_run = mysqli_query($con, $query);

        // To calculate total proce
        $totalPrice = 0;
        foreach ($query_run as $citem) 
        {
            $totalPrice += $citem['selling_price'] * $citem['prod_qty'];
        }
        
        // To generate random tracking number
        $tracking_no = "micsonwebsite".rand(1111,9999).substr($phone, 2);

        // If all variables have the value, it will be inserted into database query
        $insert_query = "INSERT INTO orders (tracking_no, user_id, name, email, phone, address, pincode, 
        total_price, payment_mode, payment_id) VALUES ('$tracking_no','$userId','$name','$email',
        '$phone','$address','$pincode','$totalPrice','$payment_mode','$payment_id') ";

        $insert_query_run = mysqli_query($con, $insert_query);

        if($insert_query_run)
        {
            $order_id = mysqli_insert_id($con);
            foreach ($query_run as $citem) 
            {
                $prod_id = $citem['prod_id'];
                $prod_qty = $citem['prod_qty'];
                $price = $citem['selling_price'];

                $insert_items_query = "INSERT INTO order_items (order_id, prod_id, qty, price) VALUES 
                ('$order_id','$prod_id','$prod_qty','$price') ";
                $insert_items_query_run = mysqli_query($con, $insert_items_query);

                // When an order is placed, the total quantity of products will reduced in database
                // Fetch product query
                $product_query = "SELECT * FROM products WHERE id='$prod_id' LIMIT 1";
                $product_query_run = mysqli_query($con, $product_query);

                $productData = mysqli_fetch_array($product_query_run);
                $current_qty = $productData['qty'];
                $new_qty = $current_qty - $prod_qty;

                $updateQty_query = "UPDATE products SET qty='$new_qty' WHERE id='$prod_id' ";
                $updateQty_query_run = mysqli_query($con, $updateQty_query);


            }

            // Remove old cart query after checkout
            $deleteCartQuery = "DELETE FROM carts WHERE user_id='$userId' ";
            $deleteCartQuery_run = mysqli_query($con, $deleteCartQuery);

            $_SESSION['message'] = "Order Placed Successfully";
            header('Location: ../my-orders.php');
            die();

        }
    }
}
else
{
    header('Location: ../index.php');
}


?>