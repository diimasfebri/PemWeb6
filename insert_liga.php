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


//memasukkan data jerman.
$sql = "INSERT INTO liga (kode, negara, champion)
		VALUES ('Jer','Jerman','4')"; 
//cek data.
if (mysqli_query($conn, $sql)) {
	echo "data created succesfully <br>";
}
else{
	echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

//memasukkan data Spanyol.
$sql = "INSERT INTO liga (kode, negara, champion)
		VALUES ('Spa','Spanyol','3')"; 
//cek data.
if (mysqli_query($conn, $sql)) {
	echo "data created succesfully <br>";
}
else{
	echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

//memasukkan data English.
$sql = "INSERT INTO liga (kode, negara, champion)
		VALUES ('Eng','English','3')"; 
//cek data.
if (mysqli_query($conn, $sql)) {
	echo "data created succesfully";
}
else{
	echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}


//menghentikan koneksi database.
mysqli_close($conn);



 ?>