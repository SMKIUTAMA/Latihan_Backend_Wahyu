<?php  
// $_GET
$mahasiswa = [
	[
		"nama" => "Wahyu Pramudya",
		"nisn" => "123456789",
		"email" => "wahyupramudya@gmail.com",
		"jurusan" => "Teknik Inforamtika",
		"gambar" => "wahyu.jpg"
	],
	[
		"nama" => "Kamila Amalia",
		"nisn" => "987654321",
		"email" => "kamilaamalia@gmail.com",
		"jurusan" => "Teknik Jaringan",
		"gambar" => "kamila.jpg"
	]
];

?>


<html>
	<head>
		<title>Get</title>
	</head>

	<body>
		<h1>Daftar Mahasiswa</h1>

		<ul>
		<?php foreach ($mahasiswa as $mhs) : ?>
			<li>
				<a href="latihan2.php?nama=<?= $mhs["nama"];?>&nisn=<?= $mhs["nisn"];?>&email=<?= $mhs["email"];?>&jurusan=<?= $mhs["jurusan"];?>&gambar=<?= $mhs["gambar"];?>">
				<?= $mhs["nama"] ?></a>
			</li>
		<?php endforeach; ?>
		</ul>
	</body
</html>