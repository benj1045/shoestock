<?php

	session_start();
	include 'config.php';
	if(isset($_POST['submit']))
	{
		$brand = mysqli_real_escape_string($db,$_POST['brand']);
		$size = mysqli_real_escape_string($db,$_POST['size']);

		$filename = addslashes($_FILES['image']['name']);
		$tmpname = addslashes(file_get_contents($_FILES['image']['tmp_name']));

		$array = array('jpg','jpeg','png');
		$ext = pathinfo($filename, PATHINFO_EXTENSION);

		if(!empty($tmpname))
		{
			if(in_array($ext, $array))
			{
				$sql = mysqli_query($db,"INSERT INTO `shoestocks` (`brand`, `size`, `picname`,`img`) VALUES ('$brand', '$size', '$filename','$tmpname')");
			}
		}
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>USER HOME</title>
</head>
<body>
	<form method="post" action="userhome.php" enctype="multipart/form-data">
		<center>
			<h1>WELCOME ADMIN</h1>

			<table>
				<div>
					<label>BRAND</label>
					<input type="text" name="brand">
				</div>
				<div>
					<label>SIZE</label>
					<input type="text" name="size">
				</div>
				<div>
					<input type="file" name="image" id="image">
				</div>
				<div>
					<input type="submit" name="submit" value="SAVE">
				</div>
			</table>
		</center>
		
	</form>
				<button><a href="view_item.php"></a>VIEW ITEM LIST</button>

</body>
</html>