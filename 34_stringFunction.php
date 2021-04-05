<?php

$string = "Naufal Arinal World";
//menambahkan garis miring sebelum huruf w
echo addcslashes($string, "W") . "\n";
//mengubah string Ascii karakter to hexadecimal value
$alamat = "Parhon";
echo bin2hex($alamat) . PHP_EOL;
echo pack("H*", bin2hex($alamat)) . PHP_EOL;

//mengubah string menjadi array dengan ekplode
print_r (explode(" ", $string));
//implode menyatukan array menjadi string
$nama = array("Muhammad", "Ibrahim", "Nashrullah");
print_r(implode(" ", $nama));
