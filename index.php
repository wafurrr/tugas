<?php 

echo "Hewan-Hewan";

class Kucing{
	public $nama, $jumlah_kaki, $bisa_terbang, $suara;

}

$Kucing = new Kucing;
$Kucing->nama = "Keke";
$Kucing->jumlah_kaki = "4";
$Kucing->bisa_terbang = "tidak";
$Kucing->suara = "meaww meeaww";

echo "Kucing <br>";
echo " Nama: $Kucing->nama";
echo "<br>";
echo " Jumlah kaki: $Kucing->jumlah_kaki";
echo "<br>";
echo " Bisa terbang: $Kucing->bisa_terbang";
echo "<br>";
echo " Suara: $Kucing->suara";
echo "<hr>"; 