<?php

if (isset($_POST['jumlah'])) {

	$nama  	= $_POST['nama'];
	$mapel 	= $_POST['mapel'];
	$absen 	= $_POST['absen'] * 0.1;
	$tugas 	= $_POST['tugas'] * 0.2;
	$uts 	= $_POST['uts'] * 0.3;
	$uas 	= $_POST['uas'] * 0.4;

	$nilaiAkhir = $absen + $tugas + $uts + $uas;

	echo "Nama : $nama. <br/>";
	echo "Mata Pelajaran : $mapel. <br/>";
	echo "Nilai Absen : $absen <br/>";
	echo "Nilai Tugas : $tugas <br/>";
	echo "Nilai UTS : $uts <br/>";
	echo "Nilai UAS : $uas <br/>";
	echo "Total Nilai Anda : $nilaiAkhir <br/>";

	if ($nilaiAkhir > 80 && $nilaiAkhir <= 100) {
		echo "Anda mendapat nilai : A";
	}elseif ($nilaiAkhir > 70 && $nilaiAkhir < 80) {
		echo "Anda mendapat nilai : B";
	}elseif ($nilaiAkhir > 60 && $nilaiAkhir < 70) {
		echo "Anda mendapat nilai : C";
	}elseif ($nilaiAkhir > 50 && $nilaiAkhir < 60) {
		echo "Anda mendapat nilai : D";
	}else{
		echo "Anda mendapat nilai : E";
	}
}

?>