<?php
$name = "Naufal"; //global scope

function sayName(){
    global $name; //tambahkan kata global untuk mengakses variable global (diluar function)
    echo "Hello $name" . "\n";

    echo $GLOBALS["name"] . PHP_EOL; // cara mengakses variable global menggunakan super globals
}

sayName();