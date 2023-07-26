<link rel="stylesheet" href="./styles.css"/>
<style>
  body{
    background-color:#e5e5e5;
  }
</style>
<center>
<h1 style="color:#fca311">SHOW MEMBERS</h1>
</center>

<div class="center">
<?php
include "connect.php";

$sql = "SELECT * FROM tbl_member";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  ?>
  <table class="table">
    <th> Name-Lastname </th>
    <th> Email </th>
    <th> Tel. </th>
    <th> Address </th>
    <th> Images </th>
    <th> Edit </th>
    <th> Delete </th>


    <?php
    while ($row = mysqli_fetch_assoc($result)) {
      ?>

      <tr>
        <td><?php echo"$row[firstname] $row[lastname]"; ?> </td>
        <td><?php echo"$row[email]"; ?> </td>
        <td><?php echo"$row[phone]"; ?> </td>
        <td><?php echo"$row[address]"; ?> </td>
        <td><img src="./image/<?php echo $row[photo] ?>" width="150px" />  </td>
        <td><?php echo"<a href ='member_edit.php?id=$row[id]'> edit </a>";?> </td>
        <td><?php echo"<a href ='member_del.php?id=$row[id]'> delete </a>";?> </td>
    </tr>
    <?php
    }
    ?>
  </table>

  <?php
} else {
  echo "0 results";
}
mysqli_close($conn);
?>
</div>