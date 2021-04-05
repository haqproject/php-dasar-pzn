<?php
/*
$data = array(
    
);

if(isset($data["action"])){
    $action = $data["action"];
}else{
    $action = "Nothing";
}

echo $action . PHP_EOL;

*/

//sintax diatas bisa diperpendek menggunakan null coalescing opertaor ??
$data = [
    "action" => "Berenang"
];
$action = $data["action"] ?? "Nothing";
echo $action . "\n";
