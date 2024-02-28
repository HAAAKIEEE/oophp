<?php

// require 'Produk/InfoProduk.php';
// require 'Produk/Produk.php';
// require 'Produk/Game.php';
// require 'Produk/Komik.php';
// require 'Produk/CetakInfo.php';
// require 'Produk/User.php';
// require 'Service/User.php';


// function autoload($clas){

// }
//atau
spl_autoload_register( function ($class){
    
    //ekpolde untuk memecah directory nya menjadi array
    //App\Produk\User =["App","Produk", "User"];
    $class = explode('\\',$class);
    //ini untuk mengambil array yang terakhitr yaitu User dan di masukkan ke $class
    $class = end($class);
    require_once  'Produk/'.$class.'.php';

});
spl_autoload_register( function ($class){
    $class = explode('\\',$class);
    $class = end($class);
    require_once  'Service/'.$class.'.php';

});