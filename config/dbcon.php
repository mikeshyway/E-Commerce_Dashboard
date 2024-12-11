<?php

    // Connection to localhost to access MariaDB database 
    $host = "localhost";
    $username = "root";
    $password = "";
    $database = "phpecom";

    // Creating database connection
    $con = mysqli_connect($host, $username, $password, $database);

    // Check database connection
    if(!$con) {
        die("Connection Failed: ".mysqli_conenct_error());
    } 


?>