<?php
require_once "includes/db.php";

$error = "";
$success = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $firstname = trim($_POST["firstname"]);
    $lastname = trim($_POST["lastname"]);
    $email = trim($_POST["email"]);
    $phone = trim($_POST["phone"]);
    $password = $_POST["password"];
    $confirm = $_POST["confirm_password"];

    if ($password != $confirm) {

        $error = "Passwords do not match.";

    } else {

        $check = $conn->prepare("SELECT user_id FROM userdata_table WHERE email = ?");
        $check->bind_param("s", $email);
        $check->execute();

        $result = $check->get_result();

        if ($result->num_rows > 0) {

            $error = "Email already exists.";

        } else {

            $stmt = $conn->prepare("
                INSERT INTO userdata_table
                (
                    first_name,
                    last_name,
                    email,
                    phone,
                    password
                )
                VALUES
                (
                    ?, ?, ?, ?, ?
                )
            ");

            $stmt->bind_param(
                "sssss",
                $firstname,
                $lastname,
                $email,
                $phone,
                $password
            );

            if ($stmt->execute()) {

                $success = true;

            } else {

                $error = "Something went wrong.";

            }

        }

    }

}
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>ThreatBuddy | Sign Up</title>

    <link rel="stylesheet" href="assets/css/style.css">

    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">

</head>

<body>
    <div id="successModal" class="modal">

        <div class="modal-content">

            <div class="success-icon">

                <i class="fa-solid fa-circle-check"></i>

            </div>

            <h2>Registration Successful!</h2>

            <p>
                Your ThreatBuddy account has been created successfully.
            </p>

            <span>Redirecting to Sign In...</span>

        </div>

    </div>

    <div class="container">

        <div class="card">

            <!-- Logo -->
            <div class="logo">

                <img src="assets/img/LogoTB.png" alt="ThreatBuddy Logo">

            </div>

            <!-- Heading -->
            <h1>Create Your Account</h1>

            <p class="subtitle">
                Join ThreatBuddy and stay ahead
                <br>
                of cyber threats
            </p>

            <?php if (!empty($error)): ?>

                <p class="message error">
                    <?= $error ?>
                </p>

            <?php endif; ?>

           <?php if ($success): ?>

                <script>

                    const modal = document.getElementById("successModal");

                    modal.classList.add("show");

                    setTimeout(function(){

                        window.location.href = "../SignIn/index.php";
                        

                    },3000);

                </script>

            <?php endif; ?>

            <!-- Sign Up Form -->
            <form method="POST">

                <div class="row">

                    <div class="form-group">

                        <label>First Name</label>

                        <div class="input-box">

                            <i class="fa-regular fa-user"></i>

                            <input
                                type="text"
                                name="firstname"
                                placeholder="Enter your first name"
                                required>

                        </div>

                    </div>

                    <div class="form-group">

                        <label>Last Name</label>

                        <div class="input-box">

                            <i class="fa-regular fa-user"></i>

                            <input
                                type="text"
                                name="lastname"
                                placeholder="Enter your last name"
                                required>

                        </div>

                    </div>

                </div>

                <div class="form-group">

                    <label>Email Address</label>

                    <div class="input-box">

                        <i class="fa-regular fa-envelope"></i>

                        <input
                            type="email"
                            name="email"
                            placeholder="Enter your email address"
                            required>

                    </div>

                </div>

                <div class="form-group">

                    <label>Phone Number</label>

                    <div class="phone-box">

                        <div class="country">

                            🇵🇭

                            <select>

                                <option>+63</option>

                            </select>

                        </div>

                        <div class="divider"></div>

                        <i class="fa-solid fa-phone"></i>

                        <input
                            type="text"
                            name="phone"
                            placeholder="Enter your phone number"
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
                            placeholder="Create a password"
                            required>

                        <i class="fa-regular fa-eye toggle-password"></i>

                    </div>

                    <!-- <div class="strength-wrapper">

                        <div class="strength-meter">

                            <div class="strength-bar"></div>

                        </div>

                        <div class="strength-text">

                            Password Strength:
                            <span>Medium</span>

                        </div>

                    </div> -->

                </div>

                <div class="form-group">

                    <label>Confirm Password</label>

                    <div class="input-box">

                        <i class="fa-solid fa-lock"></i>

                        <input
                            type="password"
                            id="confirm"
                            name="confirm_password"
                            placeholder="Confirm your password"
                            required>

                        <i class="fa-regular fa-eye toggle-confirm"></i>

                    </div>

                </div>

                <div class="checkbox">

                    <input
                        type="checkbox"
                        required>

                    <label>

                        I agree to the

                        <a href="#">Terms of Service</a>

                        and

                        <a href="#">Privacy Policy</a>

                    </label>

                </div>

                <button
                    type="submit"
                    class="btn">

                    Create Account

                </button>

            </form>

            <div class="bottom-text">

                Already have an account?

                <a href="../SignIn/index.php">

                    Sign In

                </a>

            </div>

        </div>

    </div>

    <script>

        const password = document.getElementById("password");
        const confirm = document.getElementById("confirm");

        const togglePassword = document.querySelector(".toggle-password");
        const toggleConfirm = document.querySelector(".toggle-confirm");

        togglePassword.addEventListener("click", function () {

            if (password.type === "password") {

                password.type = "text";

                this.classList.remove("fa-eye");
                this.classList.add("fa-eye-slash");

            } else {

                password.type = "password";

                this.classList.remove("fa-eye-slash");
                this.classList.add("fa-eye");

            }

        });

        toggleConfirm.addEventListener("click", function () {

            if (confirm.type === "password") {

                confirm.type = "text";

                this.classList.remove("fa-eye");
                this.classList.add("fa-eye-slash");

            } else {

                confirm.type = "password";

                this.classList.remove("fa-eye-slash");
                this.classList.add("fa-eye");

            }

        });

    </script>

</body>

</html>