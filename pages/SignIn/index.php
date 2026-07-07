<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>ThreatBuddy | Sign In</title>

    <link rel="stylesheet" href="./assets/css/style.css">

    <!-- Font Awesome Icons -->
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">

</head>

<body>

<div class="container">

    <div class="card">

        <!-- Logo -->
        <div class="logo">
            <img src="assets/img/LogoTB.png" alt="ThreatBuddy Logo">
        </div>

        <!-- Heading -->
        <h1>Welcome Back</h1>

        <p class="subtitle">
            Sign in to your ThreatBuddy account
        </p>

        <!-- Login Form -->
        <form action="process/process_signin.php" method="POST">

            <div class="form-group">

                <label>Email Address</label>

                <div class="input-box">

                    <i class="fa-regular fa-envelope"></i>

                    <input
                        type="email"
                        name="email"
                        placeholder="Enter your email"
                        required>

                </div>

            </div>

            <div class="form-group">

                <label>Password</label>

                <div class="input-box">

                    <i class="fa-solid fa-lock"></i>

                    <input
                        type="password"
                        id="password"
                        name="password"
                        placeholder="Enter your password"
                        required>

                    <i class="fa-regular fa-eye toggle-password"></i>

                </div>

                <div class="options">

                    <a href="#">Forgot Password?</a>

                </div>

            </div>

            <button type="submit" class="btn">
                Sign In
            </button>

        </form>

        <div class="bottom-text">

            Don't have an account?

            <a href="signup.php">
                Get Started
            </a>

        </div>

    </div>

</div>

<script>

const toggle = document.querySelector(".toggle-password");
const password = document.getElementById("password");

toggle.addEventListener("click", function(){

    if(password.type === "password"){

        password.type = "text";

        this.classList.remove("fa-eye");
        this.classList.add("fa-eye-slash");

    }else{

        password.type = "password";

        this.classList.remove("fa-eye-slash");
        this.classList.add("fa-eye");

    }

});

</script>

</body>
</html>