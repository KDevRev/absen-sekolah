<?php
#include 'connection.php';
/* This will Be function until refactor */
#require '..fn/list.php';

$conn = mysqli_connect("localhost", "root", "", "absen");
$sis = mysqli_query($conn, "SELECT * FROM siswa");

/* TO-DO adding catagory for sick or  permission */
#$hadir = mysqli_query($conn, "SELECT FROM * FROM hadir");

# $sis = mysqli_fetch_row($siswa);
/* var_dump($sis); */ 

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>ABSEN KELAS</title>
</head>
<body>
	<h1>DAFTAR SISWA</h1>
	<table border="1" cellpadding="10" cellspacing="0">
		<tr>
			<th>No.</th>
			<th>Delete</th>
			<th>Update</th>
			<th>Kelas</th>
			<th>Nama</th>
			<th>Nis</th>
		</tr>

		<?php 
		while($row = mysqli_fetch_assoc($sis)){
			$row[] = $row;
		}
		?>
		<tr>
			<td><?= $row["id"]; ?></td>
			<td>
				<a href="">ubah</a>
			</td>
			<td>				
				<a href="fn/delete.php">hapus</a>
			</td>
			<td>
			<td><?= $row=["kelas"]; ?></td>
			<td><?= $row=["nama"]; ?></td>
			<td><?= $row=["nis"]; ?></td>
</body>
</html>