<?php
// config.php

$server = "localhost";
$username = "root";
$password = "Dztmsql2#";
$db = "dz_store";

// Membuat koneksi ke database
$db = mysqli_connect($server, $username, $password, $db);

// Memeriksa koneksi
if (!$db) {
    die("Koneksi database gagal: " . mysqli_connect_error());
}
?>
