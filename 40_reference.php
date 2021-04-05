<?php
/* Reference adalah mengakses variable yang sama dengan nama variable yang berbeda
Reference di PHP tidak sama dengan reference di bahasa pemrograman seperti C / C++ yang
memiliki fitur pointer
● Analogi Reference itu seperti file, jika variable adalah file, dan value nya adalah isi file nya, maka
reference adalah membuat shortcut (di Windows) atau alias (di Linux / Mac) terhadap file yang
sama
● Saat kita mengubah isi value dari reference, maka secara otomatis value variable aslinya pun
berubah
● Untuk membuat reference terhadap variable, kita bisa menggunakan karakter & 
*/

//asign by reference
$name = "naufal";

$otherName = &$name; // simbol & merupakan reference
$otherName = "Arinal";

echo $name . PHP_EOL;

//pass by reference
function increment(int &$value)
{
    $value++;
}
$counter = 1 ;
increment($counter);
echo $counter . PHP_EOL;

//returning by reference
function &getvalue()
{
    static $value;
    return $value;
}
$a = &getvalue();
$a = 200;

$b = &getvalue();
echo $b . PHP_EOL;
