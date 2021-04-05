<?php
//Dot operator untuk menggabungkan string lebih baik menggunakan . daripada +
$name = "Naufal Arinal";
echo "Nama saya $name, saya seorang Programmer" . PHP_EOL;
echo "Usia = ". 22 . " tahun". PHP_EOL;  

//Konversi String ke Number atau sebaliknya
$stringToInt = (int)"1998";
var_dump($stringToInt);

$intToString = (string)100;
var_dump($intToString);

$floatToString = (string)12.5;
var_dump($floatToString);

$a = (int)"9887";
var_dump($a);

//Mengakses data tiap karakter
$nama = "Naufal";
echo $nama[0] . PHP_EOL;
echo $nama[1] . PHP_EOL;
echo $nama[2] . PHP_EOL;
echo $nama[3] . PHP_EOL;
echo $nama[4] . PHP_EOL;
echo $nama[5] . PHP_EOL;

//curly base
$var = "var";
echo "This is {$var}s" . PHP_EOL;