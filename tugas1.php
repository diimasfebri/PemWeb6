<!DOCTYPE html>
<html>
<head>
	<title>TUGAS 1</title>
</head>
<body>

<?php
	//koneksi-kan ke mySQL
	$conn = mysqli_connect("localhost","root","","mysql");
	//cek koneksi
	if (mysqli_connect_error()) {
		echo "Failed to connect to MySQL ".mysqli_connect_error();
		exit();
	} else {
		echo "Connected Successfully."."<br>";
	}

	//deklarasi variabel 
	$servername ="localhost";
	$username = "root";
	$password = "";
	$dbname = "myDB";

	//koneksi-kan ke databse mydb
	$conn = mysqli_connect($servername,$username,$password,$dbname);

	//cek koneksi
	if (!$conn) {
		die("Connection failed: ".mysqli_connect_error()."<br>");
	}else{
		echo "Sudah Connect ke Database".$dbname."<br>";
	}

	//Membuat Tabel
	$sql = "CREATE TABLE buku_tamu (
	ID_BT INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	NAMA VARCHAR(200) NOT NULL,
	EMAIL VARCHAR(50) NOT NULL,
	ISI TEXT)";
	//cek
	if (mysqli_query($conn, $sql)) {
		echo "Table buku_tamu created successfully";
	} 
		
	//Memasukkan data ke tabel buku_tamu	
	$sql = "INSERT INTO buku_tamu(ID_BT,NAMA,EMAIL,ISI) VALUES('060201','DIMAS FEBRI ARMANDA','dimas.febri21@gmail.com','Keponakan')";
	//cek berhasil / gagal buat tabel
	if (mysqli_query($conn, $sql)) {
		echo "Data berhasil dimasukkan";
	} 
	?>

	<!--buat tabel-->
	<table border="3" style="text-align: center;">
		<tr>
			<td bgcolor="#FFA800">ID_BT</td>
			<td bgcolor="#FFA800">NAMA</td>
			<td bgcolor="#FFA800">EMAIL</td>
			<td bgcolor="#FFA800">ISI</td>
		</tr>

	<!--deklarasi script php-->
	<?php
	//script menampilkan data
	$sql="SELECT * FROM buku_tamu";
	$result=mysqli_query($conn,$sql);
	if (mysqli_num_rows($result)>0) {
		while ($tampil= mysqli_fetch_assoc($result)) {
			echo "<tr>";
			echo "<td>".$tampil['ID_BT']."</td>";
			echo "<td>".$tampil['NAMA']."</td>";
			echo "<td>".$tampil['EMAIL']."</td>";
			echo "<td>".$tampil['ISI']."</td>";
			echo "</tr>";
			echo"</table>";
		}
	}
	//menutup koeksi database 
	mysqli_close($conn);
?>

</body>
</html>
 