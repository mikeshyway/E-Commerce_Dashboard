<?php 

// User Side's Function

session_start();  
include("config/dbcon.php");

// To fetch values to be shown in categories.php in user's page
function getAllActive($table)
{
    // To prevent undefined from $con, declare it as variable to ensure it will search it in the function
    global $con;
    $query = "SELECT * FROM $table WHERE status='0' ";
    return $query_run = mysqli_query($con, $query);
}

// To fetch values of trending products to be shown in index.php in user's page
function getAllTrending()
{
    // To prevent undefined from $con, declare it as variable to ensure it will search it in the function
    global $con;
    $query = "SELECT * FROM products WHERE trending='1' ";
    return $query_run = mysqli_query($con, $query);
}

// To fetch values of new arrival products to be shown in index.php in user's page
function getAllNewArrival()
{
    // To prevent undefined from $con, declare it as variable to ensure it will search it in the function
    global $con;
    $query = "SELECT * FROM products WHERE new_arrival='1' ";
    return $query_run = mysqli_query($con, $query);
}

// To fetch values of sales products to be shown in index.php in user's page
function getAllSales()
{
    // To prevent undefined from $con, declare it as variable to ensure it will search it in the function
    global $con;
    $query = "SELECT * FROM products WHERE sales='1' ";
    return $query_run = mysqli_query($con, $query);
}

// Slug for Products Directory
function getSlugActive($table, $slug)
{
    global $con;
    $query = "SELECT * FROM $table WHERE slug='$slug' AND status='0' LIMIT 1 ";
    return $query_run = mysqli_query($con, $query);
}

function getProdByCategory($category_id)
{
    global $con;
    $query = "SELECT * FROM products WHERE category_id='$category_id' AND status='0' ";
    return $query_run = mysqli_query($con, $query);
}

// It checks if the id exists in the URL. If it does, it displays the data in a form.
function getIDActive($table, $id)
{
    global $con;
    $query = "SELECT * FROM $table WHERE id='$id' AND status='0' ";
    return $query_run = mysqli_query($con, $query);
}

function getCartItems()
{
    global $con;
    $userId = $_SESSION['auth_user']["user_id"];
    $query = "SELECT c.id as cid, c.prod_id, c.prod_qty, p.id as pid, p.name, p.image_thumbnail, p.selling_price 
                FROM carts c, products p WHERE c.prod_id=p.id AND c.user_id='$userId' ORDER BY c.id DESC ";
    return $query_run = mysqli_query($con, $query);
}

function getOrders()
{
    global $con;
    $userId = $_SESSION['auth_user']["user_id"];
    
    $query = "SELECT * FROM orders WHERE user_id='$userId' ORDER BY id DESC ";
    return $query_run = mysqli_query($con, $query);
}

function redirect($url, $message)
{
    $_SESSION['message'] = $message;
    header('Location: '.$url);
    exit();
}

function checkTrackingNoValid($trackingNo)
{
    global $con;
    $userId = $_SESSION['auth_user']["user_id"];

    $query = "SELECT * FROM orders WHERE tracking_no='$trackingNo' AND user_id='$userId' ";
    return mysqli_query($con, $query);

}

?>

