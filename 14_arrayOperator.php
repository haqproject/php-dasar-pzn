<?php
$first = array(
    "firstName" => "Naufal",
    "lastName" => "Al Haq"
);

$second = array(
    "lastName" => "Al Haq",
    "firstName" => "Naufal"
);
//union menggabungkan array
$third = $first + $second; 
var_dump($third);

//Equality menyamakan 
var_dump($first == $second);

//Identity menyamakan key value dan posisi sama
var_dump($first === $second);
