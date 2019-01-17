<?php
require 'functions.php';
$query = query("SELECT * FROM siswa_smk");

?>

<html>
	<head>
		<title>Halaman Admin</title>
	</head>

	<body>
		<h1>Daftar Siswa SMK Informatika Utama</h1>

		<a href="tambah.php">Tambah Data Siswa SMK</a><BR><BR>

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
			<?php foreach($query as $row) : ?>
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