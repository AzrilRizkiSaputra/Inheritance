<?php
class Barang{
	public  $judul,
			$penulis,
			$penerbit,
			$harga,
			$jmlhalaman,
			$waktumain;

	public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlhalaman = 0, $waktumain = 0){
		$this->judul = $judul;
		$this->penulis = $penulis;
		$this->penerbit = $penerbit;
		$this->harga = $harga;
		$this->jmlhalaman = $jmlhalaman;
		$this->waktumain = $waktumain;	
	}
	public function getLabel(){
		return "$this->penulis |  $this->penerbit";
	}
	public function getInfoProduk(){
		$st = "{$this->judul} | {$this->getLabel()} (Rp.{$this->harga})";
		return $st;
	}

}
class Komik extends Barang{
	public function getInfoProduk(){
		$st = "Komik : " . parent::getInfoProduk() . " - {$this->jmlhalaman} Halaman.";
		return $st;
	}
}
class Game extends Barang{
	public function getInfoProduk(){
		$st = "Game :  "  . parent::getInfoProduk() . " - {$this->waktumain} Jam.";
		return $st;
	}

}

class CetakInfoProduk{
	public function cetak(Barang $barang){
		$str = "{$barang->judul} | {$barang->getLabel()} (Rp.{$barang->harga})";
		return $str;
	}
}
$barang1 = new Komik("Naruto","Masashi Kishimoto","Shonen Jump", 30000, 100 , 0 );
$barang2 = new Game("PUBG","Tencent","Bluehole",45000, 0 , 50);

echo $barang1->getInfoProduk();
echo "<br>";
echo $barang2->getInfoProduk();