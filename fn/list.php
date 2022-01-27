<?php
// Mengambil koneksi
include_once '../koneksi.php';

// Cek Koneksi
if($conn === false){
	die("ERROR: Could not connect. " . mysqli_connect_error());
}

// Attempt select query execution
$sql = "SELECT * FROM $tb";
if($result = mysqli_query($conn, $sql)){
	if(mysqli_num_rows($result) > 0){
		echo "<h1>DAFTAR SISWA</h1>";
		echo "<table border='1' cellpadding='10' cellspacing='0'>";
		echo "<tr>";
		echo "<th>No</th>";
		echo "<th>Kelas</th>";
		echo "<th>Nama</th>";
		echo "<th>Nis</th>";
		echo "<th>Keterangan</th>";
		echo "</tr>";
		while($row = mysqli_fetch_array($result)){
			echo "<tr>";
			echo "<td>" . $row['no'] . "</td>";
			echo "<td>" . $row['kelas'] . "</td>";
			echo "<td>" . $row['nama'] . "</td>";
			echo "<td>" . $row['nis'] . "</td>";
			echo "<td>" . $row['ket'] . "</td>";
			echo "</tr>";
		}
		echo "</table>";
        // Cek Database ada/tidak
		mysqli_free_result($result);
	} else{
		echo "Tidak ada data ditemukan";
	}
} else{
	echo "ERROR: Tidak dapat di execute $sql. " . mysqli_error($conn);
}

// Menutup Koneksi
mysqli_close($conn);
?>
