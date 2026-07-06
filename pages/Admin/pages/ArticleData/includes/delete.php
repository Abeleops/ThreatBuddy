<?php

include "db.php";

$id=$_GET['id'];

$get=mysqli_query($conn,"SELECT media FROM article_table WHERE id='$id'");
$row=mysqli_fetch_assoc($get);

if($row){

    if($row['media']!=""){

        $file="../uploads/".$row['media'];

        if(file_exists($file)){

            unlink($file);

        }

    }

}

mysqli_query($conn,"DELETE FROM article_table WHERE id='$id'");

header("Location: ../index.php");

?>