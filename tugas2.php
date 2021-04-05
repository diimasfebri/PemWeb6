<!DOCTYPE html>
<html>
<head>
	<title>Database Pegawai Nestle</title>
</head>
<body>
<?php 
	//koneksi-kan ke MySQL
	$conn = mysqli_connect("localhost","root","","mysql");

	// buat database
		$sql = "CREATE DATABASE pegawainestle";
		//cek berhasil / gagal buat database
		if (mysqli_query($conn, $sql)) {
			echo "Berhasil membuat database pegawainestle"."<br>";
		} 

		mysqli_close($conn);

		//koneksi ke databse pegawai nestle
		$servername ="localhost";
		$username = "root";
		$password = "";
		$dbname = "pegawainestle";
		//membuka koneksi ke database
		$conn = mysqli_connect($servername,$username,$password,$dbname);
		if (!$conn) {
			die("Connection failed: ".mysqli_connect_error());
		}else{
			echo "Connected ke database ".$dbname."<br><br>";
		}

		//membuat tabel relasi
		$sql="CREATE TABLE BIDANG_DIVISI(
   			KODE_DIVISI varchar(5) not null  comment '',
   			NAMA_DIVISI varchar(50)  comment '',
   			primary key (KODE_DIVISI))";
   		mysqli_query($conn,$sql);
		
		$sql="CREATE TABLE PEGAWAI(
   			KODE_PEGAWAI varchar(5) not null  comment '',
   			KODE_DIVISI  varchar(5)  comment '',
   			NAMA_PEGAWAI varchar(50)  comment '',
   			ALAMAT_PEGAWAI varchar(50)  comment '',
   			primary key (KODE_PEGAWAI))";
   		mysqli_query($conn,$sql);
		
		//untuk merelasikan
		$sql="ALTER TABLE `bidang_divisi` ADD FOREIGN KEY (`KODE_DIVISI`) REFERENCES `pegawai`(`KODE_DIVISI`) ON DELETE RESTRICT ON UPDATE RESTRICT;";
		
		//cek berhasil / gagal buat tabel
		if (mysqli_query($conn, $sql)) {
			echo "<h2>Relasi antar tabel berhasil! Silahkan cek di PHPmyAdmin. </h2>"."<br>";
		} 
		else {
			echo "Error: ".$sql."<br>".mysqli_error($conn);
		}
	?>

</body>
</html>