<?php
//Recursive function adalah kemampuan function memanggil function dirinya sendiri
function factorialLoop(int $value): int
{
    $total = 1;
    for ($i = 1; $i <= $value; $i++){
        $total = $total * $i;
    }
    return $total;
}

var_dump(factorialLoop(5));

// sekarang kita bandingkan jika menggunakan rekursive function
function factorialRekursiv(int $value): int
{
    if($value == 1){
        return 1;
    }else{
        return $value * factorialRekursiv($value-1);
    }
}
var_dump(factorialRekursiv(5));

//Jika recursive terlalu dalam, maka akan ada
// kemungkinan terjadi memory overflow, yaitu error

function loop(int $value){
    if ($value == 0){
        echo "Selesai" . PHP_EOL;
    }else{
        echo "Loop ke-$value" . PHP_EOL;
        loop($value-1);
    }
}
loop(3000000);

