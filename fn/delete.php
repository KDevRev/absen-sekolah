<?php
include_once '../koneksi.php';

// Untuk Bagian Nama
$nama = $_GET['nama'];
// Bagian query Sql untuk cari data
$sql = "DELETE FROM $tb WHERE nama='$nama'";
mysqli_query($conn, $sql);
// mengalihkan ke index.php
header("location:../index.php")
?>
