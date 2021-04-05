<!DOCTYPE html>
<html>
<head>
	<title>Hapus data pegawai</title>
</head>
<body>
	<?php
		include "koneksi_tugas3.php";
	?>
	<h3 align="left">Hapus Data Pegawai Nestle </h3><br>
	<form method="POST" action="delete.php">
		<table align="left">
			<tr>
				<td>Kode Pegawai : </td>
				<td><input type="text" name="kode"></td>
			</tr>
			<tr>
				<td><input type="submit" name="Submit" value="Hapus Data"></td>
				<td><a href="tugas3.php"><input type="button" value="Kembali"></a></td>
			</tr>
		</table>
	</form>

	<?php
		if (isset($_POST['Submit'])) {
			$kode=$_POST['kode'];
			$sql="DELETE FROM pegawai WHERE kode_PEGAWAI = '$kode'";}
		mysqli_close($conn);
	?>
</body>
</html>