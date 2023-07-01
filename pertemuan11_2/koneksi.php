<?php

$host = mysql_connect("localhost","root","Dztmsql2#");

if($host) {
	echo "Koneksi Host Berhasil.<br/>";
}else{
	echo "Koneksi Gagal.<br/>";
}

$db = mysql_select_db("konekdb");

if($db) {
	echo "Koneksi Database Berhasil.";
}else{
	echo "Koneksi Gagal.";
}
?>