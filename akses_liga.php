<?php

	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "myDB";

//membuat "koneksi" database baru.
$conn = mysqli_connect($servername, $username, $password, $dbname);

//cek koneksi jika gagal.	
if (!$conn) {
	die("Connection Failed: " . mysqli_connect_error());
}


//membuat database.
$sql = "SELECT kode, negara, champion FROM liga";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0 ) {
	while ($row= mysqli_fetch_assoc($result)) {
			echo "kode: ".$row["kode"]." - Negara: ".$row["negara"]." ".$row["champion"]."<br>";
		}
	} 
else {
		echo "0 result";
	}


//menghentikan koneksi database.
mysqli_close($conn);
?>
