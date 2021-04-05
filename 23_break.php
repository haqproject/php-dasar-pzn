<?php
//menghentikan semua perulangan dengan break
$a = 1;
while(true){
    echo "Ini adalah while ke-$a" . "\n";
    $a++;
    if($a > 100){
        break;
    }
}