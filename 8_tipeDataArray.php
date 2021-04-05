<?php
$daftarNilai = array(70, 80.5, 77, 88, 60, 75);
var_dump($daftarNilai);

$pasienCovid = [ "Ujang", "Dede", "Ani", "Jajang"];
var_dump($pasienCovid);
var_dump($pasienCovid[3]);
//menghitung jumlah array
var_dump(count($pasienCovid));

//mengganti array dengan index no 2
$pasienCovid[2] = "Budi";
var_dump($pasienCovid);

//menambah array
$pasienCovid[] = "Dian";
var_dump($pasienCovid);

//menghapus index data array
unset($pasienCovid[4]);
var_dump($pasienCovid);

$pasienCovid[] = "Ucu";
var_dump($pasienCovid);

//array map 
$pelanggan = array(
    "nama" => "Naufal",
    "noHp" => 2932012,
    "alamat" => "Parhon"
);

var_dump($pelanggan);

//array nested (array dalam array)
$pelanggan = [
    "nama" => "Oni",
    "noHp" => +6238923232,
    "alamat" => [
        "kelurahan" => "Sukamaju Kaler",
        "kecamatan" => "Indihiang"
    ]
];

var_dump($pelanggan["alamat"]["kelurahan"]);


?>