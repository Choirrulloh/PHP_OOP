<?php 
	class Produk {
		public 	$judu, 
				$penulis,
				$penerbit,
				$harga,
				$sizeProduk;

		public function __construct($judul = "Judul", $penulis = "Penulis", $penerbit = "Penerbit", $harga = 0, $sizeProduk = 0){
			$this->judul = $judul;
			$this->penulis = $penulis;
			$this->penerbit = $penerbit;
			$this->harga = $harga;
			$this->sizeProduk = $sizeProduk;
		}

		public function getInfoProduk(){
			$str = "{$this->tipe} : {$this->judul} | {$this->getLabel()}, (Rp. {$this->harga})";
			return $str;
		}

		public function getLabel(){
			return "$this->penulis, $this->penerbit";
		}
	}

	class Komik extends Produk{
		function getInfoProduk(){
			$str = "Komik : {$this->judul} | {$this->getLabel()}, (Rp. {$this->harga}) - {$this->sizeProduk} Halaman.";
			return $str;
		}
	}

	class Game extends Produk{
		function getInfoProduk(){
			$str = "Game : {$this->judul} | {$this->getLabel()}, (Rp. {$this->harga}) ~ {$this->sizeProduk} Jam.";
			return $str;
		}
	}

	class CetakInfoProduk{

		public function cetak( Produk $produk ){
			$str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
			return $str;
		}
	}

	$produk1 = new Komik("Naruto","Masashi Kishimoto","Shonen Jump",350000, 100);
	$produk2 = new Game("Uncharted","Nevil Druckman","Sony Computer",50000, 50);
	echo $produk1->getInfoProduk();
	echo "<br>";
	echo $produk2->getInfoProduk();
 ?>
