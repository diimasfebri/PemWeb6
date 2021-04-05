<!DOCTYPE html>
<html>
<head>
	<title>Masukkan Data Pegawai</title>
</head>
<body>
	<?php
		include "koneksi_tugas3.php";
	?>
	<h3 align="left"> Silahkan Masukkan Data Pegawai Nestle</h3><br>


	</table><br>
	<form method="POST" action="insert_tugas3.php">
		<table style="border-color: #FAEBD7"; align="left">
			<tr>
				<td>Kode Pegawai : </td>
				<td><input type="text" name="kode"></td>
			</tr>
			<tr>
				<td>Nama Pegawai : </td>
				<td><input type="text" name="nama"></td>
			</tr>
			<tr>
				<td>Alamat Pegawai : </td>
				<td><input type="text" name="alamat"></td>
			</tr>
			<tr>
				<td>Divisi Kerja : </td>
				<td><input type="text" name="divisi"></td>
			</tr>
			<tr>
				<td><input type="submit" name="Submit" value="Masukkan Data"></td>
				<td><a href="tugas3.php"><input type="button" value="Kembali"></a></td>
			</tr>
		</table>
	</form>


	<?php
		if (isset($_POST['submit'])) 
		{
			$kode=$_POST['kode'];
			$nama=$_POST['nama'];
			$alamat=$_POST['alamat'];
			$divisi=$_POST['divisi'];
			$sql=mysqli_query($conn, "INSERT INTO pegawai (KODE_PEGAWAI, KODE_DIVISI, NAMA_PEGAWAI, ALAMAT_PEGAWAI) VALUES ('$kode','$divisi','$nama','$alamat')");
		}
		mysqli_close($conn);
	?>	
</body>
</html>