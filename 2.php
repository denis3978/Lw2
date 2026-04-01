<?php

$matrix = [
    [5, 8, 3],
    [12, 4, 7],
    [9, 2, 15]
];

echo "Матрица:\n";
foreach ($matrix as $row) {
    foreach ($row as $value) {
        echo str_pad($value, 4, " ", STR_PAD_LEFT);
    }
    echo "\n";
}

$max_value = $matrix[0][0];
$max_row = 0;
$max_col = 0;

for ($i = 0; $i < count($matrix); $i++) {
    for ($j = 0; $j < count($matrix[$i]); $j++) {
        if ($matrix[$i][$j] > $max_value) {
            $max_value = $matrix[$i][$j];
            $max_row = $i;
            $max_col = $j;
        }
    }
}

echo "\nМаксимальный элемент: $max_value\n";
echo "Позиция: строка " . ($max_row + 1) . ", столбец " . ($max_col + 1) . "\n";
