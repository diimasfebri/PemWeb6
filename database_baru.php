<?php 
// insialisasi variabel.
$servername = "localhost";
$username = "root";
$password = "";

//membuat "koneksi" database baru.
$conn = mysqli_connect($servername, $username, $password);

//cek koneksi jika gagal.
if (!$conn) {
	die("Connection Failed: " . mysqli_connect_error());
}


//membuat database.
$sql = "CREATE DATABASE myDB";

//cek database.
if (mysqli_query($conn, $sql)) {
	echo "Database created succesfully";
}

//menghentikan koneksi database.
mysqli_close($conn);
 ?>