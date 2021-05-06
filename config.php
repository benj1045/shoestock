<?php 

	$dbhost = 'localhost';
	$dbname = 'shoestockdb';
	$dbusername = 'root';
	$dbpassword = '';

	$db = mysqli_connect($dbhost,$dbusername,$dbpassword,$dbname);

	if (!$db)
	{
		echo "Failed to connect to DB";
	}
 ?>