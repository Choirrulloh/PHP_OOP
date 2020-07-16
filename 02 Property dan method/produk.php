<?php 

// Jualan produk
// Komik
// Game

// Definisikan secara default variable assignment
class Produk {
	public 	$judul = "judul", 
			$penulis = "penulis",
			$penerbit = "penerbit",
			$harga = "harga";

	public function getLabel(){
		return "$this->penulis, $this->penerbit";
	}
}

// class Produk {
// 	public 	$judul, 
// 			$penulis,
// 			$penerbit,
// 			$harga;
// }

// $produk1 = new Produk();
// $produk1->judul = "naruto";
// $produk2 = new Produk();
// $produk2->judul = "Far cry 3";
// var_dump($produk1);
// var_dump($produk2->judul);


 $produk3 = new Produk();
 $produk3->judul = "Naruto";
 $produk3->penulis = "Masashi Kishimoto";
 $produk3->penerbit = "Shonen Jump";
 $produk3->harga = "350000";

 $produk4 = new Produk();
 $produk4->judul = "Uncharted";
 $produk4->penulis = "Nevil Druckman";
 $produk4->penerbit = "Sony Computer";
 $produk4->harga = "50000";

// $produk5-> new Produk("Sukses","Isep Lutpi Nur","Nekar Maju Makmur","500000");

 // var_dump($produk3);
 echo "Penulis: " . $produk3->getLabel() . "<br>";
 echo "Penulis: " . $produk4->getLabel() . "<br>";
 // echo "Komik: " . $produk5->getLabel();
 ?>
