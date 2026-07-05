<?php

    include "db.php";

    if(isset($_POST['first_name'])){

        $fname = $_POST['first_name'];
        $lname = $_POST['last_name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];

        $password = $_POST['password'];

        mysqli_query($conn,"INSERT INTO userdata_table
        (first_name,last_name,email,phone,password)

        VALUES

        ('$fname','$lname','$email','$phone','$password')");

    }

    header("Location: ../index.php");