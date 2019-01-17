<?php
// koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "latihan_db");

function query ($query){
	global $conn;

	$result = mysqli_query($conn, $query);
	$rows = [];

	while($row = mysqli_fetch_assoc($result) ){
		$rows[] = $row;
	}
	return $rows;
}

function tambah($data) {
		global $conn;

		$nama = htmlspecialchars($data["nama"]);
		$nisn = htmlspecialchars($data["nisn"]);
		$email = htmlspecialchars($data["email"]);
		$jurusan = htmlspecialchars($data["jurusan"]);
		
		$gambar = upload();
		if (!$gambar) {
			return false;
		}

		$query = "INSERT INTO siswa_smk
						VALUES
				('',  '$nama', '$nisn', '$email', '$jurusan', '$gambar')";

			mysqli_query($conn, $query);

			return mysqli_affected_rows($conn);
}

function upload()
{
	$namaFile = $_FILES['gambar']['name'];
	$ukuranFile = $_FILES['gambar']['size'];
	$error = $_FILES['gambar']['error'];
	$tmpName = $_FILES['gambar']['tmp_name'];

	// check apakah user mengrimkan gambar
	if ($error === 4) {
		echo"
				<script>
					alert('Tolong Masukan Gambar anda')
				</script>
			";
		return false;
	}

	// check apakah yang diupload adalah gambar
	$ekstensiGambarValid = ['jpg','jpeg','png'];
	$ekstensiGambar = explode('.', $namaFile);
	$ekstensiGambar = strtolower(end($ekstensiGambar));
	if (!in_array($ekstensiGambar, $ekstensiGambarValid)) {
		echo"
				<script>
					alert('Yang anda upload bukan gambar')
				</script>
			";
		return false;
	}

	// check ukuran file
	if ($ukuranFile > 1000000) {
		echo"
				<script>
					alert('Ukuran gambar terlalu besar')
				</script>
			";
		return false;
	}

	// lolos valisadi, upload file
	// generate nama gambar baru
	$namaFileBaru = uniqid();
	$namaFileBaru .= '.';
	$namaFileBaru .= $ekstensiGambar;

	move_uploaded_file($tmpName, 'img/'. $namaFileBaru);

	return $namaFileBaru;

}

function hapus($id) {
	global $conn;
	mysqli_query($conn, "DELETE FROM siswa_smk WHERE id = $id");
	return mysqli_affected_rows($conn);
}

function ubah($data){
	global $conn;

	$id = $data["id"];
	$nama = htmlspecialchars($data["nama"]);
	$nisn = htmlspecialchars($data["nisn"]);
	$email = htmlspecialchars($data["email"]);
	$jurusan = htmlspecialchars($data["jurusan"]);
	$gambarLama =  htmlspecialchars($data["gambarLama"]);

	// check apakah user mengupload gambar baru atau tidak
	if ($_FILES["gambar"]["error"] === 4) {
		$gambar = $gambarLama;
	}else{
		$gambar = upload(); 
	}
	

	$query = "UPDATE siswa_smk SET
				id 	 	= '$id',
				nama 	= '$nama',
				nisn 	= '$nisn',
				jurusan = '$jurusan',
				gambar 	= '$gambar'
			  WHERE id = '$id'";

	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);
}

function cari($keyword)
{
	$query = "SELECT * FROM siswa_smk 
					WHERE
				nama 	LIKE '%$keyword%' OR
				nisn 	LIKE '%$keyword%' OR
				email 	LIKE '%$keyword%' OR
				jurusan LIKE '%$keyword%' 
			";

		return query($query);
}

function regis($data){ 
	global $conn;

	$username = strtolower(stripslashes($data["username"]));
	$password = mysqli_real_escape_string($conn, $data["password"]);
	$password2 = mysqli_real_escape_string($conn,$data["password2"]);

	// check username sudah ada atau belum
	$result = $conn->query("SELECT username FROM user WHERE username = '$username'");

	if (mysqli_fetch_assoc($result)) {
		echo "<script>
				alert('Username sudah ada');
			 </script>";
		return false; 
	}


	// cek konfirmasi password
	if ($password !== $password2) {
		echo "<script>
				alert('Konfirmasi Password tidak sesuai')
			 </script>";
		return false; 
	}

	// enkripsi password
	$password = password_hash($password, PASSWORD_DEFAULT);

	// tambahkan username ke database
	 $conn->query("INSERT INTO user VALUES('','$username','$password')");

	 return mysqli_affected_rows($conn);
}
?>