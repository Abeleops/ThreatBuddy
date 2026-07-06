<?php

include "db.php";

$author = mysqli_real_escape_string($conn,$_POST['author']);
$title = mysqli_real_escape_string($conn,$_POST['title']);
$subtitle = mysqli_real_escape_string($conn,$_POST['subtitle']);
$link = mysqli_real_escape_string($conn,$_POST['link']);
$category = mysqli_real_escape_string($conn,$_POST['category']);
$content = mysqli_real_escape_string($conn,$_POST['content']);

$media="";

$category = $_POST['category'];

if($category == "Other"){
    $category = $_POST['other_category'];
}

if(isset($_FILES['media']) && $_FILES['media']['error']==0){

    $media=time()."_".$_FILES['media']['name'];

    move_uploaded_file(
        $_FILES['media']['tmp_name'],
        "../uploads/".$media
    );

}

mysqli_query($conn,"
INSERT INTO article_table
(
author,
title,
subtitle,
read_more_link,
category,
content,
media
)

VALUES
(
'$author',
'$title',
'$subtitle',
'$link',
'$category',
'$content',
'$media'
)

");

header("Location: ../index.php");

?>