<?php
include 'koneksi.php';
/* Ini adalah fungsi buat Daftar, Akan di kerjakan nanti */
#require '..fn/list.php';


/* Useless karena akan ditambah kode function buat Koneksi */
# $conn = mysqli_connect("localhost", "root", "", "test");
$sis = mysqli_query($conn, "SELECT * FROM siswa");

/* Masih Sebagai Fungsi Table 2 Yang dimana Akan dikerjakan nanti */
#$hadir = mysqli_query($conn, "SELECT FROM * FROM hadir");

/* Sebagai debug kalau misalnya ada error */
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