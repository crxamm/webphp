<?php
include "connect.php";

$filename = $_FILES["photo"]["name"];
$tempname = $_FILES["photo"]["tmp_name"];
$folder = "./images/" . $filename;

$sql = "INSERT INTO tbl_product (name,price,stock,photo,description)
VALUES ('$_POST[name]','$_POST[price]','$_POST[stock]','$filename','$_POST[description]')";

if ($conn->query($sql) === TRUE) {
  if (copy($tempname, $folder)) {
    echo "upload";
  } else {
    echo "error";
  }
    echo "New record created successfully";
    header ("location: member_show.php");
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
  
  $conn->close();
?>