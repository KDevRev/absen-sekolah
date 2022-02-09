<?php

// mengambil file koneksi.php untuk membuat koneksi
include 'koneksi.php';

// mengecek apakah di url ada nilai GET id
if (isset($_GET['id'])){
    // mengambil nilai id dari url dan disimpan dalam variabel $id
    $id = ($_GET["id"]);

    // menampilkan data dari database yang mempunyai id
    $query = "SELECT * FROM $tb id='$id'";
    $result = mysqli_query($koneksi, $query);

    // jika data gagal diambil maka akan tampil pesan error
    if(!result){
        die ("Query Error: ".mysqli_errno($koneksi).
            " - ".mysqli_error($koneksi));
    }

    // mengambil data dari database
    $data = mysqli_fetch_assoc($result);
        // apabila data tidak ada pada database makan akan dijalankan oleh perintah ini
    if (!count($data)){
        echo "<script>alert('Siswa tidak ditemukan pada database');window.location='index.php';</script>";
    }
} else {
    // apabila tidak ada data GET id pada akan di redirect ke index.php
         echo "<script>alert('Masukkan data id.');window.location='index.php';</script>";
}
?>

<!DOCTYPE html>
<html>
  <head>
    <title>EDIT DATA</title>
    <style type="text/css">
      * {
        font-family: "Trebuchet MS";
      }
      h1 {
        text-transform: uppercase;
        color: salmon;
      }
    button {
          background-color: salmon;
          color: #fff;
          padding: 10px;
          text-decoration: none;
          font-size: 12px;
          border: 0px;
          margin-top: 20px;
    }
    label {
      margin-top: 10px;
      float: left;
      text-align: left;
      width: 100%;
    }
    input {
      padding: 6px;
      width: 100%;
      box-sizing: border-box;
      background: #f8f8f8;
      border: 2px solid #ccc;
      outline-color: salmon;
    }
    div {
      width: 100%;
      height: auto;
    }
    .base {
      width: 400px;
      height: auto;
      padding: 20px;
      margin-left: auto;
      margin-right: auto;
      background: #ededed;
    }
    </style>
  </head>
  <body>
      <center>
        <h1>Edit Data <?php echo $data['nama']; ?></h1>
      <center>
      <form method="POST" action="pedit.php" enctype="multipart/form-data" >
      <section class="base">
        <!-- menampung nilai id siswa yang akan di edit -->
        <input name="id" value="<?php echo $data['id']; ?>"  hidden />
        <div>
          <label>Nama Siswa</label>
          <input type="text" name="nama" value="<?php echo $data['nama']; ?>" autofocus="" required="" />
        </div>
        <div>
          <label>Nis</label>
         <input type="text" name="nis" required="" value="<?php echo $data['nis']; ?>" />
        </div>
        <div>
          <label>Kelas</label>
         <input type="text" name="kelas" required="" value="<?php echo $data['kelas']; ?>" />
        </div>
        <div>
          <label>Keterangan</label>
         <input type="text" name="ket" required="" value="<?php echo $data['ket']; ?>"/>
        </div>
        <div>
            <label>Surat keterangan</label>
            <input type="text" name="surat" value"<?php echo $data['surat']; ?>"/>
        </div>
        <div>
          <label>Gambar siswa</label>
          <img src="gambar/<?php echo $data['gambar_siswa']; ?>" style="width: 120px;float: left;margin-bottom: 5px;">
          <input type="file" name="gambar_siswa" />
          <i style="float: left;font-size: 11px;color: red">Abaikan jika tidak merubah gambar siswa</i>
        </div>
        <div>
         <button type="submit">Simpan Perubahan</button>
        </div>
        </section>
      </form>
  </body>
</html>
