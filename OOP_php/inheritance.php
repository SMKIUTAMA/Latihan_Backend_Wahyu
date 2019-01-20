<?php

Class Product{
	public $judul,
		   $penulis,
		   $penerbit,
		   $harga,
		   $jmlHalaman,
		   $waktuMain;

	public function __construct($judul = "Judul", $penulis = "Penulis", $penerbit = "Penerbit", $harga = 0, $jmlHalaman = 0, $waktuMain = 0){
		$this->judul = $judul;
		$this->penulis = $penulis;
		$this->penerbit = $penerbit;
		$this->harga = $harga;
		$this->jmlHalaman = $jmlHalaman;
		$this->waktuMain = $waktuMain;
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
	 public function getInfoProduct(){
	 	$str = "Komik : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga}) - {$this->jmlHalaman} Halaman";

	 	return $str;
	 }
}

class Game extends Product{
	
	function getInfoProduct(){
		$str = "Game : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga}) ~ {$this->waktuMain} Jam";

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

$product1 = new Komik("Naruto","Masashi Kisimoto","Sanken",50000,100,0);
$product2 = new Game("Uncharted","Neil Druckmann","Sony Computer",500000,0,50);

//  Komik : Naruto | Masashi Kisimoto,Sanken(Rp.50000) - 100 Halaman
// Game : Uncharted : Neil Druckmann, Sonny Computer, (Rp.500000) ~ 50 Jam

echo $product1->getInfoProduct();
echo "<br>";
echo $product2->getInfoProduct();


?>