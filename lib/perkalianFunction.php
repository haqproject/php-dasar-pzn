<?php
function kali(int $value1, int $value2): int
{
    $total = $value1 * $value2;
    echo "$value1 * $value2 = $total" . PHP_EOL;
    return $total;
}