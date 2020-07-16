<?php
	require_once 'App/Init.php';
	$produk1 = new Komik("Naruto","Masashi Kishimoto","Shonen Jump",350000, 100);
	$produk2 = new Game("Uncharted","Nevil Druckman","Sony Computer",550000, 50);
	
	$cetakProduk = new CetakInfoProduk();
	$cetakProduk->tambahProduk( $produk1 );
	$cetakProduk->tambahProduk( $produk2 );
	echo $cetakProduk->cetak();

