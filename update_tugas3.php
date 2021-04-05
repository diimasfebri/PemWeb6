<!DOCTYPE html>
<html>
<head>
	<title>Update data pegawai</title>
</head>
<body>
	<?php
		include "koneksi_tugas3.php";
	?>
	
	<h3 align="left">Ubah Data Pegawai Nestle</h3><br>
	</table><br>
	<form method="POST" action="update_tugas3.php">
		<table align="left">
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
				<td>Bidang Kerja : </td>
				<td><input type="text" name="bidang"></td>
			</tr>
			<tr>
				<td><input type="submit" name="Submit" value="Ubah Data"></td>
				<td><a href="tugas3.php"><input type="button" value="Kembali"></a></td>
			</tr>
		</table>
	</form>

	<?php
		if (isset($_POST['Submit'])) {
			$kode=$_POST['kode'];
			$nama=$_POST['nama'];
			$alamat=$_POST['alamat'];
			$bidang=$_POST['bidang'];
			$sql="UPDATE pegawai SET KODE_PEGAWAI='$kode',KODE_BIDANG='$bidang',NAMA_PEGAWAI='$nama',ALAMAT_PEGAWAI='$alamat' WHERE KODE_PEGAWAI='$kode'";} 
	?>
		
</body>
</html>