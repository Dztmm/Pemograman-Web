<html>
<head>
	<title>Add Collection</title>
</head>

<body>
	<a href="index.php">Go To Home</a>
	<br/><br/>
	
	<form action="add.php" method="post" name="form1">
		<table width="25%" border="0">
			<tr>
				<td>Kode Barang</td>
				<td><input type="text" name="kode"></td>
			</tr>
			<tr>
				<td>Nama Barang</td>
				<td><input type="text" name="nama"></td>
			</tr>
			<tr>
				<td>Harga Barang</td>
				<td><input type="text" name="harga"></td>
			</tr>
			<tr>
				<td>Stock Barang</td>
				<td><input type="text" name="stok"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="Submit" value="Add"></td>
			</tr>
		</table>
	</form>
	
	<?php
	
	if(isset($_POST['Submit'])) {
		$kode = $_POST['kode'];
		$nama = $_POST['nama'];
		$harga = $_POST['harga'];
		$stok = $_POST['stok'];
		
		include_once("config.php");
		
		$result = mysqli_query($mysqli, "INSERT INTO data_barang (kode,nama,harga,stok) VALUES('$kode', '$nama', '$harga', '$stok')");
		
		echo "Collection added sucessfully. <a href='index.php'>View Collection</a>";
		
	}
	?>
</body>
</html>