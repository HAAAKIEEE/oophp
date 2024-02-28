<?php
interface InfoProduk{
    public function getInfoProduk();
}
abstract class Produk
{
    protected $judul,  $penulis,
        $penerbit, $harga,$diskon = 0;

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
    public function setJudul($judul)
    {
        $this->judul = $judul;
    }
    public function getJudul()
    {
        return $this->judul;
    }

    public function setPenulis($penulis)
    {
        $this->penulis = $penulis;
    }
    public function getPenulis()
    {
        return $this->penulis;
    }
    public function setPenerbit($penerbit)
    {
        $this->penerbit = $penerbit;
    }
    public function getPenerbit()
    {
        return $this->penerbit;
    }
    public function setHarga($harga)
    {
        $this->harga = $harga;
    }
    public function getHarga()
    {
        return $this->harga - ($this->harga * $this->diskon / 100);
    }
    public function setDiskon($diskon)
    {
        $this->diskon = $diskon;
    }
    public function getDiskon()
    {
        return $this->diskon;
    }
    public function getLabel()
    {
        return "$this->penulis, $this->penerbit";
    }


   abstract  public function getInfo();
  
}

class Komik extends Produk implements InfoProduk
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
    public function getInfo()
    {
        $str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";

        return $str;
    }
    public function getInfoProduk()
    {
        // parent:: untuk override
        $str = "Komik :" . $this->getInfo() . "- {$this->jmlHalaman} Halaman.";
        return $str;
    }
}

class Game extends Produk implements InfoProduk
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
    public function getInfo()
    {
        $str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";

        return $str;
    }

    public function getInfoProduk()
    {
        $str = "Game : " . $this->getInfo()
        . "  ~ {$this->waktuMain} Jam.";
        return $str;
    }
}

class CetakInfo
{
    public $daftarProduk = [];

    public function tambahProduk(Produk $produk){
        $this->daftarProduk [] = $produk;
    }

    public function cetak()
    {
        $str = "Daftar Produk <br>";
        foreach ($this->daftarProduk as $p){
            $str .= " - {$p->getInfoProduk()} <br>";
        }
        return $str;
    }
}


$produk1 = new Komik("Naruto", "Masasi Kisimoto", "Shonen Jump", 30000, 100);
$produk2 = new Game("Uncharted", "Neil Druckmann", "Sony Computer", 250000, 40);

$cetakProduk = new CetakInfo();

$cetakProduk->tambahProduk ($produk1);
$cetakProduk->tambahProduk ($produk2);

echo $cetakProduk->cetak();