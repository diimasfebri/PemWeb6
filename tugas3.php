<!DOCTYPE html>
<html>
<head>
	<title>Welcome!</title>
</head>
<body>
	<!-- koneksi database -->
	<?php
		include "koneksi_tugas3.php";
	?>
	<img src="nestle.jpg" >
	<!-- <h1 align="center">DATA PEGAWAI NESTLE</h1>
	<table align="center" border="3" style="border-color: #FAEBD7; ">
		<tr>
			<td>Kode Pegawai</td>
			<td>Nama Pegawai</td>
			<td>Alamat Pegawai</td>
			<td>Divisi Kerja</td>
		</tr> -->
	
	<?php
		$sql="SELECT * FROM pegawai";
		$result=mysqli_query($conn,$sql);
		if (mysqli_num_rows($result)>0) {
			while ($tampil= mysqli_fetch_assoc($result)) {
				echo "<tr>";
				echo "<td>".$tampil['KODE_PEGAWAI']."</td>";
				echo "<td>".$tampil['NAMA_PEGAWAI']."</td>";
				echo "<td>".$tampil['ALAMAT_PEGAWAI']."</td>";
				echo "<td>".$tampil['KODE_DIVISI']."</td>";
				echo "</tr>";
			}
		} else {
			echo "<tr>";
			echo "<td>"."</td>";
			echo "<td>"."</td>";
			echo "<td>"."</td>";
			echo "<td>"."</td>";
			echo "</tr>";
	}
	mysqli_close($conn);
	?>

	</table>
	<br>
	<table align="left">
		<tr>
			<td><a href="insert_tugas3.php"><input type="button" value="INSERT DATA"></a></td>
			<td><a href="update_tugas3.php"><input type="button" value="UPDATE DATA"></a></td>
			<td><a href="delete_tugas3.php"><input type="button" value="DELETE DATA"></a></td>
		</tr>
	</table>
</body>
</html>