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

<form action="../includes/process_signup.php" method="POST">

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

<div class="strength-wrapper">
  <div class="strength-meter">
    <div id="password-strength-bar" class="strength-bar"></div>
  </div>
  <small id="password-strength-text" class="strength-text"></small>
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

<script>
function checkPasswordStrength(password) {
    const bar = document.getElementById('password-strength-bar');
    const text = document.getElementById('password-strength-text');

    if (!bar || !text) return;

    let score = 0;

    if (password.length >= 8) score++;
    if (/[A-Z]/.test(password)) score++;
    if (/[a-z]/.test(password)) score++;
    if (/\d/.test(password)) score++;
    if (/[^A-Za-z0-9]/.test(password)) score++;

    const strengthLevels = [
        { label: '', width: '0%' },
        { label: 'Very weak', width: '20%' },
        { label: 'Weak', width: '40%' },
        { label: 'Fair', width: '60%' },
        { label: 'Good', width: '80%' },
        { label: 'Strong', width: '100%' }
    ];

    const level = strengthLevels[Math.min(score, 5)];
    bar.style.width = level.width;
    bar.className = 'strength-bar';

    if (score <= 2) {
        bar.classList.add('weak');
    } else if (score === 3) {
        bar.classList.add('fair');
    } else if (score === 4) {
        bar.classList.add('good');
    } else if (score === 5) {
        bar.classList.add('strong');
    }

    text.textContent = password.length ? level.label : '';
}

document.addEventListener('DOMContentLoaded', function () {
    const passwordInput = document.querySelector('input[name="password"]');
    if (passwordInput) {
        passwordInput.addEventListener('input', function () {
            checkPasswordStrength(this.value);
        });
    }
});
</script>

</body>

</html>