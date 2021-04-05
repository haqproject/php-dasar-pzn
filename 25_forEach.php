<?php
$pelanggan = [
    "Inal", "Ujang", "Amin", "Nani", "Tuti"
];
echo "Mengeluarkan Array dengan for" . "\n";
//tanpa foreach
for($a = 0; $a < count($pelanggan); $a++){
    echo "Nama pelanggan $a = $pelanggan[$a]" . PHP_EOL;
}
echo "\n";

echo "Mengeluarkan array dengan Foreach" . "\n" ;
//for each digunakan untuk mempermudah dalam mengeluarkan array
foreach ($pelanggan as $pel){
    echo "$pel" . "\n";
}
echo "\n";

echo "Foreach dengan index" . "\n";
//forecah dengan index 
foreach($pelanggan as $index => $value){
    echo "Nama pelanggan $index = $value" . PHP_EOL;
}
echo "\n";

echo "Foreach dengan array map" . "\n";
$addres = array(
    "namaKampung" => "Parakanhonje",
    "namaDesa" => "Sukamaju Kaler",
    "namaKec" => "Indihiang",
    "namaKota" => "Tasikmalaya"
);

foreach ($addres as $alamat => $value ){
    echo "$alamat = $value" . "\n" ;
}