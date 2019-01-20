<?php

// define('NAMA', 'Wahyu Adi Pramudya');
// echo NAMA;
// echo "<BR>";
// const UMUR = 18;
// echo UMUR;



// class Contoh
// {
// 	const NAMA = 'Wahyu Adi Pramudya';
// }

// echo Contoh::NAMA;

// untuk menampilkan pada LINE berapa
echo __LINE__;

echo "<br>";

// untuk menampilkan alamat FILE yang bersangkutan
echo __FILE__;

echo "<br>";

// untuk menampilkan CLASS yang dipakai
class Contoh{
	public $nama = __CLASS__;

}
$coba = new Contoh;
echo $coba->nama;

echo "<br>";

// untuk menampilkan FUNCTION yang dipakai
function Contoh(){
	return __FUNCTION__;
}
echo Contoh();

?>