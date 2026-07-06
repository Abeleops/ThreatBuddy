<?php
session_start();
include "db.php";

if(isset($_POST['author_name'])){

    $author_name = mysqli_real_escape_string($conn, $_POST['author_name']);

    $photo = $_FILES['author_photo']['name'];
    $tmp = $_FILES['author_photo']['tmp_name'];

    $newName = time() . "_" . $photo;

    move_uploaded_file(
        $tmp,
        "../uploads/authors/" . $newName
    );

    mysqli_query($conn, "
        INSERT INTO author_table(author_name, photo)
        VALUES('$author_name','$newName')
    ");

    header("Location: ../index.php");
    exit();
}
?>