<?php 

	session_start();
	include 'config.php';

	if(isset($_POST['submit']))
	{

		$username = mysqli_real_escape_string($db,$_POST['username']);
		$password = mysqli_real_escape_string($db,$_POST['password']);

		$result = mysqli_query($db,"INSERT INTO `users` (`username`, `password`) VALUES ('$username','$password')");

		echo "<script>alert('Succesfully Registered!'); window.location.href='home.php'</script>";

	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>CREATE ACCOUNT FORM</title>

</head>
<body>
	<form method="post" action="form.php">
		<center>
			<h1>PLEASE FILL UP THE NEEDED INFORMATION</h1>
		</center>
		<center>
			<table>
				<div>
					<a href="home.php" class="link">GO BACK TO HOMEPAGE</a>
				</div>
				<div>
					<label>
						<input type="text" name="username" placeholder="USERNAME">
					</label>
				<div>
					<label>
						<input type="password" name="password" placeholder="PASSWORD" required="REQUIRED">
					</label>
				</div>
				<div>
						<label>
							<button type="submit" name="submit">CREATE</button>
						</label>
					</div>
			</table>
		</center>
	</form>

</body>
</html>