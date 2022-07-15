
<?php
include('../db/connect.php');
session_start();
?>
<!DOCTYPE html>
<html>
    <title>Login Test Form</title>
<body>

<h2>HTML Forms</h2>

<form action="./supplier_registration_handler.php" method="POST">
  <label for="fname">Supplier Name:</label><br>
  <input type="text" id="fname" name="supplier_name" value=""><br>
  <label for="lname">Address:</label><br>
  <input type="text" id="lname" name="supplier_address" value=""><br><br>
  <input type="submit" name="supplier_register_button_pressed" value="submit">
</form> 



</body>
</html>
