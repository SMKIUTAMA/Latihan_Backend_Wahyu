<?php

Class product{
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
		return "$this->judul,
				$this->penulis,
				$this->penerbit,
				$this->harga";
	} 
}

$product1 = new product("Naruto","Masashi Kisimoto","Sanken","50000");
$product2 = new product("Pro Evolution Soccer","Siapa ke","Sony Erection","500000");
$product3 = new product("Dargon Ball");

echo "Komik : ". $product1->getLabel();
echo "<br>";
echo "Game : ". $product2->getLabel();
echo "<br>";
echo "<pre>";
var_dump($product3);
?>