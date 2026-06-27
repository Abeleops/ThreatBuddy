<?php

include "includes/db.php";

/*
=========================================
DATABASE INSERT WILL GO HERE LATER
=========================================

Future Steps

1. Validate fields

2. Hash password

3. INSERT INTO users

4. Redirect to Login

*/

function isStrongPassword($password) {
    $hasUpper = preg_match('/[A-Z]/', $password);
    $hasLower = preg_match('/[a-z]/', $password);
    $hasNumber = preg_match('/\d/', $password);
    $hasSpecial = preg_match('/[^A-Za-z0-9]/', $password);

    return strlen($password) >= 8 && $hasUpper && $hasLower && $hasNumber && $hasSpecial;
}

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$password = $_POST['password'];
$confirm = $_POST['confirm'];

if($password != $confirm)
{
    die("Passwords do not match.");
}

if(!isStrongPassword($password))
{
    die("Password must be at least 8 characters long and include uppercase, lowercase, a number, and a special character.");
}

echo "<h2>Registration Successful (Testing)</h2>";

echo "First Name: ".$firstname."<br>";
echo "Last Name: ".$lastname."<br>";
echo "Email: ".$email."<br>";
echo "Phone: ".$phone;
?>