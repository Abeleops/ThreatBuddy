<?php

    include "db.php";

    $id = $_GET['id'];

    mysqli_query($conn,
    "DELETE FROM userdata_table WHERE user_id='$id'");

    header("Location: ../index.php");