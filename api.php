<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>API COVID (FOR TESTING PERPOUSE)</title>
</head>
<body>

</body>
</html>

<?php
$json = file_get_contents('https://apicovid19indonesia-v2.vercel.app/api/indonesia/provinsi?name=kalimantan_tengah')

$data = json_decode($json, true);
?>

<h1><?= $data=["provinsi"] ?></h1>