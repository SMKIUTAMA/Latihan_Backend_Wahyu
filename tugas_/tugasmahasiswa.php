<html>
	<head>
		<title></title>
	</head>

	<body>
		<table>
				<form action="prosesmahasiswa.php" method="POST">
					<tr>
						<td>Nama</td>
						<td><input type="text" name="nama"></td>
					</tr>
					<tr>
						<td>Mata Pelajaran </td>
						<td><input type="text" name="mapel"></td>
					</tr>
					<tr>
						<td>Nilai Absen</td>
						<td><input type="text" name="absen"></td>
					</tr>
					<tr>
						<td>Nilai Tugas</td>
						<td><input type="text" name="tugas"></td>
					</tr>
					<tr>
						<td>Nilai UTS</td>
						<td><input type="text" name="uts"></td>
					</tr>
					<tr>
						<td>Nilai UAS</td>
						<td><input type="text" name="uas"></td>
					</tr>

					<tr>
						<td>
							<button type="submit" name="jumlah">Jumlah</button>
						</td>
					</tr>
				</form>
		</table>
	</body>
</html>