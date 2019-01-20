<?php

Class Product{
	public $judul,
		   $penulis,
		   $penerbit,
		   $harga,
		   $jmlHalaman,
		   $waktuMain,
		   $tipe;

	public function __construct($judul = "Judul", $penulis = "Penulis", $penerbit = "Penerbit", $harga = 0, $jmlHalaman = 0, $waktuMain = 0, $tipe){
		$this->judul = $judul;
		$this->penulis = $penulis;
		$this->penerbit = $penerbit;
		$this->harga = $harga;
		$this->jmlHalaman = $jmlHalaman;
		$this->waktuMain = $waktuMain;
		$this->tipe = $tipe;
	}

	public function getLabel(){
		return "$this->penulis,
				$this->penerbit";
	} 

	function getInfoLengkap(){
	//  Komik : Naruto | Masashi Kisimoto,Sanken(Rp.50000) - 100 Halaman
		$str = "{$this->tipe} : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
		if ($this->tipe == "Komik") {
			$str .= " - {$this->jmlHalaman} Halaman.";
		}elseif ($this->tipe == "Game") {
			$str .= " ~ {$this->waktuMain} Jam.";
		}

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

$product1 = new Product("Naruto","Masashi Kisimoto","Sanken",50000,100,0, "Komik");
$product2 = new Product("Uncharted","Neil Druckmann","Sony Computer",500000,0,50,"Game");

//  Komik : Naruto | Masashi Kisimoto,Sanken(Rp.50000) - 100 Halaman
// Game : Uncharted : Neil Druckmann, Sonny Computer, (Rp.500000) ~ 50 Jam

echo $product1->getInfoLengkap();
echo "<br>";
echo $product2->getInfoLengkap();


?>