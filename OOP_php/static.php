<?php


// class ContohStatic{

// 	public static $angka = 1;

// 	public static function helo(){
// 		return "Hello " .self::$angka++." Kali";
// 	}

// }

// echo ContohStatic::$angka;
// echo "<br>";
// echo ContohStatic::helo();
// echo "<hr>";
// echo ContohStatic::helo();


/**
* 
*/
class Contoh
{
	public static $angka = 1;

	public function helo()
	{
		return "Hello ". self::$angka++ ." Kali"."<br>";
	}
}

$obj = new Contoh;
echo $obj->helo();
echo $obj->helo();
echo $obj->helo();
echo "<hr>";

$obj2 = new Contoh;
echo $obj2->helo();
echo $obj2->helo();
echo $obj2->helo();



?>