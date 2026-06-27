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

echo "<h2>Registration Successful (Testing)</h2>";

echo "First Name: ".$firstname."<br>";
echo "Last Name: ".$lastname."<br>";
echo "Email: ".$email."<br>";
echo "Phone: ".$phone;
?>