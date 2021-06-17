<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Upload form</title>
  </head>
  <body>
    <h2>Register form</h2>
    <form class="" action="" method="post">
      <fieldset>
      <legend>persional information :</legend>
      First Name :<br>
      <input type="text" name="name1" value="">
      <br>

      Last Name :<br>
      <input type="text" name="name2" value="">
      <br>

      Email :<br>
      <input type="text" name="email1" value="">
      <br>

      Password :<br>
      <input type="text" name="pass" value="">
      <br>

      Gender :<br>
      <input type="radio" name="gender1" value="Male">Male
      <input type="radio" name="gender1" value="Female">female
      <br><br>

      <input type="submit" name="submit" value="submit">
    </fieldset>


    </form>

  </body>
</html>


<?php
  include "config.php";

  if(isset($_POST['submit'])){


    $user_firstname =  $_POST['name1'];
		$user_lastname = $_POST['name2'];
		$email = $_POST['email1'];
		$password = $_POST['pass'];
		$gender =  $_POST['gender1'];
  }
		$sql = "INSERT INTO users (firstname,lastname,email,password,gender	) VALUES ('$user_firstname','$user_lastname','$email','$password','$gender')";

		$result = $conn->query($sql);

    if($result == TRUE){
      echo " New record added success";

    }
    else{
      echo "New record added failed";
    }
    $conn->close();
		?>
