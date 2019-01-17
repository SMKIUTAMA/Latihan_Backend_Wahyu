<?php

require_once __DIR__ . '/vendor/autoload.php';

$mpdf = new \Mpdf\Mpdf();
require 'functions.php';
$siswasmk = query("SELECT * FROM siswa_smk");

$html = '<!DOCTYPE html>
<html>
<head>
	<title>Dafter Siswa SMKIUTAMA</title>
	<link rel="stylesheet" href="css/print.css">
</head>
<body>
	<h1>Daftar Siswa SMKIUTAMA</h1>
	<table border="1" cellpadding="10" cellspacing="0">
			<tr><th>No.</th>
				<th>Gambar</th>
				<th>Nama</th>
				<th>NISN</th>
				<th>Email</th>
				<th>Jurusan</th>
			</tr>';

			$i = 1;
			foreach ($siswasmk as $row) {
				$html .= '<tr>
					<td>'.$i++.'</td>
					<td><img src="img/'.$row["gambar"].'" width=50></td>
					<td>'.$row["nama"].'</td>
					<td>'.$row["nisn"].'</td>
					<td>'.$row["email"].'</td>
					<td>'.$row["jurusan"].'</td>
				</tr>'; 
			}

$html .= '</table>
</body>
</html>';

$mpdf->WriteHTML($html);
$mpdf->Output('daftar-siswasmk','I');

?>