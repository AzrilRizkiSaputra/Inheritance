<?php
class Mobil{
	public $nama, $merk, $warna,
			$kecepatanMaksimal,
			$jumlahPenumpang;

	public function tambahKecepatan(){
		return "Kecepatan Bertambah";
	}
}
class MobilSport extends Mobil{
	public $turbo = false;

	public function jalankanTurbo(){
		$this->turbo = true;
		return "Turbo Dinyalakan";
	}
}

$mobil1 = new MobilSport();
echo $mobil1->tambahKecepatan();
echo "<br>";
echo $mobil1->jalankanTurbo();