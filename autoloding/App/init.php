<?php

// require 'Produk/InfoProduk.php';
// require 'Produk/Produk.php';
// require 'Produk/Game.php';
// require 'Produk/Komik.php';
// require 'Produk/CetakInfo.php';

// function autoload($clas){

// }
//atau
spl_autoload_register( function ($clas){
    require_once  'Produk/'.$clas.'.php';
});