<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Update form</title>
  </head>
  <body>
    <h1>UPDATE</h1>
    <h2>Enter yor ID and updated</h2>
    <form class="" action="" method="POST">
      <fieldset>
      <legend>Update Data:</legend>

      ID :<br>
      <input type="text" name="id" value="">
      <br>

      First Name :<br>
      <input type="text" name="uname1" value="">
      <br>

      Last Name :<br>
      <input type="text" name="uname2" value="">
      <br>

      Email :<br>
      <input type="text" name="uemail1" value="">
      <br>

      Password :<br>
      <input type="text" name="upass" value="">
      <br>

      Gender :<br>
      <input type="radio" name="ugender1" value="Male">Male
      <input type="radio" name="ugender1" value="Female">female
      <br><br>

      <input type="submit" name="update" value="Update Data">
    </fieldset>


    </form>
  </body>
</html>

<?php
  include "config.php";

  if(isset($_POST['update'])){

      $id = $_POST['id'];

      $sql = "UPDATE users SET firstname = '$_POST[uname1]', lastname = '$_POST[uname2]' , email = '$_POST[uemail1]' , password = '$_POST[upass]' , gender = '$_POST[ugender1]' where id = '$_POST[id]' ";

      $result = mysqli_query($conn , $sql);

      if($result){
        echo "Update success";
  }

  else{
    echo "Update failed";
  }
}
 ?>
