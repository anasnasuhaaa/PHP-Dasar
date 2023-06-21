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
echo "This is using Loop" . PHP_EOL;
echo factorialloop(6) . PHP_EOL;

// Recursive Factorial
function factorialrecursive(int $value): int
{
    if ($value == 1) {
        return 1;
    } else {
        return $value * factorialrecursive($value - 1);
    }
}

// Recursive Looping
function recursiveloop(int $value, int $limit)
{
    if ($value == $limit - 1) {
        echo "Selesai" . PHP_EOL;
    } else {
        echo "Loop ke-$value" . PHP_EOL;
        recursiveloop($value - 1, $limit + 0);
    }
}
echo "This is using Recursive Function" . PHP_EOL;
echo factorialrecursive(5) . PHP_EOL;

// Print 100 to 15
echo recursiveloop(100, 15);
