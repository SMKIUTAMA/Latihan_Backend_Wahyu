<?php
include '../functions.php';

$keyword  = $_GET['keyword'];

$query = "SELECT * FROM siswa_smk 
			WHERE
		nama 	LIKE '%$keyword%' OR
		nisn 	LIKE '%$keyword%' OR
		email 	LIKE '%$keyword%' OR
		jurusan LIKE '%$keyword%' 
		";

$siswasmk =  query($query);
?>

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

