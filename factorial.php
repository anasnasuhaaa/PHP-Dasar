<?php

// Factorial Loop
function factorialloop(int $value): int
{
    $total = 1;
    for ($a = 1; $a <= $value; $a++) {
        $total *= $a;
    }
    return $total;
}
echo"This is using Loop".PHP_EOL;
echo factorialloop(6).PHP_EOL;

// Recursive Factorial
function factorialrecursive(int $value): int
{
    if ($value == 1) {
        return 1;
    }else{
        return $value * factorialrecursive($value-1);
    }
}
echo"This is using Recursive Function".PHP_EOL;
echo factorialrecursive(5);
