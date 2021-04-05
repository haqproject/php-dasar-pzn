<?php 
//tipe data null digunakan ketika kita mau mengosongkan sebuah variable

$name = null;
$age = null;
$age = 22;
$name = "Naufal";
//unset($name) unset digunakan untuk menghapus sebuah variable

echo "Apakah variable Name is null? \n";
var_dump(is_null($name));

$contoh = 22;

var_dump(isset($contoh));
//isset digunakan untuk mengecek apakah sebuah variable itu ada dan tidak bernilai null


?>