<?php

// User Authenticate System

if(!isset($_SESSION['auth']))
{
    redirect("login.php", "Login to Continue");
}

?>
