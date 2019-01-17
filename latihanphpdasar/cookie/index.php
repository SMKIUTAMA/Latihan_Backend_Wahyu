<?php
session_start();

if (!isset($_SESSION["login"])) {
	header('location:login.php');
	exit;
}

require 'functions.php';
$siswasmk = query("SELECT * FROM siswa_smk ORDER BY id");

// tombol cari ditekan
if (isset($_POST["cari"])) {
	$siswasmk = cari($_POST["keyword"]);
}

?>

<html>
	<head>
		<title>Halaman Admin</title>
	</head>

	<body>
		<a href="logout.php">Logout</a>
		<h1>Daftar Siswa SMK Informatika Utama</h1>

		<a href="tambah.php">Tambah Data Siswa SMK</a><BR><BR>

		<form action="" method="POST">
			<input type="text" name="keyword" size="30" autofocus placeholder="Masukan Keyword Pencarian" autocomplete="off">
			<button type="submit" name="cari">Cari</button>
			<br>
		</form>

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
	</body>
</html>