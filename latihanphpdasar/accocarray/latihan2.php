<?php 

// $mahasiswa = 
// 	[["Wahyu Pramudya", 123456789, "wahyupramudya@gmail.com", "Teknik Inforamtika"],

// array accociative
// definisi-nya sama dengan array numerik, kecuali
// key-nya adalah string yang kita buat sendiri

$mahasiswa = [
	[
		"nama" => "Wahyu Pramudya",
		"nisn" => "123456789",
		"email" => "wahyupramudya@gmail.com",
		"jurusan" => "Teknik Inforamtika",
		"gambar" => "wahyu.jpg"
	]
];

?>

<html>
	<head>
		<title>Daftar Mahasiswa</title>
	</head>

	<body>
		<h1>Daftar Mahasiswa</h1>

		<?php foreach ($mahasiswa as $row) : ?>
		<ul>
			<li>
				<img src="img/<?=$row["gambar"] ?>">
			</li>
			<li>Nama : <?=$row["nama"] ?></li>
			<li>NISN : <?=$row["nisn"] ?></li>						
			<li>Email : <?=$row["email"] ?></li>			
			<li>Jurusan : <?=$row["jurusan"] ?></li>			
		</ul>
	<?php endforeach; ?>
	</body>
</html>