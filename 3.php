<?php

echo "Введите элементы массива через пробел: ";
$input = trim(fgets(STDIN));

if ($input == "") {
    $arr = [1, 2, 3, 4, 5];
    echo "Используем массив по умолчанию: ";
    print_r($arr);
} else {
    $arr = array_map('intval', explode(' ', $input));
}

echo "\nИсходный массив:\n";
echo implode(", ", $arr) . "\n";

if (count($arr) > 0) {
    $last_element = array_pop($arr);
    array_unshift($arr, $last_element);
}

echo "Массив после сдвига вправо:\n";
echo implode(", ", $arr) . "\n";
?>
