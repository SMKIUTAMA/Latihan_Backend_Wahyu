<?php

Class product{
	public $judul = "Judul",
		   $penulis = "Penulis",
		   $penerbit = "Penerbit",
		   $harga = "0";

	public function getLabel(){
		return "$this->judul,
				$this->harga";
	} 
}

// $product1 = new product();
// $product1->judul = "Naruto";
// echo "<pre>";
// var_dump($product1);
// echo "<hr>";
// $product2 = new product();
// $product2->judul = "Resident Evil 4";
// $product2->TambahProduct = "hahaha";

// var_dump($product2);


$product3 = new product();
$product3->judul = "Naruto";
$product3->penulis = "Masashi Kisimoto";
$product3->penerbit = "Sanken";
$product3->harga = "50000";

$product4 = new product();
$product4->judul = "Pro Evolution Soccer";
$product4->penulis = "Siapa ke";
$product4->penerbit = "Sony Erection";
$product4->harga = "500000";

echo "Komik : ". $product3->getLabel();
echo "<br>";
echo "Game : ". $product4->getLabel();
?>