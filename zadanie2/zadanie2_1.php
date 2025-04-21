<?php
$number = readline("Введите число для вычисления факториала: ");

if ($number < 0) {
    echo "Факториал отрицательного числа не существует.\n";
} else {
    $factorial = 1;
    $counter = 1;
    
    while ($counter <= $number) {
        $factorial *= $counter;
        $counter++;
    }

    echo "Факториал числа $number равен $factorial.\n";
}
