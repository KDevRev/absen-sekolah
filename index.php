<?php
include('koneksi.php');
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Absensi Sekolah</title>
    <link rel="stylesheet" type="text/css" href="style.css">
  </head>
  <body>
    <center><h1>Data Siswa</h1><center>
    <center><a href="create.php">+ &nbsp; Tambah Data</a><center>
    <br/>
    <table>
      <thead>
        <tr>
          <th>No</th>
          <th>Nama</th>
          <th>Nis</th>
          <th>Kelas</th>
          <th>Keterangan</th>
          <th>Gambar</th>
          <th>Action</th>
        </tr>
    </thead>
    <tbody>
      <?php
      // jalankan query untuk menampilkan semua data diurutkan berdasarkan nim
      $query = "SELECT * FROM $tb ORDER BY id ASC";
      $result = mysqli_query($koneksi, $query);

      if(!$result){
        die ("Query Error: ".mysqli_errno($koneksi).
           " - ".mysqli_error($koneksi));
      }

      $no = 1;
      while($row = mysqli_fetch_assoc($result))
      {
      ?>
       <tr>
          <td><?php echo $no; ?></td>
          <td><?php echo $row['nama']; ?></td>
          <td><?php echo $row['nis']; ?></td>
          <td><?php echo $row['kelas']; ?></td>
          <td><?php echo $row['ket']; ?></td>
          <td style="text-align: center;"><img src="gambar/<?php echo $row['gambar_produk']; ?>" style="width: 120px;"></td>
          <td>
              <a href="update.php?id=<?php echo $row['id']; ?>">Edit</a> |
              <a href="delete.php?id=<?php echo $row['id']; ?>" onclick="return confirm('Anda yakin akan menghapus data ini?')">Hapus</a>
          </td>
      </tr>
         
      <?php
        $no++;
      }
      ?>
    </tbody>
    </table>
  </body>
</html>