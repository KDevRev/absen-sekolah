<?php
include 'koneksi.php';
$id = $_GET["id"]; // mengambil id yang ingin dihapus


// menjalankan query DELETE untuk menghapus data
$query = "DELETE FROM siswa WHERE id='$id'";
$hasil_query = mysqli_query($koneksi, $query);


// periksa query apakah ada kesalaahan
if (!$hasil_query){
    die("Gagal menghapus data: ".mysqli_errno($koneksi).
        " - ".mysqli_error($koneksi));
}else{
    echo "<script>alert('Data berhasil dihapus.');window.location='index.php';</script>";
}

