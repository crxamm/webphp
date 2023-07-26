<?php
include "connect.php";

$filename = $_FILES["photo"]["name"];
$tempname = $_FILES["photo"]["tmp_name"];
$folder = "./image/" . $filename;

$sql = "INSERT INTO tbl_member (firstname, lastname, email, password, phone,photo,address)
VALUES ('$_POST[firstname]','$_POST[lastname]','$_POST[email]','$_POST[password]','$_POST[phone]','$filename','$_POST[address]')";

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