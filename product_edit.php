<link rel="stylesheet" href="./styles.css"/>
<div class="container">
<center>
<h1 style="color:#4b7551">SHOW EDIT</h1>
</center>
<?php
include"connect.php";
$sql= "SELECT * FROM tbl_product  WHERE id='$_GET[id]'"; 
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($result) ;
?>

<form action="product_update.php?id=<?php echo $row[id]?>" method="post" enctype="multipart/form-data">
    Name <input type="text" name="name" value="<?php echo $row[name]; ?>"class="input"/>
    Prize <input type="int" name="price" value="<?php echo $row[price]; ?>"class="input"/>
    Stock <input type="int" name="stock" value="<?php echo $row[stock]; ?>"class="input"/>
    Description <input type="text" name="description" value="<?php echo $row[description]; ?>" class="input"/>
    Add <input type="file" name="photo" />
    <img src="./image/<?php echo $row[photo] ?>" width="200px" />
    <input type="submit" value="update" class="button2"/>

</form>
</div>