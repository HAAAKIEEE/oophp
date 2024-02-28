<?php
class Produk
{
    public $judul="judul", $harga=0, $penulis="penulis",
     $penerbit="penerbit";


     public function getLabel(){
        return "$this->penulis, $this->penerbit";
     }
}

// $produk1 = new Produk();
// $produk1 ->judul="naruto";
// var_dump($produk1);

// $produk2 = new Produk();
// $produk2 ->judull = "uncherted";
// var_dump($produk2);


$produk3 = new Produk();
$produk3 ->judul="Naruto";
$produk3 ->penulis="Masasi Kisimoto";
$produk3 ->penerbit="Shonen Jump";
$produk3 ->harga=30000;

$produk4 = new Produk();
$produk4 ->judul="Uncharted";
$produk4 ->penulis="Neil Druckmann";
$produk4 ->penerbit="Sony Computer";
$produk4 ->harga=30000;

echo"Komik :".$produk3->getLabel();
echo "<br>";
echo"Game :".$produk4->getLabel();


