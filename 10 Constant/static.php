<?php 

// class ContohStatic{
// 	public static $angka = 1;

// 	public static function halo(){
// 		return "Hallo Mantan " . self::$angka++ . " Kali ";
// 	}
// }

// echo ContohStatic::$angka;
// echo "<hr>";
// for ($i=0; $i < 100 ; $i++) { 
// 	echo ContohStatic::halo();
// 	echo "<hr>";
// }


class Contoh{
	public static $angka = 1;

	public function halo(){
		return "Hallo Mantan " . self::$angka++ . " Kali <br>";
	}
}

$obj = new Contoh;

echo $obj->halo();
echo $obj->halo();
echo $obj->halo();

echo "<hr>";

$obj1 = new Contoh;

echo $obj1->halo();
echo $obj1->halo();
echo $obj1->halo();



 ?>
