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
}

Class CetakInfoProduct{
	public function cetak(product $product)
	{
		$str = "{$product->judul} | {$product->getLabel()} | (Rp. {$product->harga})";
		return $str;
	}
}

$product1 = new Product("Naruto","Masashi Kisimoto","Sanken","50000");
$product2 = new Product("Pro Evolution Soccer","Siapa ke","Sony Erection","500000");

echo "Komik : ". $product1->getLabel();
echo "<br>";
echo "Game : ". $product2->getLabel();
echo "<br>";

$infoproduk = new CetakInfoProduct();
echo $infoproduk->cetak($product2);




?>