<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>ThreatBuddy - Sign In</title>

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

<h1>Welcome Back</h1>

<p>Sign in to your ThreatBuddy account</p>

<form action="process_signin.php" method="POST">

<label>Email Address</label>

<div class="input-box">
<i class="fa-regular fa-envelope"></i>
<input
type="email"
name="email"
placeholder="Enter your email"
required>
</div>

<label>Password</label>

<div class="input-box">
<i class="fa-solid fa-lock"></i>
<input
type="password"
name="password"
placeholder="Enter your password"
required>
</div>

<div class="options">
<a href="#">Forgot password?</a>
</div>

<button type="submit" class="btn">
Sign In
</button>

<a href="../index.html" style="display: inline-block; margin-top: 12px; color: #2ecc71; font-weight: 600; text-decoration: underline; text-underline-offset: 3px;">
Go to Home
</a>

<div class="bottom-text">
Don't have an account?
<a href="signup.php">Get Started</a>
</div>

</form>

</div>

</div>

</body>
</html>