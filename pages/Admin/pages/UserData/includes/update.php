<?php

    include "db.php";

    $id = $_POST['user_id'];
    $fname = $_POST['first_name'];
    $lname = $_POST['last_name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];

    mysqli_query($conn, "UPDATE userdata_table SET
    first_name='$fname',
    last_name='$lname',
    email='$email',
    phone='$phone',
    password='$password'
    WHERE user_id='$id'");

    header("Location: ../index.php");
    exit();

?>