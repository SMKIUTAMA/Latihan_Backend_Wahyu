<?php

Class CetakInfoProduct{
	public $daftarProduct = [];
	public function tambahProduct(product $product)
	{
		$this->daftarProduct[] = $product;
	}

	public function cetak()
	{
		$str = "Daftar Product : <br>";

		foreach ($this->daftarProduct as $p) {
			$str .= " - {$p->getInfoProduct()} <br>";
		}

		return $str;
	}
}