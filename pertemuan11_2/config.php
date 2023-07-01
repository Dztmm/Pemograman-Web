<?php

$databaseHost = 'localhost';
$databaseName = 'crud_db';
$databaseUsername = 'root';
$databasePassword = 'Dztmsql4#';

$mysqli = mysqli_connect ($databaseHost, $databaseName, $databaseUsername, $databasePassword);

if (!$mysqli) {
	die("Koneksi Gagal: " . mysqli_connect_error());
}
echo "Koneksi Berhasil";
mysqli_close($mysqli);

?>