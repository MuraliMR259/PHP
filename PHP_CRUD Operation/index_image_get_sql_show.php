<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Index page</title>
</head> 
<body>

<!--Student image display in with mysql database -->
<?php
	$msg="";
	if(isset($_POST['upload'])){
		$target = "images/".basename($_FILES['image']['name']);
		$db = mysqli_connect("localhost" , "root" , "" , "photos");
		$image = $_FILES['image']['name'];
		$text = $_POST['text'];
		
		$sql = "INSERT INTO images(image , name) VALUES ('$image','$text') ";
		mysqli_query($db , $sql);
		
		if(move_uploaded_file($_FILES['image']['tmp_name'], $target)){
			$msg = "image upload success";
		}else{
			$msg = "image upload  not success";

		}
	}		
?>

<center><form method="post" action="index.php" enctype="multipart/form-data">
	
	<div>
		 <label>STUDENT NAME : </label>
		<input type="text" name="text">
	</div><br>
	
	<div>
		<label>STUDENT Image :</label>
		<input type="file" name="image">
	</div><br>
	
	<div>
		<input type="submit" name="upload" value="upload image">
	</div>

</form></center>
</div>

<?php
	$db = mysqli_connect("localhost" , "root" , "" , "photos");
	$sql = "SELECT * FROM images";
	$result = mysqli_query($db , $sql);
	while($row = mysqli_fetch_array($result)){
		echo "<div id ='img_div'>";
			echo "<p>".$row['name']."</p>";
			echo "<img src='images/".$row['image']."' height=200 width=300 >";
			
		echo "</div>";
	}
?>
</body>
</html>