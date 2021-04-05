<?php
$nilai = 50;
$absen = 80;

if ($nilai >= 90 && $absen >= 90) {
    echo "Selamat Anda mendapat nilai A" . PHP_EOL;
}
elseif ($nilai >= 80 && $absen >= 80){
    echo "Anda mendapat nilai B" . PHP_EOL;
}elseif ($nilai >= 70 && $absen >= 70){
    echo "Anda mendapat nilai C" . PHP_EOL;
}else{
    echo "Anda TIDAK LULUS!" . PHP_EOL;
}