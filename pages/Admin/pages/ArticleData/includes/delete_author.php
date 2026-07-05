<?php
    include "db.php";

    $id = $_GET['id'];

    $query = mysqli_query($conn,
    "SELECT photo FROM author_table WHERE id='$id'");

    $row = mysqli_fetch_assoc($query);

    if(file_exists("../uploads/authors/" . $row['photo'])){
        unlink("../uploads/authors/" . $row['photo']);
    }

    mysqli_query($conn,
    "DELETE FROM author_table WHERE id='$id'");

    header("Location: ../index.php");
    exit();
?>