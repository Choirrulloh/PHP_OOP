<?php 
	class Produk {
		public 	$judu, 
				$penulis,
				$penerbit,
				$harga,
				$jmlHalaman,
				$waktuMain,
				$tipe;

		public function __construct($judul = "Judul", $penulis = "Penulis", $penerbit = "Penerbit", $harga = 0, $jmlHalaman = 0, $waktuMain, $tipe){
			$this->judul = $judul;
			$this->penulis = $penulis;
			$this->penerbit = $penerbit;
			$this->harga = $harga;
			$this->jmlHalaman = $jmlHalaman;
			$this->waktuMain = $waktuMain;
			$this->tipe = $tipe;
		}

		public function getInfoLengkap(){
			$str = "{$this->tipe} : {$this->judul} | {$this->getLabel()}, (Rp. {$this->harga})";
			if($this->tipe == "Komik"){
				$str .= " - {$this->jmlHalaman} Halaman.";
			}else if($this->tipe == "Game"){
				$str .= " ~ {$this->waktuMain} Jam.";
			}
			return $str;
		}

		public function getLabel(){
			return "$this->penulis, $this->penerbit";
		}
	}

	class CetakInfoProduk{

		public function cetak( Produk $produk ){
			$str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
			return $str;
		}
	}

	$produk1 = new Produk("Naruto","Masashi Kishimoto","Shonen Jump",350000, 100, 0, "Komik");
	$produk2 = new Produk("Uncharted","Nevil Druckman","Sony Computer",50000, 0, 50, "Game");
	echo $produk1->getInfoLengkap();
	echo "<br>";
	echo $produk2->getInfoLengkap();
 ?>
