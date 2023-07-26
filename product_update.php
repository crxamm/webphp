<?php
include "connect.php";

$filename = $_FILES["photo"]["name"];
$tempname = $_FILES["photo"]["tmp_name"];
$folder = "./image/" . $filename;

$sql = "UPDATE tbl_product SET 
    name='$_POST[name]', 
    price='$_POST[price]' ,
    stock='$_POST[stock]', 
    description='$_POST[description]' ,
    photo='$filename'
    WHERE id='$_GET[id]' ";

if (mysqli_query($conn, $sql)) {
    if (move_uploaded_file($tempname, $folder)) {
        echo "upload";
    } else {
        echo "error";
    }
    echo "update done";
    header("location: product_show.php");
} else {
    echo "error deleting record" . mysqli_error($conn);
}

mysqli_close($conn);
?>