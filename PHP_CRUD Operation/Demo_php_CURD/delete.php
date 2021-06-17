<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>DELETE INCEDX</title>
  </head>
  <body>

    <h1>Delete the Record</h1>
    <hr>
    <form class="" action="" method="POST">

      <h3>Enter your ID and Delete the Data</h3>
      <input type="text" name="userid" value="" placeholder="Enter your ID">
      <input type="submit" name="delete" value="Delete Data">
    </form>

  </body>
</html>
<?php

  include "config.php";
  if(isset($_POST['delete'])){

    $id = $_POST['userid'];

    $sql = " DELETE FROM users WHERE id = '$id' ";

    $result = mysqli_query($conn , $sql);

    if($result){
      echo "Delete the DATA success";
  }

  else{
    echo "Delete the DATA failed";
  }
}
 ?>
