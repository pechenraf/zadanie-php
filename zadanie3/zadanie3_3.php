<?php
$students = [ 
    ['name' => 'Маша', 'age' => 22, 'grades' => [5, 4, 5]],
    ['name' => 'Витя', 'age' => 23, 'grades' => [3, 4, 2]],
    ['name' => 'Олег', 'age' => 21, 'grades' => [4, 5, 5]], 
];
$result = [];
foreach ($students as $student) {
    $average = array_sum($student['grades']) / count($student['grades']); 
    if ($average >= 4) {
        $result[] = sprintf("%s: %.2f", $student['name'], $average);
    }
}
echo implode(' ', $result);

