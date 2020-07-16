<?php
 	abstract class Produk {
		protected 	$judul, 
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


		abstract public function getInfo();

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
