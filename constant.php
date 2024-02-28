<?php
// //  constan ini harus d luar kelas
// define('NAMA','Baihaqi');
// echo NAMA;
// echo " ";
// //  constan ini bisa d dalam kelas
// const UMUR = 32;
// echo UMUR;



// class Coba{
//     const UMUR = 32;
// }
 
// echo Coba::UMUR;

// majic const ada banyak lagi
// echo __DIR__;

class Coba{
    public $kelas =__CLASS__;
}
$obj = new Coba;
echo $obj->kelas;


