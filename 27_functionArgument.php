<?php
//function dengan argumen type declaration
function sum(int $fisrt, int $last){
    $total = $fisrt + $last;
    echo "Hasil dari $fisrt + $last = $total" . PHP_EOL;
}

sum(25, 25);
sum("35", "15");
sum(true, false);
//sum([],[]) jika argumen berisikan nilai aray maka function tidak bisa dijalankan akan terjadi error

//variable lenght Argumen list, membuat parameter yang bisa menerima banyak value simbol argumen list ... 
function sumALL(...$values){
    $total = 0;
    foreach ($values as $value){
        $total += $value;
    }

    echo "Hasil dari " . implode(" + ", $values) . " = $total" . "\n";

}
$nilai = array(1, 2, 3, 4, 5, 6, 7, 8, 9,);
sumALL(1,2,3,4,5);
sumALL(...$nilai);
