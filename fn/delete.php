<?php
include_once '../koneksi.php';

// Untuk Bagian Nama
$id = $_GET['no'];
// Bagian query Sql untuk cari data
$sql = "DELETE FROM $tb WHERE no='$id'";
$hasil = mysqli_query($conn, $sql);
// mengalihkan ke index.php

if ($hasil){	
	header('Location:../index.php');
}else{
	echo "Hapus data Gagal"
}

?>
