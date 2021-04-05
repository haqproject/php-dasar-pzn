<?php 
$jk = "Wanita";
$hi = null;
if($jk == "Pria"){
    $hi = "Hai bro!";
}else{
    $hi = "Hai nona!";
}

echo $hi . PHP_EOL;

//sintak diatas bisa kita ringkas menggunakan ternary operator
$hi = $jk == "Pria" ? "Hi Bro" : "Hi Nona";
echo $hi . PHP_EOL;