<?php 

/*
Authentication Function - User/Admin Account Management System
1. When a user registers an account, the system will first check if the user has registered an account beforehand.
    -> If not, the system will proceed to insert user data query into the database, leads to user registered an account.
2. If the password is not the same as the "Confirm Password" during registration, output of password does not match will occur.
3. If the user decide to login, the system will once again check the insert query of user personal info in the database.
    -> If the user is an admin, which is indicated via "role_as", they can access to admin dashboard.
    -> If the user is not an admin, which is indicated via "role_as", they can not gain any access to admin dashboard.
*/

session_start();
include('../config/dbcon.php');
include('myfunctions.php');

if(isset($_POST['register_btn'])) 
{
    $name = mysqli_real_escape_string($con,$_POST['name']);
    $phone = mysqli_real_escape_string($con,$_POST['phone']);
    $email= mysqli_real_escape_string($con,$_POST['email']);
    $password = mysqli_real_escape_string($con,$_POST['password']);
    $cpassword= mysqli_real_escape_string($con,$_POST['cpassword']);

    // Check if email has been registered already or not
    $check_email_query = "SELECT email FROM users WHERE email = '$email' ";
    $check_email_query_run = mysqli_query($con, $check_email_query);

    if(mysqli_num_rows($check_email_query_run) > 0) 
    {
        $_SESSION['message'] = "Email has already been registered";
        header('Location: ../register.php');
    }
    else
    {
        if($password == $cpassword)
        {
            // Insert user data
            $insert_query = "INSERT INTO users (name, email, phone, password) VALUES ('$name','$email','$phone','$password')";
            $insert_query_run = mysqli_query($con, $insert_query);
    
            if($insert_query_run){
                $_SESSION['message'] = "Registered Succesfully";
                header('Location: ../login.php');
            }
            else
            {
                $_SESSION['message'] = "Something went wrong";
                header('Location: ../register.php');
            }
    
        }
        else 
        {
            $_SESSION['message'] = "Passwords does not match";
            header('Location: ../register.php');
        }
    }

}
else if(isset($_POST['login_btn']))
{
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $password = mysqli_real_escape_string($con, $_POST['password']);

    $login_query = "SELECT * FROM users WHERE email = '$email' AND password = '$password' ";
    $login_query_run = mysqli_query($con, $login_query);

    if(mysqli_num_rows($login_query_run) > 0)
    {
        $_SESSION['auth'] = true;

        $userdata = mysqli_fetch_array($login_query_run);
        $userId = $userdata['id'];
        $username = $userdata['name'];
        $useremail = $userdata['email'];
        $role_as = $userdata['role_as'];

        $_SESSION['auth_user'] = [
            'user_id' => $userId,
            'name' => $username,
            'email' => $useremail
        ];

        $_SESSION['role_as'] = $role_as;

        if($role_as == 1)
        {
            redirect("../admin/index.php", "Welcome to Dashboard");

        }
        else
        {
            redirect("../index.php", "Logged In Successfully");
        }

    } 
    else 
    {
        redirect("../login.php", "Invalid Credentials");
    }
}


?>