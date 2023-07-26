<link rel="stylesheet" href="./styles.css"/>
<div class="container">
<center>
<h1 style="color:#993d9a">EDIT</h1>
</center>
<?php
include"connect.php";
$sql= "SELECT * FROM tbl_member  WHERE id='$_GET[id]'"; 
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($result) ;
?>

<form action="member_update.php?id=<?php echo $row[id]?>" method="post" enctype="multipart/form-data">
    Name <input type="text" name="firstname" class="input"  value="<?php echo $row[firstname]; ?>" />
    Lastname <input type="text" name="lastname" class="input" value="<?php echo $row[lastname]; ?> " />
    Email <input type="email" name="email" class="input" value="<?php echo $row[email]; ?>" /><br />
    Tel. <input type="text" name="phone" class="input" value="<?php echo $row[phone]; ?>"/>
    Address <textarea name="address" class="input" > <?php echo $row[address]; ?> </textarea> 
    Add <input type="file" name="photo" /> 
    <input type="submit" value="Update" class="button3"/>

</form>
</div>