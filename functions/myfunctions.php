<?php 

// Admin Side's Function

session_start();  
// Redirecting php locations ensures lesser code required to redirect user to expected webpages.
// If ever got issue refer to this https://www.youtube.com/watch?v=G70P6FZhSq4

include("../config/dbcon.php");

// Fetch all records from a table in the database
// Takes table name as a parameter and queries the database to select all records from that table
// It will then loop to go through and print each record in a table row
function getAll($table)
{
    // To prevent undefined from $con, declare it as variable to ensure it will search it in the function
    global $con;
    $query = "SELECT * FROM $table";
    return $query_run = mysqli_query($con, $query);
}

// It checks if the id exists in the URL. If it does, it displays the data in a form.
function getByID($table, $id)
{
    global $con;
    $query = "SELECT * FROM $table WHERE id='$id' ";
    return $query_run = mysqli_query($con, $query);
}

// Get all orders and lists them in the admin dashboard
function getAllOrders()
{
    // To prevent undefined from $con, declare it as variable to ensure it will search it in the function
    global $con;
    $query = "SELECT * FROM orders WHERE status='0' ";
    return $query_run = mysqli_query($con, $query);
}


function getOrderHistory()
{
    // To prevent undefined from $con, declare it as variable to ensure it will search it in the function
    global $con;
    $query = "SELECT * FROM orders WHERE status != '0' ";
    return $query_run = mysqli_query($con, $query);
}

function checkTrackingNoValid($trackingNo)
{
    global $con;

    $query = "SELECT * FROM orders WHERE tracking_no='$trackingNo' ";
    return mysqli_query($con, $query);

}

function redirect($url, $message)
{
    $_SESSION['message'] = $message;
    header('Location: '.$url);
    exit();
}
?>