<?php

function findMaxInMatrix(array $matrix): int
{
    $max = $matrix[0][0];

    foreach ($matrix as $row) {
        foreach ($row as $value) {
            if ($value > $max) {
                $max = $value;
            }
        }
    }

    return $max;
}

$matrix = [
    [1, 5, 3],
    [8, 2, 9],
    [4, 7, 6]
];

var_dump(findMaxInMatrix($matrix));
