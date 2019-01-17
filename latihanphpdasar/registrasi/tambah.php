<?php 
require 'functions.php';

// cek apakah tombol submit sudah ditekan atau belum
if (isset($_POST["submit"]) ) {

		//menguji data
		if ( tambah($_POST) > 0 ) {
			echo "
				<script>
					alert('Data berhasil ditambahkan!')
					document.location.href = 'index.php';
				</script>
			";
		}else{
			echo "<script>
					alert('Data gagal ditambahkan!')
					document.location.href = 'tambah.php';
				</script>
				";
		}

}
?>


<!DOCTYPE html>
<html>
<head>
	<title>tambah data siswa</title>
</head>
<body>

<h1>Tambah Data Siswa SMK Informatika Utama</h1>

<form action="" method="post" enctype="multipart/form-data">
	<table>
		<tr>
			<td>
				<label for="nama">Nama  : </label>
				<input type="text" name="nama" id="nama" required>
			</td>
		</tr>
		<tr>
			<td>
				<label for="nisn">NISN  :</label>
				<input type="text" name="nisn" id="nisn">
			</td>
		</tr>
		<tr>
			<td>
				<label for="jurusan">Jurusan  : </label>
				<input type="text" name="jurusan" id="jurusan">
			</td>
		</tr>
		<tr>
			<td>
				<label for="email">Email  :</label>
				<input type="text" name="email" id="email">
			</td>
		</tr>

		<tr>
			<td>
				<label for="gambar">Gambar  :</label>
				<input type="file" name="gambar" id="gambar">
			</td>
		</tr>
		<tr><td><button type="submit" name="submit">Tambah Data</button></td></tr>
	</table>
	<br>
	<br>
	<a href="index.php">Kembali Ke Daftar Siswa SMK</a>
</form>

</body>
</html>