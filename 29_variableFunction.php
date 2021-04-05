<?php

function foo(){
    echo "Foo" . PHP_EOL;
}

function boo(){
    echo "Boo" . PHP_EOL;
}

$sayFoo = "foo";
$sayFoo();
$sayBoo = "boo";
$sayBoo();

function sayHello(string $name, $format) 
{
    $newFormat = $format($name);
    echo "Hello $newFormat" . PHP_EOL;
}

sayHello("Naufal", "strtolower");
$newName = "sayHello";
$newName("Naufal", "strtoupper");