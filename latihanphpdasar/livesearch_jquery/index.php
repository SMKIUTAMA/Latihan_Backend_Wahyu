<?php
session_start();
require 'functions.php';

if (!isset($_SESSION["login"])) {
	header('location:login.php');
	exit;
}

// pagination
// konfigurasi
// $jumlahDataPerHalaman = 2;
// $jumlahData = count(query("SELECT * FROM siswa_smk"));
// $jumlahHalaman = ceil($jumlahData / $jumlahDataPerHalaman);
// $halaman = (isset($_GET['halaman'])) ? $_GET['halaman'] : 1;
// $awalData = ($jumlahDataPerHalaman * $halaman) - $jumlahDataPerHalaman;


$siswasmk = query("SELECT * FROM siswa_smk");

// tombol cari ditekan
if (isset($_POST["cari"])) {
	$siswasmk = cari($_POST["keyword"]);
}

?>

<html>
	<head>
		<title>Halaman Admin</title>
		<style>
			.loader{
				width: 50px;
				position: absolute;
				top: 134px;
				left: 245px;
				z-index: -1;
				display: none;
			};

			@media print{

			}
		</style>
		<script src="js/jquery-3.3.1.min.js"></script>
		<script src="js/script.js"></script>
	</head>

	<body>
		<a href="logout.php" class="logout">Logout</a>
		<h1>Daftar Siswa SMK Informatika Utama</h1>

		<a href="tambah.php">Tambah Data Siswa SMK</a><BR><BR>

		<form action="" method="POST">
			<input type="text" name="keyword" size="30" placeholder="Masukan Keyword Pencarian" autocomplete="off" id="keyword" autofocus>
			<button type="submit" name="cari" id="tombol-cari">Cari</button>
			<img src="img/loader.gif" class="loader">
			<br>
		</form>

		<!-- navigasi -->
		 <!-- if($halaman > 1) : 
			<a href="?halaman=<php $halaman - 1; ?>">&laquo;</a>
		 endif; 

		 for ($i = 1; $i <= $jumlahHalaman; $i++) : 
			 if ($i == $halaman) : 
				<a href="?halaman=<php $i; ?>" style="font-weight: bold; color: red;"><php $i; ?></a>
			 else : 
				<a href="?halaman=<php $i; ?>"><php $i; ?></a>
			 endif; 
		 endfor

		 if ($halaman < $jumlahHalaman) :
			<a href="?halaman=<php $halaman + 1 ?>">&raquo;</a>
		 endif --> 
	<div id="container">
		<table border="1" cellpadding="10" cellspacing="0">
			<tr><th>No.</th>
				<th>Aksi</th>
				<th>Gambar</th>
				<th>Nama</th>
				<th>NISN</th>
				<th>Email</th>
				<th>Jurusan</th>
			</tr>

			<?php $i = 1; ?>
			<?php foreach($siswasmk as $row) : ?>
			<tr>
				<td><?= $i; ?></td>
				<td><a href="ubah.php?id=<?= $row['id'] ?>">Ubah</a> | <a href="hapus.php?id=<?= $row["id"] ?>" onclick="return confirm('Anda Yakin')">Hapus</a></td>
				<td><img src="img/<?= $row["gambar"] ?>" width="60"></td>
				<td><?= $row["nama"] ?></td>
				<td><?= $row["nisn"] ?></td>
				<td><?= $row["email"] ?></td>
				<td><?= $row["jurusan"] ?></td>
			</tr>
			<?php $i++; ?>
			<?php endforeach; ?>
		</table>
	</div>
	</body>
</html>