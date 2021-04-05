<?php
$data = array(1,2,3,4,5,6,7,8,9,10);
//arraymap mengubah semua data array dengan callback
var_dump(array_map(fn($data) => $data * 2, $data));
//reverse sort descending data array
rsort($data);
var_dump($data);

$nama = array(
    "depan" => "Naufal",
    "tengah" => "Arinal",
    "belakang" => "Haq"
);
var_dump($nama);
var_dump(array_keys($nama));
var_dump(array_values($nama));
print_r($nama);

