<?php 
// array
// variabel yang dapat menampung banyak nilai
// emelen pada array boleh memiliki tipe data yang berbeda
// pasangan dari key dan value
// keynya adalah index, yang dimulai dari 0

// membuat array
// cara lama
$hari = array("Senin", "Selasa", "Rabu");
// cara baru
$bulan = ["Januari", "Februari", "Maret"];
$arr1 = [123, "Januari", false];

// menampilkan array
// var_dump() / print_r()
// var_dump($hari);
// echo "<br>";
// var_dump($bulan);
// echo "<br>";

// menampilkan 1 element pada array
// echo $arr1[0];
// echo "<br>";
// echo $bulan[1];

// menambahkan element baru pada array

$hari[] = "Kamis";
$bulan[] = "April";
$bulan[] = "Mei";
// $hari[] = "Jum'at";
// $hari[] = "Sabtu";
// $hari[] = "Minggu";
var_dump($bulan);
echo "<br>";
var_dump($hari);






?>