<?php
session_start();

// Get the data from the Sign In form
$email = $_POST['email'];
$password = $_POST['password'];

/*
|--------------------------------------------------------------------------
| Temporary Accounts (for testing only)
|--------------------------------------------------------------------------
*/

$admin_email = "admin@threatbuddy.com";
$admin_password = "admin123";

$user_email = "user@gmail.com";
$user_password = "user123";

/*
|--------------------------------------------------------------------------
| Check if Admin
|--------------------------------------------------------------------------
*/

if ($email == $admin_email && $password == $admin_password) {

    $_SESSION['email'] = $email;
    $_SESSION['role'] = "admin";

    header("Location: ../admin/index.php");
    exit();
}

/*
|--------------------------------------------------------------------------
| Check if Regular User
|--------------------------------------------------------------------------
*/

if ($email == $user_email && $password == $user_password) {

    $_SESSION['email'] = $email;
    $_SESSION['role'] = "user";

    header("Location: ../pages/dashboard.php");
    exit();
}

/*
|--------------------------------------------------------------------------
| Login Failed
|--------------------------------------------------------------------------
*/

echo "Invalid Email or Password.";
?>