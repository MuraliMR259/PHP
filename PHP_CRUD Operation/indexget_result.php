<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Result page</title>

</head>
<body>

<!--Student image display in without mysql database -->
<?php
		
		$link = mysqli_connect("localhost", "root", "", "test");
		 
		
		if($link === false){
			die("ERROR: Could not connect. " . mysqli_connect_error());
		}
		 
		
		$student_name = mysqli_real_escape_string($link, $_REQUEST['std_name']);
		$student_emailid = mysqli_real_escape_string($link, $_REQUEST['std_email_id']);
		$college_name = mysqli_real_escape_string($link, $_REQUEST['clg_name']);
		$department = mysqli_real_escape_string($link, $_REQUEST['deparment']);
		$address = mysqli_real_escape_string($link, $_REQUEST['address']);
		$phone_number = mysqli_real_escape_string($link, $_REQUEST['phone_number']);
		$student_image= mysqli_real_escape_string($link, $_REQUEST['image']);


		
		$sql = "INSERT INTO student (student_name,email_id,college_name,department,address,contact_number,std_image) VALUES ('$student_name','$student_emailid','$college_name','$department','$address','$phone_number','$student_image')";
		
		if(mysqli_query($link, $sql)){
			
			
		} else{
			echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
		}
		 
		
		mysqli_close($link);
		?>

	<h1>Welcome</h1>
	
	
	<h3>Your Details Added successfully </h3><br>
	<hr>
	
	<?php 
		echo $_POST['std_name']; 
		echo "</br>"; 
		echo $_POST['std_email_id']; 
		echo "</br>"; 
		echo $_POST['clg_name']; 
		echo "</br>"; 
		echo $_POST['deparment']; 
		echo "</br>"; 
		echo $_POST['address']; 
		echo "</br>"; 
		echo $_POST['phone_number']; 
		echo "</br>"; 
	?>

	<?php
	if(isset($_POST['Submit1']))
	{ 
	$filepath = "images/" . $_FILES["image"]["name"];

	if(move_uploaded_file($_FILES["image"]["tmp_name"], $filepath)) 
	{
	
		echo "<img src=".$filepath." height=200 width=300 />";
	} 
	else 
	{
		echo "Error !!";
	}
	} 
	?>

	
	
	<hr>
	<h3>Back To Home</h3><br>
	<a href="student.php">Click Here</a>
	
</body>
</html>