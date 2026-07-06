<?php

include "db.php";

if(isset($_POST)){

    $name = $_POST['name'];
    $category = $_POST['category'];
    $severity = $_POST['severity'];
    $about = $_POST['about'];
    $how_it_works = $_POST['how_it_works'];
    $prevention = $_POST['prevention'];

    $image = $_FILES['image']['name'];
    $temp = $_FILES['image']['tmp_name'];

    move_uploaded_file($temp, "../uploads/".$image);

    mysqli_query($conn,"INSERT INTO library_table
    (name,category,severity,about,how_it_works,prevention,image)
    VALUES
    ('$name','$category','$severity','$about','$how_it_works','$prevention','$image')");

    header("Location: ../index.php");
}

?>