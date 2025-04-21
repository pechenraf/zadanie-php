<?php
function alphabeticalOrder($str) {
    $characters = str_split($str);
    sort($characters);
    return implode('', $characters);
}

$input = 'alphabetical';
$result = alphabeticalOrder($input);
echo $result;

