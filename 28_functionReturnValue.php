<?php
function sum(int $fisrt, int $second): int
{
    $total = $fisrt + $second;
    return $total;
}
$result = sum(10, 10);
var_dump($result);

function getFinalValue(int $value): string
{
    if($value >= 80){
        return "A";
    }elseif($value >= 70){
        return "B";
    }elseif($value >= 60){
        return "C";
    }elseif($value >= 50){
        return "D";
    }else{
        return "E";
    }

    echo "Ups" . PHP_EOL;

}

$nilai = getFinalValue(9);
var_dump($nilai);