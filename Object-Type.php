<?php 

class komik{
	public $Judul;
	public $Penerbit;
	public $Seri;
	public $harga;

	public function __construct($Judul = "Judul", $Penerbit = "Penerbit", $Seri = "Seri", $harga = "harga"){
		$this->Judul = $Judul;
		$this->Penerbit = $Penerbit;
		$this->Seri = $Seri;
		$this->harga = $harga;
	}

	public function getKomik(){
		return "$this->Penerbit, $this->Seri, $this->harga";
	}
}


class CetakInfoKomik{
	public function cetak(komik $komik){
		$str = "{$komik->Judul} | {$komik->getKomik()}";
		return $str;
	}
}



$Komik1 = new komik("One Piece", "Oda Sensei", "201", 30000);
$Komik2 = new komik("Naruto" , "Masashi Kishimoto", "190", 35000);
echo $Komik1->getKomik();
echo "<br>";
echo $Komik2->getKomik();
echo "<hr>";

$InfoKomik1 = new CetakInfoKomik();
echo $InfoKomik1->cetak($Komik1);
echo "<br>";
$InfoKomik2 = new CetakInfoKomik();
echo $InfoKomik2->cetak($Komik2);
 ?>
