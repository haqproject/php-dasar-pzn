<?php 
$name = "Naufal";
$nilai = "A";

switch($nilai){
    case "A":
        echo "Selamat $name, anda lulus dengan nilai terbaik!" . PHP_EOL;
        break;
    case "B":
    case "C":
        echo "Selamat $name, Anda Lulus" . PHP_EOL;
        break;
    case "D":
        echo "Mohon maaf $name, Anda Tidak lulus" . PHP_EOL;
        break;
    default:
        echo "Mungkin anda harus mengulang" . PHP_EOL;
}