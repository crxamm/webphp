<link rel="stylesheet" href="./styles.css"/>
<div class="container">
    <center>
<h1 style="color:#4c657e">REGISTER </br></h1>
</center>

<form action="member_insert.php" method="post" enctype="multipart/form-data">
    Name: <input type="text" name="firstname" class="input"/>
    Lastname: <input type="text" name="lastname" class="input"/> 
    Email: <input type="email" name="email" class="input"/> 
    Password: <input type="password" name="password" class="input"/> 
    Tel: <input type="text" name="phone" class="input"/> 
    Address: <textarea name="address" class="input"></textarea> 
    Add <input type="file" name="photo" /> 
    <input type="submit" value="save" class="button"/>

</form>
</div>
