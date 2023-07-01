<?php include("config.php"); ?>

<!DOCTYPE html>
<html>
<head>
	<title>Penambahan Barang Baru</title>
</head>

<body>
	<header>
		<h3>List Barang</h3>
	</header>
	
	<nav>
		<a href="form-barang.php">[+] Tambah Barang Baru</a>
	</nav>
	
	<br>
	
	<table border="1">
	
	<thead>
		<tr>
			<th>No</th>
			<th>Nama</th>
			<th>Harga</th>
			<th>Stok</th>
		</tr>
	</thead>
	<tbody>
	<?php
	$sql = "SELECT * FROM baju";
	$query = mysqli_query($db, $sql);
	
	while($barang = mysqli_fetch_array($query)){
		echo "<tr>";
		
		echo "<td>".$barang['id']."</td>";
		echo "<td>".$barang['nama']."</td>";
		echo "<td>".$barang['harga']."</td>";
		echo "<td>".$barang['stok']."</td>";
		
		echo "<td>";
		echo "<a href='form-edit.php?id=".$barang['id']."'>Edit</a> | ";
		echo "<a href='hapus.php?id=".$barang['id']."'>Hapus</a>";
		echo "</tr>";
	}
	?>
	
	</tbody>
	</table>
	
	<p>Total: <?php echo mysqli_num_rows($query) ?></p>
	
	</body>
</html>