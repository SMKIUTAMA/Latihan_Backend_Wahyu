<?php

class Game extends Product implements InfoProduct{
	public $waktuMain;

	function __construct($judul = "Judul", $penulis = "Penulis", $penerbit = "Penerbit", $harga = 0, $waktuMain = 0){

		parent::__construct($judul, $penulis, $penerbit, $harga);

		$this->waktuMain = $waktuMain;
	}

	public function getinfo(){
		$str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";

		return $str;
	}
	
	function getInfoProduct(){
		$str = "Game : ". $this->getInfo() ." ~ {$this->waktuMain} Jam";

		return $str;
	}
}