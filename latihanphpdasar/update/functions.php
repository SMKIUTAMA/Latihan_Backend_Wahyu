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
		$gambar = htmlspecialchars($data["gambar"]);

		$query = "INSERT INTO siswa_smk
						VALUES
				('',  '$nama', '$nisn', '$email', '$jurusan', '$gambar')";

			mysqli_query($conn, $query);

			return mysqli_affected_rows($conn);
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
	$gambar = htmlspecialchars($data["gambar"]);

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

?>