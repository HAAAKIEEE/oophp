<?php
class Produk
{
    public $judul="judul", $harga=0, $penulis="penulis",
     $penerbit="penerbit";

     public function __construct($judul,$penulis,$penerbit,$harga){
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;

    }

     public function getLabel(){
        return "$this->penulis, $this->penerbit";
     }
}

class CetakInfo{
    public function cetak(Produk $produk){
        $str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
        return $str;
    }
}


$produk1 = new Produk("Naruto","Masasi Kisimoto","Shonen Jump",30000);
$produk2 = new Produk("Uncharted","Neil Druckmann","Sony Computer",30000);

echo"Komik :".$produk1->getLabel();
echo "<br>";
echo"Game :".$produk2->getLabel();


$inpoProduk1 = new CetakInfo();
echo $inpoProduk1->cetak($produk1);
