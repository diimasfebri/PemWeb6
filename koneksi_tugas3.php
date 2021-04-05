<?php
	//koneksi-kan MySQL
	$conn = mysqli_connect("localhost","root","","mysql");

	//cek koneksi
	if (mysqli_connect_error()) {
		echo "Failed to connect to MySQL ".mysqli_connect_error();
		exit();
	} else {
		echo "Connected to MySQL"."<br>";
	}

	//koneksi-kan database "pegawainestle"
	$servername ="localhost";
	$username = "root";
	$password = "";
	$dbname = "pegawainestle";
	$conn = mysqli_connect($servername,$username,$password,$dbname);

	//cek koneksi
	if (!$conn) {
		die("Connection failed: ".mysqli_connect_error());
	}else{
		echo "Connected to <b>".$dbname."</b><br>";
	}
?>