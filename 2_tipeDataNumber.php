<?php
// Tipe data integer
echo "Desimal : ";
var_dump(1234);

echo "Octal : ";
var_dump(01234);

echo "Hexadecimal : ";
var_dump(0x1A);

echo "Binary : ";
var_dump(0b111111);

echo "Underscore in number : ";
var_dump(1_500_000);

// Tipe data float
echo "Floating : ";
var_dump(12.34);

echo "Floating with E notation : 12.5e3 ";
var_dump(12.5e3);

echo "Floating with E notation - : -12.5e3 ";
var_dump(-12.5e3);

echo "Floating with Underscore : ";
var_dump(12_500.50);

// integer overflow 
echo "Integer overflow 32 bit : ";
var_dump(21474838647);

echo "Integer overflow 64 bit : ";
var_dump(9223372036854775807);

?>