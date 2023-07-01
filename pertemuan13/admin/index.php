<html>
<head>
	<title>Tutorial Cara Membuat Login Dengan PHP MYSQLi - Page Admin</title>
</head>
<body>
	<h2>Halaman Admin</h2>
	
	<?php
		session_start();
		if($_SESSION['status']!="login"){
			header("location:../index.php?pesan=belum login");
		}
	?>
	<h4>Selamat datang, <?php echo $_SESSION['username']; ?>! anda telah login.<h/4>
	<br/>
	<a href="logout.php">LOGOUT</a>
</body>
</html>