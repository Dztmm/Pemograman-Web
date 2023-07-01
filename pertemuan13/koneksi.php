<?php
	$koneksi = mysqli_connect
	("localhost","root","Dztmsql2#","dbminggu13");
	
	if (mysqli_connect_error()){
		echo "Koneksi database gagal :
		" . mysqli_connect_error();
	}
?>