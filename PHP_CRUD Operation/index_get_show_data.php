<!DOCTYPE html>
<html>
<head>
<title>PHP File Upload example</title>
</head>
<style>
div {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
input[type=submit]:hover {
  background-color: #45a049;
}
</style>
<body>
<div>


<center><form action="result.php" enctype="multipart/form-data" method="POST">
	<h2>STUDENT REGISTER FORM</h2>
		<label>Student Name :</label>
        <input type="text" name="std_name"><br><br>
  
        <label>Student Email ID :</label>
        <input type="text" name="std_email_id"><br><br>
        <label>College Name :</label>
        <input type="text" name="clg_name"><br><br>
   
        <label> Deparment:</label>
        <input type="text" name="deparment" ><br><br>
    
		<label>Address:</label>
        <input type="text" name="address"><br><br>
		
		<label>Contact Number :</label>
        <input type="text" name="phone_number"><br><br>

		<label>Upload Image :</label>
        <input type="file" name="image"><br><br>
		<input type="submit" value="submit" name="Submit1"> <br/>


</form></center>
</div>




</body>
</html>
