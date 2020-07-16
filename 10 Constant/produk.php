<?php 
	class Produk {
		private 	$judul, 
					$penulis,
					$penerbit,
					$harga,
					$diskon = 0;

		public function __construct($judul = "Judul", $penulis = "Penulis", $penerbit = "Penerbit", $harga = 0){
			$this->judul = $judul;
			$this->penulis = $penulis;
			$this->penerbit = $penerbit;
			$this->harga = $harga;
		}


		public function getInfoProduk(){
			$str = "{$this->judul} | {$this->getLabel()}, (Rp. {$this->harga})";
			return $str;
		}

		public function getLabel(){
			return "$this->penulis, $this->penerbit";
		}

		public function setDiskon($diskon){
			$this->diskon = $diskon;
		}

		public function getDiskon(){
			$this->diskon;
		}

		public function getJudul(){
			return $this->judul;
		}

		public function setJudul($judul){
			$this->judul = $judul;
		}

		public function getPenulis(){
			return $this->penulis;
		}

		public function setPenulis($penulis){
			$this->penulis = $penulis;
		}

		public function getPenerbit(){
			return $this->penerbit;
		}

		public function setPenerbit($penerbit){
			$this->penerbit = $penerbit;
		}

		public function getHarga(){
			return $this->harga - ($this->harga * $this->diskon / 100);
		}

		public function setHarga($harga){
			$this->harga = $harga;
		}
	}

	class Komik extends Produk{
		public $jmlHalaman;

		public function __construct( $judul = "Judul", $penulis = "Penulis", $penerbit = "Penerbit", $harga = 0, $jmlHalaman = 0 ){
			parent::__construct( $judul, $penulis, $penerbit, $harga );
			$this->jmlHalaman = $jmlHalaman;
		}
		public function getInfoProduk(){
			$str = "Komik : " . parent::getInfoProduk() ." - {$this->jmlHalaman} Halaman.";
			return $str;
		}
	}

	class Game extends Produk{
		public $waktuMain;

		public function __construct( $judul = "Judul", $penulis = "Penulis", $penerbit = "Penerbit", $harga = 0, $waktuMain = 0 ){
			parent::__construct( $judul, $penulis, $penerbit, $harga );
			$this->waktuMain = $waktuMain;
		}

		function getInfoProduk(){
			$str = "Game : " . parent::getInfoProduk() ." ~ {$this->waktuMain} Jam.";
			return $str;
		}
	}

	$produk1 = new Komik("Naruto","Masashi Kishimoto","Shonen Jump",350000, 100);
	$produk2 = new Game("Uncharted","Nevil Druckman","Sony Computer",550000, 50);
	echo $produk1->getInfoProduk();
	echo "<br>";
	echo $produk2->getInfoProduk();

	echo "<hr>";
	$produk2->setDiskon(10);
	echo $produk2->getHarga();

	echo "<hr>";

	$produk2->setJudul("Percobaan");
	echo $produk2->getJudul();
?>
