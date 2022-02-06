<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="fn/style.css">
	<title>Absensi</title>
	<script type="text/javascript">
		function validate()
		{
			var x=document.forms["form"]["ket"].value;
			if (x==null || x=="")
			{
				alert("comp cannot be blank");
				return false;
			}
		</script>
	</head>
	<body>
		<h1>FORMULIR ABSEN</h1>
		<form name="form" action="fn/insert.php" onsubmit="return validate()" method="post">
			<br><div class="tambah"><br>
				<label>Kelas</label><input type="text" name="kelas">
				<label>Nama</label><input type="text" name="nama">
				<label>NIS</label><input type="text" name="nis">	
				<label>Keterangan Izin/Sakit</label><input type="text" name="ket">
				<button type="submit" name="kirim">Kiri</button>
			</form>
		</body>
		<a href="fn/view.php">Cek Data</a>
		</html>
