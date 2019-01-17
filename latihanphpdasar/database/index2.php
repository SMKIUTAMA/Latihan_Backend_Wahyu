<?php 
// koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "latihan_db");

// ambil data dari table mahasiswa / queri data mahasiswa
$result = mysqli_query ($conn, " SELECT * FROM mahasiswa");

// while ($mhs = mysqli_fetch_assoc($result) ) {
// 	var_dump($mhs);
// }

?>

<html>
	<head>
		<title>Halaman Admin</title>
	</head>

	<body>
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
			<?php while($row = mysqli_fetch_assoc($result)) :?>
			<tr>
				<td><?= $i ?></td>
				<td>
					<a href="">Ubah</a> |
					<a href="">Hapus</a>
				</td>
				<td><img src="img/<?= $row["Gambar"]; ?>" width="60" alt=""></td>
				<td><?= $row["Nama"]; ?></td>
				<td><?= $row["NISN"]; ?></td>
				<td><?= $row["Email"]; ?></td>
				<td><?= $row["Jurusan"]; ?></td>
			</tr>
			<?php $i++; ?>
			<?php endwhile; ?>
		</table>
	</body>
</html>