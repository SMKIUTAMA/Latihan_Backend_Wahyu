<?php

include_once 'App/init.php';

$product1 = new Komik("Naruto","Masashi Kisimoto","Sanken",50000,100);
$product2 = new Game("Uncharted","Neil Druckmann","Sony Computer",500000,50);


$cetakProduct = new CetakInfoProduct();
$cetakProduct->tambahProduct($product1);
$cetakProduct->tambahProduct($product2);

echo $cetakProduct->cetak();

echo "<hr>";

new Coba();