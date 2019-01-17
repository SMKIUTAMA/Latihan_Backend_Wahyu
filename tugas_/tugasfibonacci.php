<?php  
// membuat dua nilai
$angkaPertama = 0;
$angkaKedua = 1;

// menampilkan kedua nilai diatas
echo $angkaPertama."<br>".$angkaKedua;

for ($i=0; $i < 10 ; $i++) { 

	// menghitung angka yang akan ditampilakan
	$hasil = $angkaPertama + $angkaKedua;
	echo "<br>".$hasil;

	// siapkan angka untuk perhitungan selanjutnya
	$angkaPertama = $angkaKedua;
	$angkaKedua = $hasil;
}




?>