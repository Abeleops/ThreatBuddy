<?php
    session_start();
    include("includes/db.php");

    $error = "";

    if(isset($_POST['login'])){

        $username = mysqli_real_escape_string($conn,$_POST['username']);
        $password = $_POST['password'];

        $query = mysqli_query($conn,"SELECT * FROM admin_db WHERE username='$username'");

        if(mysqli_num_rows($query)>0){

            $row = mysqli_fetch_assoc($query);

            if($password == $row['password']){

                $_SESSION['admin_id']=$row['id'];
                $_SESSION['username']=$row['username'];

                header("Location: pages/UserData/index.php");
                exit();

            }else{
                $error="Invalid username or password.";
            }

        }else{
            $error="Invalid username or password.";
        }

    }
?>

<!DOCTYPE html>
<html>

<head>

    <title>Admin Login</title>

    <link rel="stylesheet" href="assets/css/style.css">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

</head>

<body>

    <div class="login-card">
        <img src="assets/img/LogoTB.png" class="logo">
        <h1>Admin Portal</h1>
        <p>Please login to your account</p>
        <?php
        if($error!=""){
            echo "<div class='error'>$error</div>";
        }
        ?>
        <form method="POST">
            <label>Username</label>

            <input type="text" name="username" required>

            <label>Password</label>

            <input type="password" name="password" required>

            <button type="submit" name="login">
                Login
            </button>

        </form>

    </div>

</body>

</html>