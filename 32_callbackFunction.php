<?php
//callback function : mekanisme memanggil function lainnya sesuai yang diberikan argumen
function sayHello(string $name, $format) //$format merupakan callback function 
{
    $newFormat = $format($name);
    echo "Hello $newFormat" . PHP_EOL;
}

sayHello("Naufal", "strtolower");

//menggunakan callback function
function sayHore(string $nama, callable $filter){
    $newNama = call_user_func($filter, $nama);
    echo "Hore $newNama" . PHP_EOL;
}

sayHore("Naufal", "strtoupper");
sayHore("Naufal", "strtolower");
sayHore("Eko", function ($nama): string{
    return strtoupper($nama);
});

sayHore("Naufal", fn($nama) => strtoupper($nama));