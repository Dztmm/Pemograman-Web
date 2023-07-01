<?php 

include_once("config.php");

if(isset($_POST['update']))
{
	$id = $_POST['id'];
	
	$kode=$_POST['kode'];
	$nama=$_POST['nama'];
	$harga=$_POST['harga'];
	$stok=$_POST['stok'];
	
	$result = mysqli_query($mysqli, "UPDATE data_barang SET kode='$kode', nama='$nama', harga='$harga', stok='$stok' WHERE id=$id");
	
	header("Location: index.php");
	
}
?>
<?php

$id = $_GET['id'];

$result = mysqli_query($mysqli, "SELECT * FROM data_barang WHERE id=$id");

while($user_data = mysqli_fetch_array($result))
{

	$kode = $user_data['kode'];
	$nama = $user_data['nama'];
	$harga = $user_data['harga'];
	$stok = $user_data['stok'];
}
?>
<html>
<head>
	<title>Edit Collection</title>
</head>

<body>
	<a href="index.php">Home</a>
	<br></br>
	
	<form name="update_user" method="post" action="edit.php">
		<table border="0">
			<tr>
				<td>Kode Barang</td>
				<td><input type="text" name="kode" value=<?php echo $kode;?>></td>
			</tr>
			<tr>
				<td>Nama Barang</td>
				<td><input type="text" name="nama" value=<?php echo $nama;?>></td>
			</tr>
			<tr>
				<td>Harga Barang</td>
				<td><input type="text" name="harga" value=<?php echo $harga;?>></td>
			</tr>
			<tr>
				<td>Stok Barang</td>
				<td><input type="text" name="stok" value=<?php echo $stok;?>></td>
			</tr>
			<tr>
				<td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
				<td><input type="submit" name="update" value="Update"></td>
			</tr>
		</table>
	</form>
</body>
</html>