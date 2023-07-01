<html>
	<head>
		<title>Form Biodata Diri</title>
	</head>
	<body>
		<h2>Form Biodata Diri</h2>
		<form method="post" action="proses-biodata.php">
			<p>
				<label for="nama">Nama Lengkap:</label>
				<input type="text" name="nama" id="nama" required>
			</p>
			<p>
				<label for="alamat">Alamat:</label>
				<textarea name="alamat" id="alamat" required></textarea>
			</p>
			<p>
				<label for="tanggal_lahir">Tanggal Lahir:</label>
				<input type="date" name="tanggal_lahir" id="tanggal_lahir" required>
			</p>
			<p>
				<label for="jenis_kelamin">Jenis Kelamin:</label>
				<input type="radio" name="jenis_kelamin" value="Laki-laki" id="laki-laki" required>
				<label for="laki-laki">Laki-laki</label>
				<input type="radio" name="jenis_kelamin" value="Perempuan" id="perempuan" required>
				<label for="perempuan">Perempuan</label>
			</p>
			<p>
				<label for="agama">Agama:</label>
				<select name="agama" id="agama" required>
					<option value="Islam">Islam</option>
					<option value="Kristen">Kristen</option>
					<option value="Katolik">Katolik</option>
					<option value="Hindu">Hindu</option>
					<option value="Buddha">Buddha</option>
				</select>
			</p>
			<p>
				<label for="pekerjaan">Pekerjaan:</label>
				<input type="text" name="pekerjaan" id="pekerjaan" required>
			</p>
			<p>
				<input type="submit" value="Simpan">
				<input type="reset" value="Reset">
			</p>
		</form>
	</body>
</html>