<?php

include_once("config.php");

$result = mysqli_query($mysqli, "SELECT * FROM data_barang ORDER BY id DESC");
?>

<html>
<head>
	<title>Home Page</title>
	<link rel="stylesheet" type="text/css" href="style1.css">
</head>

<body>
	<a href="add.php" class="add-link">Add New Collection</a><br/><br/>

	<table>
		<tr>
			<th>Kode Barang</th>
			<th>Nama Barang</th>
			<th>Harga Barang</th>
			<th>Stock Barang</th>
			<th>Update</th>
		</tr>
		<?php
		while ($user_data = mysqli_fetch_array($result)) {
			echo "<tr>";
			echo "<td>" . $user_data['kode'] . "</td>";
			echo "<td>" . $user_data['nama'] . "</td>";
			echo "<td>" . $user_data['harga'] . "</td>";  	
			echo "<td>" . $user_data['stok'] . "</td>";
			echo "<td><a href='edit.php?id=$user_data[id]'>Edit</a> | <a href='delete.php?id=$user_data[id]'>Delete</a></td></tr>";
		}
		?>
	</table>
</body>
</html>
