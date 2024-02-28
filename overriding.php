<?php
class Produk
{
    public $judul, $harga, $penulis,
        $penerbit;

    public function __construct(
        $judul = "judul",
        $penulis = "penulis",
        $penerbit = "penerbit",
        $harga = 0,
    ) {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        
    }

    public function getLabel()
    {
        return "$this->penulis, $this->penerbit";
    }


    public function getInfoProduk()
    {
        $str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";

        return $str;
    }
}

class Komik extends Produk
{
    public $jmlHalaman;
    public function __construct(
        $judul = "judul",
        $penulis = "penulis",
        $penerbit = "penerbit",
        $harga = 0,
        $jmlHalaman = 0
    ) {
        parent::__construct($judul, $penulis, $penerbit, $harga, $jmlHalaman);
        $this->jmlHalaman = $jmlHalaman;
    }
    public function getInfoProduk()
    {
        // parent:: untuk override
        $str = "Komik :" . parent::getInfoProduk() . "- {$this->jmlHalaman} Halaman.";
        return $str;
    }
}

class Game extends Produk
{
    public $waktuMain;
    public function __construct(
        $judul = "judul",
        $penulis = "penulis",
        $penerbit = "penerbit",
        $harga = 0,
        $waktuMain = 0
    ) {
        parent::__construct($judul, $penulis, $penerbit, $harga, $waktuMain);
        $this->waktuMain = $waktuMain;
    }
    public function getInfoProduk()
    {
        $str = "Game : " . parent::getInfoProduk() . "  ~ {$this->waktuMain} Jam.";
        return $str;
    }
}

class CetakInfo
{
    public function cetak(Produk $produk)
    {
        $str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
        return $str;
    }
}


$produk1 = new Komik( "Naruto", "Masasi Kisimoto", "Shonen Jump", 30000, 100 );
$produk2 = new Game( "Uncharted", "Neil Druckmann", "Sony Computer", 30000, 40 );


echo $produk1->getInfoProduk();
echo $produk2->getInfoProduk();
