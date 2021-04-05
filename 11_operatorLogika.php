<?php
echo "Operator Logika \n";
echo "-AND (&&)- \n";
echo "T && T = ";
var_dump(TRUE && TRUE);
echo "T && F = ";
var_dump(TRUE && FALSE);
echo "F && T = ";
var_dump(FALSE && TRUE);
echo "F && F = ";
var_dump(FALSE && FALSE);

echo "-OR (||)- \n";
echo "T || T = ";
var_dump(TRUE || TRUE);
echo "T || F = ";
var_dump(TRUE || FALSE);
echo "F || T = ";
var_dump(FALSE || TRUE);
echo "F || F = ";
var_dump(FALSE || FALSE);

echo "-NOT (!)- \n";
echo " !T = ";
var_dump(!TRUE);
echo " !F = ";
var_dump(!FALSE);

echo "-XOR (xor)- \n";
echo "T xor T = ";
var_dump(TRUE xor TRUE);
echo "T xor F = ";
var_dump(TRUE xor FALSE);
echo "F xor T = ";
var_dump(FALSE xor TRUE);
echo "F xor F = ";
var_dump(FALSE xor FALSE);