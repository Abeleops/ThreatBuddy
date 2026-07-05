<?php

include "db.php";

$id = $_GET['id'];

$get = mysqli_query($conn,"SELECT image FROM library_table WHERE id='$id'");
$row = mysqli_fetch_assoc($get);

if(file_exists("../uploads/".$row['image'])){
    unlink("../uploads/".$row['image']);
}

mysqli_query($conn,"DELETE FROM library_table WHERE id='$id'");

header("Location: ../index.php");

?>