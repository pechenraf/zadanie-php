<?php
function findThirdMax($arr) {
    $arr = array_unique($arr);
    rsort($arr);
    if (count($arr) < 3) {
        return null; 
    }
    return $arr[2];
}
$array = [3, 2, 1, 5, 6, 4, 5, 3];
$thirdMax = findThirdMax($array);

if ($thirdMax !== null) {
    echo "Третье максимальное число: " . $thirdMax;
} else {
    echo "Недостаточно уникальных элементов в массиве.";
}

