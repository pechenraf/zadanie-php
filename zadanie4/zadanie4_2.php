<?php

function isPerfectNumber($number) {
    if ($number <= 0) return false;
    $sumOfDivisors = 0;
    for ($i = 1; $i < $number; $i++) {
        if ($number % $i == 0) {
            $sumOfDivisors += $i;
        }
    }
    return $sumOfDivisors === $number;
}

function findPerfectNumbers($array) {
    $perfectNumbers = [];

    foreach ($array as $number) {
        if (isPerfectNumber($number)) {
            $perfectNumbers[] = $number;
        }
    }

    return $perfectNumbers;
}

$numbers = [6, 28, 12, 496, 20, 8128, 25];
$perfectNumbers = findPerfectNumbers($numbers);
echo "Идеальные числа в массиве: " . implode(', ', $perfectNumbers);

