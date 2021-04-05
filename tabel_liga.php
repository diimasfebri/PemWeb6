<?php 
// insialisasi variabel.
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
$sql = "CREATE TABLE liga(
	id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	kode VARCHAR(3) NOT NULL,
	negara VARCHAR(30) NOT NULL,
	champion int(3)
	)";

//cek database.
if (mysqli_query($conn, $sql)) {
	echo "Database created succesfully";
}
else{
	echo "Error creating database: ". mysqli_error($conn);
}

//menghentikan koneksi database.
mysqli_close($conn);



 ?>