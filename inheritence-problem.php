<?php
class Produk
{
    public $judul, $harga, $penulis,
     $penerbit,$jmlHalaman,$waktuMain,$tipe;

     public function __construct($judul="judul",
     $penulis="penulis",$penerbit="penerbit",$harga=0,
     $jmlHalaman=0,$waktuMain=0){
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        $this->jmlHalaman = $jmlHalaman;
        $this->waktuMain = $waktuMain;

    }

     public function getLabel(){
        return "$this->penulis, $this->penerbit";
     }


     public function getInfoProduk(){
        $str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
  
        return $str;
     }
}

class Komik extends Produk{
    public function getInfoProduk(){
        $str = "Komik : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga}) - {$this->jmlHalaman} Halaman.";
        return $str;
    }

}

class Game extends Produk{
    public function getInfoProduk(){
        $str = "Game : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga})  ~ {$this->waktuMain} Jam.";
        return $str;
    }

}

class CetakInfo{
    public function cetak(Produk $produk){
        $str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
        return $str;
    }
}


$produk1 = new Komik("Naruto","Masasi Kisimoto","Shonen Jump",30000,100,null);
$produk2 = new Game("Uncharted","Neil Druckmann","Sony Computer",30000,null,40);


echo $produk1->getInfoProduk();

echo $produk2->getInfoProduk();