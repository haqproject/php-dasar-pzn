<?php
for($a = 1; $a <= 10; $a++){
    if($a % 2 == 0){
        continue; //continue digunakan untuk menghentikan perulangan sementara
    }
    echo "Perulangan ke-$a" . "\n";
}