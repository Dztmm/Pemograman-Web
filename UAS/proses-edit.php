<?php

include("config.php");

if(isset($_POST['simpan'])){

	$id = $_POST['id'];
	$nama = $_POST['nama'];
	$harga = $_POST['harga'];
	$stok = $_POST['stok'];
	
	$sql = "UPDATE baju SET nama='$nama', harga='$harga', stok='$stok' WHERE id=$id";
	$query = mysqli_query($db, $sql);
	
	if ( $query ) {
	
		header('Location: list-barang.php');
	} else {
		header("Gagal menyimpan perubahan...");
	}
	
} else {
	die("Akses dilarang...");
}

?>