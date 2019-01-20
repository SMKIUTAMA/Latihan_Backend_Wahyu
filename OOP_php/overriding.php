<?php

Class Product{
	public $judul,
		   $penulis,
		   $penerbit,
		   $harga;

	public function __construct($judul = "Judul", $penulis = "Penulis", $penerbit = "Penerbit", $harga = 0){
		$this->judul = $judul;
		$this->penulis = $penulis;
		$this->penerbit = $penerbit;
		$this->harga = $harga;
	}

	public function getLabel(){
		return "$this->penulis,
				$this->penerbit";
	} 

	function getInfoProduct(){
		$str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";

		return $str;
	}
}

class Komik extends Product{
	public $jmlHalaman;

	public function __construct($judul = "Judul", $penulis = "Penulis", $penerbit = "Penerbit", $harga = 0, $jmlHalaman = 0){

		parent::__construct($judul, $penulis, $penerbit, $harga);
		$this->jmlHalaman = $jmlHalaman;
	}


	public function getInfoProduct(){
	 	$str = "Komik : ". parent::getInfoProduct() ." - {$this->jmlHalaman} Halaman";

	 	return $str;
	 }
}

class Game extends Product{
	public $waktuMain;

	function __construct($judul = "Judul", $penulis = "Penulis", $penerbit = "Penerbit", $harga = 0, $waktuMain = 0){

		parent::__construct($judul, $penulis, $penerbit, $harga);

		$this->waktuMain = $waktuMain;
	}
	
	function getInfoProduct(){
		$str = "Game : ". parent::getInfoProduct() ." ~ {$this->waktuMain} Jam";

		return $str;
	}
}

Class CetakInfoProduct{
	public function cetak(product $product)
	{
		$str = "{$product->judul} | {$product->getLabel()} | (Rp. {$product->harga})";
		return $str;
	}
}

$product1 = new Komik("Naruto","Masashi Kisimoto","Sanken",50000,100);
$product2 = new Game("Uncharted","Neil Druckmann","Sony Computer",500000,50);

//  Komik : Naruto | Masashi Kisimoto,Sanken(Rp.50000) - 100 Halaman
// Game : Uncharted : Neil Druckmann, Sonny Computer, (Rp.500000) ~ 50 Jam

echo $product1->getInfoProduct();
echo "<br>";
echo $product2->getInfoProduct();


?>