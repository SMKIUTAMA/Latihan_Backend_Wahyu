<?php
require 'functions.php';
$query = query("SELECT * FROM siswa_smk");

?>

<html>
	<head>
		<title>Halaman Admin</title>
	</head>

	<body>
		<a href="tambahdata.php">Tambah Data Mahasiswa</a>

		<h1>Daftar Siswa SMKIU</h1>

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
				<td>
					<a href="">Ubah</a> |
					<a href="">Hapus</a>
				</td>

				<td><img src="img/<?= $row["gambar"]; ?>" width="50"></td>
				<td><?= $row["nama"]; ?></td>
				<td><?= $row["nisn"]; ?></td>
				<td><?= $row["email"];?></td>
				<td><?= $row["jurusan"];?></td>
			</tr>
			<?php $i++; ?>
			<?php endforeach; ?>
		</table>
	</body>
</html>