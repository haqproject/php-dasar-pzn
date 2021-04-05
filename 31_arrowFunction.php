<?php
//arrow function = anonymous function hanya saja penulisan nya lebih singkat
//arror function diperkenalkan pada php versi 7.4
$firstName = "Naufal";
$lastName = "Al Haq";

$anonymousFunction = function () use ($firstName, $lastName): string{
    return "Hello $firstName $lastName" . PHP_EOL;
};

$arrowFunction = fn() => "Hello $firstName $lastName" . PHP_EOL;

echo $anonymousFunction();
echo $arrowFunction();