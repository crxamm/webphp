<link rel="stylesheet" href="./styles.css"/>

<center>
<h1 style="color:#f46d6d">SHOW FORM</h1>
</center>

<div class="container">
<form action="product_insert.php"method="post"enctype="multipart/form-data">

Name <input type = "text" name="name" class="input"/>
Prize <input type = "int" name="price" class="input"/> 
Stock <input type = "int" name="stock" class="input"/> 
Description <input type = "text" name="description" class="input"/> 
Add <input type="file" name="photo" /> 
<input type = "submit" value="send" class="button1"/>


</form>
</div>