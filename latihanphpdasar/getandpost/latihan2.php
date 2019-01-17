<?php 
// cek apakah tidak ada data di $_GET
if (!isset($_GET["nama"]) ||
	!isset($_GET["nisn"]) ||
	!isset($_GET["email"]) ||
	!isset($_GET["jurusan"]) ||
	!isset($_GET["gambar"])){
	// ridirect
		header("Location: latihan1.php");
		exit;
}
?>
<html>
	<head>
		<title>Detail Mahasiswa</title>
	</head>

	<body>
		
	<ul>
		<li><img src="img/<?= $_GET["gambar"] ?>"></li>
		<li><?= $_GET["nama"] ?></li>
		<li><?= $_GET["nisn"] ?></li>
		<li><?= $_GET["email"] ?></li>
		<li><?= $_GET["jurusan"] ?></li>
	</ul>
		<a href="latihan1.php">Kembali ke daftar mahasiswa</a>
	</body>	
</html>