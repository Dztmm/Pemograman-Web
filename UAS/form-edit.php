<?php

include("config.php");

if( !isset($_GET['id']) ){
	header('Location: list-barang.php');
}

$id = $_GET['id'];

$sql = "SELECT * FROM baju WHERE id=$id";
$query = mysqli_query($db, $sql);
$barang = mysqli_fetch_assoc($query);

if( mysqli_num_rows($query) < 1 ){
	die("data tidak ditemukan...");
}

?>


<!DOCTYPE html>
<html>
<head>

	<title>Formulir Edit Barang</title>
</head>

	<body>
		<header>
			<h3>Formulir Edit Barang</h3>
		</header>
		
		<form action="proses-edit.php" method="POST">
		
			<fieldset>
				<input type="hidden" name="id" value="<?php echo $barang['id'] ?>" />
				
			<p>
				<label for="nama">Nama: </label>
				<input type="text" name="nama" placeholder="Nama Barang" value="<?php echo $barang['nama'] ?>" />
			</p>
			<p>
				<label for="harga">Harga: </label>
				<input type="text" name="harga" placeholder="Harga Barang" value="<?php echo $barang['harga'] ?>" />
			</p>
			<p>
				<label for="stok">Stok: </label>
				<input type="text" name="stok" placeholder="Stok Barang" value="<?php echo $barang['stok'] ?>" />
			</p>
		
			<p>
				<input type="submit" value="Simpan" name="simpan" />
			</p>
			
			</fieldset>
		</form>
		
	</body>
</html>
			