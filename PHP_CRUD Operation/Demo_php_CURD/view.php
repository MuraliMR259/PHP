<?php
  include "config.php";
  $sql = "SELECT * FROM users";
  $result = mysqli_query($conn , $sql);

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>view index</title>

    <style>
    table, th, td {
        border: 1px solid black;
        border-collapse: collapse;
      }
      th, td {
          padding: 15px;
        }
</style>
</head>
  <body>
    <h1>Welcom<h1>
    <hr>
    <h3> See your Details<h3>

    <?php
    echo "<table>
    <tr>
    <th>ID</th>
    <th>Fastname</th>
    <th>Lastname</th>
    <th>Email</th>
    <th>Passwor</th>
    <th>Gender</th>
    
    </tr>";
    while($row = mysqli_fetch_array($result)){
      echo "<tr>";
      echo "<td>" . $row['id'] . "</td>";
      echo "<td>" . $row['firstname'] . "</td>";
      echo "<td>" . $row['lastname'] . "</td>";
      echo "<td>" . $row['email'] . "</td>";
      echo "<td>" . $row['password'] . "</td>";
      echo "<td>" . $row['gender'] . "</td>";
      echo "</tr>";
      }
      echo "</table>";
      mysqli_close($conn);
      ?>

  </body>
</html>
