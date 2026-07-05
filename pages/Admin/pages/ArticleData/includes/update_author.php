<?php

    include "db.php";

    $id = $_POST['id'];
    $name = mysqli_real_escape_string($conn,$_POST['author_name']);

    $query = mysqli_query($conn,
    "SELECT * FROM author_table WHERE id='$id'");

    $row = mysqli_fetch_assoc($query);

    $photo = $row['photo'];

    if($_FILES['author_photo']['name']!=""){

        if(file_exists("../uploads/authors/".$photo)){
            unlink("../uploads/authors/".$photo);
        }

        $photo = time()."_".$_FILES['author_photo']['name'];

        move_uploaded_file(
            $_FILES['author_photo']['tmp_name'],
            "../uploads/authors/".$photo
        );

    }

    mysqli_query($conn,"
    UPDATE author_table
    SET
    author_name='$name',
    photo='$photo'
    WHERE id='$id'
    ");

    header("Location: ../index.php");
    exit();

?>