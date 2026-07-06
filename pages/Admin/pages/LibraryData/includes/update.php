<?php

include "db.php";

$id = $_POST['id'];

$name = $_POST['name'];
$category = $_POST['category'];
$severity = $_POST['severity'];
$about = $_POST['about'];
$how_it_works = $_POST['how_it_works'];
$prevention = $_POST['prevention'];

if($_FILES['image']['name']!=""){

    $get = mysqli_query($conn,"SELECT image FROM library_table WHERE id='$id'");
    $old = mysqli_fetch_assoc($get);

    if(file_exists("../uploads/".$old['image'])){
        unlink("../uploads/".$old['image']);
    }

    $image = $_FILES['image']['name'];
    $temp = $_FILES['image']['tmp_name'];

    move_uploaded_file($temp,"../uploads/".$image);

    mysqli_query($conn,"UPDATE library_table SET

        name='$name',
        category='$category',
        severity='$severity',
        about='$about',
        how_it_works='$how_it_works',
        prevention='$prevention',
        image='$image'

        WHERE id='$id'
    ");

}else{

    mysqli_query($conn,"UPDATE library_table SET

        name='$name',
        category='$category',
        severity='$severity',
        about='$about',
        how_it_works='$how_it_works',
        prevention='$prevention'

        WHERE id='$id'
    ");

}

header("Location: ../index.php");

?>