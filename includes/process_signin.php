<?php

include "includes/db.php";

/*
==========================================
DATABASE LOGIN WILL GO HERE LATER
==========================================

Example steps:

1. Receive form values
2. Query the database
3. Compare password
4. Create session
5. Redirect user

*/

$email = $_POST['email'];
$password = $_POST['password'];

echo "<h2>Sign In Successful (Testing)</h2>";

echo "Email : ".$email."<br>";
echo "Password : ".$password;
?>