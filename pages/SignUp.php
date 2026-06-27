<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="UTF-8">

<title>ThreatBuddy - Signup</title>

<link rel="stylesheet" href="../assets/css/Sign.css">

<link rel="preconnect" href="https://fonts.googleapis.com">

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

<link rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

</head>

<body>

<div class="container">

<div class="card">

<h2 class="logo">
<i class="fa-solid fa-shield-halved"></i>
ThreatBuddy
</h2>

<h1>Create Your Account</h1>

<p>Join ThreatBuddy and stay ahead of cyber threats</p>

<form action="process_signup.php" method="POST">

<div class="row">

<div>

<label>First Name</label>

<div class="input-box">

<i class="fa-regular fa-user"></i>

<input
type="text"
name="firstname"
placeholder="Enter first name"
required>

</div>

</div>

<div>

<label>Last Name</label>

<div class="input-box">

<i class="fa-regular fa-user"></i>

<input
type="text"
name="lastname"
placeholder="Enter last name"
required>

</div>

</div>

</div>

<label>Email Address</label>

<div class="input-box">

<i class="fa-regular fa-envelope"></i>

<input
type="email"
name="email"
placeholder="Enter email"
required>

</div>

<label>Phone Number</label>

<div class="input-box">

<i class="fa-solid fa-phone"></i>

<input
type="text"
name="phone"
placeholder="Enter phone number"
required>

</div>

<label>Password</label>

<div class="input-box">

<i class="fa-solid fa-lock"></i>

<input
type="password"
name="password"
placeholder="Create password"
required>

</div>

<label>Confirm Password</label>

<div class="input-box">

<i class="fa-solid fa-lock"></i>

<input
type="password"
name="confirm"
placeholder="Confirm password"
required>

</div>

<div class="terms">

<input type="checkbox" required>

I agree to the Terms of Service and Privacy Policy.

</div>

<button class="btn">
Create Account
</button>

<a href="../index.html" style="display: inline-block; margin-top: 12px; color: #2ecc71; font-weight: 600; text-decoration: underline; text-underline-offset: 3px;">
Go to Home
</a>

</form>

</div>

</div>

</body>

</html>