<html>
	<head><title>PHP FORM</title></head>
	<body>
		<FORM ACTION="proses-form.php" METHOD="POST" NAME="input">
			<h2>PHP Form Validation</h2>
			<p><font color="red"> * required field.</font></p>
			<p> 
				<label>Name:</label>
				<input type="text" name="nama" required><font color="red"> *</font>
			</p>
			
			<p> 
				<label>E-mail:</label>
				<input type="text" name="email" required><font color="red"> *</font>
			</p>
			
			<p> 
				<label>Website:</label>
				<input type="text" name="website">
			</p>
			
			<p>
				<label>Comment:</label>
				<textarea name="comment"></textarea>
			</p>
			
			<p> 
				<label>Gender:</label>
				<input type="radio" name="gender" value="Female"> Female 
				<input type="radio" name="gender" value="Male"> Male
			</p>
			
			<input type="submit" name="Pilih" value="Submit">
		</FORM>
	</body>
</html>