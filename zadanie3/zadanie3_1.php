<?php
$grades = [
    'Студент 1' => 4.5,
    'Студент 2' => 3.8,
    'Студент 3' => 5.0,
    'Студент 4' => 4.2,
    'Студент 5' => 3.9,
];
function calculateAverage($grades) {
    $sum = array_sum($grades);
    $count = count($grades);
    if ($count === 0) {
        return 0;
    }
    return $sum / $count;
}
$average = calculateAverage($grades);
echo "Средняя оценка всех студентов: " . number_format($average, 2);
