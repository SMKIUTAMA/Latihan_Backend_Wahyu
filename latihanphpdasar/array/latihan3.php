<?php 

$mahasiswa = [["Wahyu Adi Pramudya", 123456789, "Teknik Informatika", "wartegboy@gmail.com"], 
		["Syahril Ramadhan", 987654321, "Teknik Jaringan Server", "syahrilramdhan@yahoo.com"],
		["Muhammad Nassuha", 192837465, "Teknik Design", "muhammadnassuha@yahoo.co.id"],
		["Muhammad Nassuha", 192837465, "Teknik Design", "muhammadnassuha@yahoo.co.id"],
		["Muhammad Nassuha", 192837465, "Teknik Design", "muhammadnassuha@yahoo.co.id"],
		["Muhammad Nassuha", 192837465, "Teknik Design", "muhammadnassuha@yahoo.co.id"],
		["Muhammad Nassuha", 192837465, "Teknik Design", "muhammadnassuha@yahoo.co.id"],
		["Muhammad Nassuha", 192837465, "Teknik Design", "muhammadnassuha@yahoo.co.id"],
		["Muhammad Nassuha", 192837465, "Teknik Design", "muhammadnassuha@yahoo.co.id"],
		["Muhammad Nassuha", 192837465, "Teknik Design", "muhammadnassuha@yahoo.co.id"],
		["Muhammad Nassuha", 192837465, "Teknik Design", "muhammadnassuha@yahoo.co.id"],
		["Muhammad Nassuha", 192837465, "Teknik Design", "muhammadnassuha@yahoo.co.id"],
		["Muhammad Nassuha", 192837465, "Teknik Design", "muhammadnassuha@yahoo.co.id"],
		["Muhammad Nassuha", 192837465, "Teknik Design", "muhammadnassuha@yahoo.co.id"],
		["Muhammad Nassuha", 192837465, "Teknik Design", "muhammadnassuha@yahoo.co.id"],
		["Muhammad Nassuha", 192837465, "Teknik Design", "muhammadnassuha@yahoo.co.id"],
		["Muhammad Nassuha", 192837465, "Teknik Design", "muhammadnassuha@yahoo.co.id"],
		["Muhammad Nassuha", 192837465, "Teknik Design", "muhammadnassuha@yahoo.co.id"],
		["Muhammad Nassuha", 192837465, "Teknik Design", "muhammadnassuha@yahoo.co.id"],
	];
?>

<html>
	<head>
		<title>Daftar Mahasiswa</title>
	</head>

	<body>
		<h1>Daftar Mahasiswa</h1>

		<?php foreach ($mahasiswa as $mhs) : ?>
		<ul>
			<li>Nama : <?= $mhs[0]; ?></li>
			<li>NISN : <?= $mhs[1]; ?></li>
			<li>Jurusan : <?= $mhs[2]; ?></li>
			<li>Email :<?= $mhs[3]; ?></li>
		</ul>
		<?php endforeach; ?>
	</body>
</html>