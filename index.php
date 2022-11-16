<?php include "session.php" ?>
<!doctype html>
	<html>
	<head>
		<title> </title>
</head>
<body style="background-image:url(https://i.etsystatic.com/6231007/r/il/4e7069/2815489420/il_1140xN.2815489420_kase.jpg);">
	<h2> Dashboard Admin</h2>
	 Selamat datang ...  <br>
	 <br>
	 <br>
	 <a href="tampil_mahasiswa.php"> Data Mahasiswa</a>
	 <br>
	 <br>
	 <a href="tampil_buku.php">Data Buku</a>
	 <br>
	 <br><a href="logout.php">Logout</a>
	<strong><?php echo $_SESSION['username']; ?></strong>
	<h3><?php echo @$_GET['pesan']?></h3>
</body>
</html>