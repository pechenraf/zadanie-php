<?php

function mostRecent($text) {
    if (strlen($text) > 1000) {
        return "Текст слишком длинный. Максимум 1000 символов.";
    }
    
    $words = preg_split('/\W+/', strtolower($text), -1, PREG_SPLIT_NO_EMPTY);
    
    $wordCount = array();
    
    foreach ($words as $word) {
        if (array_key_exists($word, $wordCount)) {
            $wordCount[$word]++;
        } else {
            $wordCount[$word] = 1;
        }
    }
    
    $mostFrequentWord = '';
    $maxCount = 0;
    
    foreach ($wordCount as $word => $count) {
        if ($count > $maxCount) {
            $maxCount = $count;
            $mostFrequentWord = $word;
        }
    }
    return $mostFrequentWord;
}
$text = "Пример текста, в котором слова повторяются. Слова текста составлены случайно, но все же они повторяются. Как минимум 3 слова из текста уже повторились(одно слово повторилось 2 раза)";
echo mostRecent($text);
