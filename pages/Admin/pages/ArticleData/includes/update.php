<?php

include "db.php";

$id = $_POST['id'];

$author = mysqli_real_escape_string($conn, $_POST['author']);
$title = mysqli_real_escape_string($conn, $_POST['title']);
$subtitle = mysqli_real_escape_string($conn, $_POST['subtitle']);
$category = mysqli_real_escape_string($conn, $_POST['category']);
$read_more_link = mysqli_real_escape_string($conn, $_POST['link']);
$content = mysqli_real_escape_string($conn, $_POST['content']);

$query = mysqli_query($conn,
"SELECT * FROM article_table WHERE id='$id'");

$row = mysqli_fetch_assoc($query);

$media = $row['media'];

if($_FILES['media']['name'] != ""){

    if(file_exists("../uploads/articles/".$media)){
        unlink("../uploads/articles/".$media);
    }

    $media = time()."_".$_FILES['media']['name'];

    move_uploaded_file(
        $_FILES['media']['tmp_name'],
        "../uploads/articles/".$media
    );
}

mysqli_query($conn,"
UPDATE article_table
SET
author='$author',
title='$title',
subtitle='$subtitle',
read_more_link='$read_more_link',
category='$category',
content='$content',
media='$media'
WHERE id='$id'
");

header("Location: ../index.php");
exit();

?>