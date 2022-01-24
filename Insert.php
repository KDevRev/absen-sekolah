<?php
include_once '../connection.php';

$kelas = $_POST['kelas'];
$nama = $_POST['nama'];
$nis = $_POST['nis'];

$sql = "INSERT INTO $tb(kelas, nama, pass) VALUES ('$kelas','$nama','$pass')";
	mysqli_query($conn, $sql);

header("Location: ../index.php");
?>
