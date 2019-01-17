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

?>