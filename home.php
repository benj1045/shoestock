<?php
	
	session_start();
	include 'config.php';
	if (isset($_POST['submit']))

	{
		$username = mysqli_real_escape_string($db,$_POST['username']);
		$password = mysqli_real_escape_string($db,$_POST['password']);
		$result = mysqli_query($db,"SELECT * FROM users WHERE username = '$username' AND password = '$password'");

		if(mysqli_num_rows($result)>0)
			{
					
				echo "<script>window.location.href='userhome.php';</script>";
			}
	}
?>

<html>
<head>
	<title>HOME</title>
</head>
<body>
	<form method="post" action="home.php">
		<center>
			<h1>WELCOME !</h1>
		</center>
			<table>
				<center>
					<div>
						<label><input type="text" name="username" placeholder="USERNAME"></label>
					</div>
					<div>
						<label><input type="password" name="password" placeholder="PASSWORD"></label>
					</div>
					<div>
						<label><a href="userhome.php"><button type="submit" name="submit">LOGIN</button></a></label>
					</div>
					<div>
						<label><a href="form.php"><button type="button">CREATE USER ACCOUNT</button></a><label>
					</div>
				</center>
			</table>
		
	</form>

</body>
</html>