<?php 
	class Produk {
		public 	$judu, 
				$penulis,
				$penerbit,
				$harga;

		public function __construct($judul = "Judul", $penulis = "Penulis", $penerbit = "Penerbit", $harga = 0){
			$this->judul = $judul;
			$this->penulis = $penulis;
			$this->penerbit = $penerbit;
			$this->harga = $harga;
		}

		public function getLabel(){
			return "$this->penulis, $this->penerbit";
		}
	}


	$produk3 = new Produk("Naruto","Masashi Kishimoto","Shonen Jump",350000);
	$produk4 = new Produk("Uncharted","Nevil Druckman","Sony Computer",50000);
	$produk5 = new Produk("Sukses","Isep Lutpi Nur","Nekar Maju Makmur",500000);

	 // var_dump($produk3);
	echo "Penulis: " . $produk3->getLabel() . "<br>";
	echo "Penulis: " . $produk4->getLabel() . "<br>";
	echo "Komik: " . $produk5->getLabel();
 ?>
