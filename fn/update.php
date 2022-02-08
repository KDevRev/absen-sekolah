<?php

include_once '../koneksi.php';
$no = $_POST['no'];
$nama= $_POST['nama'];
$kelas = $_POST['kelas'];
$nis = $_POST['nis'];
$ket = $_POST['ket'];

$query = "UPDATE siswa SET nama='$nama', kelas='$kelas', nis='$nis', ket='$ket';

$hasil = mysqli_query($conn, $query);

if($hasil){
	header=('location:../index.php');
}else{
	echo "Update data gagal";
}
