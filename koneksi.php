<!DOCTYPE html>
<html>
<head>
	<title>Koneksi Database MySQL</title>
</head>
<body>
	<h1>Demo koneksi database MySQL</h1>
	
	<?php
	//koneksikan ke database mysql.
	$con = mysqli_connect("localhost","root","","mysql");

	//cek koneksi database.
	if (mysqli_connect_errno()){
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
		exit();	
	}

	else {
		echo "Connected.";
	}
	 ?>
</body>
</html>