<?php

// memanggil file koneksi.php untuk melakukan koneksi pada database
include 'koneksi.php';

$id = $_POST['id'];
$nama = $_POST['nama'];
$kelas = $_POST['kelas'];
$nis = $_POST['nis'];
$ket = $_POST['ket'];
$gambar_siswa = $_POST['gambar_siswa']['name'];

    // cek dulu jika merubah gambar siswa 
    if($gambar_siswa != ""){
        $extensi_boleh = array('png','jpg'); // extensi gambar yang bisa di upload
            $x = explode('.', $gambar_siswa); // memisahkan nama file dengan extensi yang diupload
        $extensi = strtolower(end($x));
        $file_tmp = $_FILES['gambar_siswa']['tmp_name'];
        $angka_acak = rand(1,199);
        $nama_baru = $angka_acak.'-'.$gambar_siswa; // menggabungkan angka dengan file sebenarnya
        if(in_array($extensi, $extensi_boleh) === true) {
            move_uploaded_file($file_tmp, 'gambar/'.$nama_baru); // memindahkan file gambar ke folder gambar
            // jalankan query UPDATE berdasarkan ID yang siswa yang kita edit
            $query = "UPDATE siswa set nama='$nama', kelas='$kelas', nis='$nis',ket='$ket',gambar_siswa='$nama_baru'";
            $query .= "WHERE id = '$id'";
            $result = mysqli_query($koneksi, $query);
            // periksa query kalau ada error
            if(!$result){
                die ("Query gagal dijalankan: ".mysqli_errno($koneksi).
                    " - ".mysqli_error($koneksi));
            } else {
                //tampil alert dan akan redirect ke halaman index.php
                //silahkan ganti index.php sesuai halaman yang akan dituju
                echo "<script>alert('Data berhasil diubah.');window.location='index.php';</script>";
            }
        } else {
            // jika file ekstensi tidak jpg dan png maka alert ini yang tampil
            echo "<script>alert('Ekstensi gambar yang boleh hanya jpg atau png.');window.location='tambah.php';</script>";
        }
    }else{
        // jalankan query UPDATE berdasarkan ID yang siswa yang kita edit
        $query  = "UPDATE siswa SET nama = '$nama', kelas = '$kelas', nis = '$nis', ket = '$ket'";
        $query .= "WHERE id = '$id'";
        $result = mysqli_query($koneksi, $query);
        // periksa query apakah ada error
        if(!$result){
            die ("Query gagal dijalankan: ".mysqli_errno($koneksi).
                " - ".mysqli_error($koneksi));
        } else {
            //tampil alert dan akan redirect ke halaman index.php
            // silahkan ganti index.php sesuai halaman yang akan dituju
            echo "<script>alert('Data berhasil diubah.');window.location='index.php';</script>";
        }
    }
