<!DOCTYPE HTML>
<html>
<head>
	<title> Formulir Penambahan Barang Baru</title>
</head>

<body>
	<header>
		<h3>Formulir Penambahan Barang Baru</h3>
	</header>
	
	<form action="proses-pendaftaran.php" method="POST">
	
		<fieldset>
		
		<p>
			<label for="nama">Nama: </label>
			<input type="text" name="nama" placeholder="Nama Barang" />
		</p>
		<p>
			<label for="harga">Harga: </label>
			<input type="text" name="harga" placeholder="Harga" />
		</p>
		<p>
			<label for="stok">Stok: </label>
			<input type="text" name="stok" placeholder="stok" />
		</p>
		<p>
			<input type="submit" value="Tambah" name="tambah" />
		</p>
		
	</form>
</body>
</html>
			