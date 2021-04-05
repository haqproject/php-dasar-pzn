<?php
// anonymous function (fungsi anonim) adalah fungsi yang tidak terdapat nama fungsi padanya. Sebagai contoh, di bawah ini
function sayGoodBy(string $name, $filter){
    $finalName = $filter($name);
    echo "Good By $finalName" . PHP_EOL;
}

sayGoodBy("Naufal", function (string $name): string{
    return strtoupper($name);
});

$filterFunction = function (string $name): string {
    return strtoupper($name);
};

sayGoodBy("Naufal", $filterFunction);

$sayHello = function(string $name) {
    echo "Hello $name" .PHP_EOL;
};

$sayHello("opal");

//mengakses variable global agar bisa dipakai di anonymous function
$firstName = "Naufal";
$lastName = "Ujang";

$sayName = function () use($firstName, $lastName) {
    echo "Hello $firstName $lastName" . PHP_EOL;
};

$sayName();