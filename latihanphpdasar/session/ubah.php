<?php 
session_start();

if (!isset($_SESSION["login"])) {
	header('location:login.php');
	exit;
} 

include 'functions.php';

// ambil data diURL
$id=$_GET['id'];

// query data mahasiswa berdasarkan id
$sql = query("SELECT * FROM siswa_smk WHERE id = '$id'")[0];

// cek apakah tombol submit sudah ditekan atau belum
if (isset($_POST["submit"]) ) {

		//menguji data
		if (ubah($_POST) > 0 ) {
			echo "
				<script>
					alert('Data berhasil diubah!')
					document.location.href = 'index.php';
				</script>
			";
		}else{
			echo "<script>
					alert('Data gagal diubah!')
					document.location.href = 'ubah.php';
				</script>
				";
		}

}
?>


<!DOCTYPE html>
<html>
<head>
	<title>ubah data siswa</title>
</head>
<body>

<h1>Ubah Data Siswa SMK Informatika Utama</h1>

<form action="" method="post" enctype="multipart/form-data">
	<table>
		<tr>
			<td>
				<input type="hidden" name="id" value="<?= $sql['id']; ?>">
				<input type="hidden" name="gambarLama" value="<?= $sql['gambar']; ?>">	
			</td>
		</tr>
		<tr>
			<td>
				<label for="nama" >Nama  : </label>
				<input type="text" name="nama" id="nama" required value="<?= $sql['nama']; ?>">
			</td>
		</tr>
		<tr>
			<td>
				<label for="nisn">NISN  :</label>
				<input type="text" name="nisn" id="nisn" value="<?= $sql['nisn']; ?>">
			</td>
		</tr>
		<tr>
			<td>
				<label for="jurusan">Jurusan  : </label>
				<input type="text" name="jurusan" id="jurusan"  value="<?= $sql['jurusan']; ?>">
			</td>
		</tr>
		<tr>
			<td>
				<label for="email">Email  :</label>
				<input type="text" name="email" id="email"  value="<?= $sql['email']; ?>">
			</td>
		</tr>

		<tr>
			<td>
				<label for="gambar">Gambar  :</label><br>
				<img src="img/<?= $sql['gambar']; ?>" width="50"><br>
				<input type="file" name="gambar" id="gambar">
			</td>
		</tr>
		<tr><td><button type="submit" name="submit">Ubah Data</button></td></tr>
	</table>
	<br>
	<br>
	<a href="index.php">Kembali Ke Daftar Siswa SMK</a>
</form>

</body>
</html>