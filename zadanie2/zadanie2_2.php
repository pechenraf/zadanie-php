<?php
$primeNumbers = [];
for ($num = 2; $num <= 100; $num++) {
    $isPrime = true;
    for ($i = 2; $i <= sqrt($num); $i++) {
        if ($num % $i == 0) {
            $isPrime = false;
            break;
        }
    }
    if ($isPrime) {
        $primeNumbers[] = $num;
    }
}
echo "Простые числа от 1 до 100: " . implode(", ", $primeNumbers);
