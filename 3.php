<?php

function cycleShiftRight(array $arr): array
{
    if (empty($arr)) {
        return [];
    }

    $last = array_pop($arr);
    array_unshift($arr, $last);

    return $arr;
}

var_dump(cycleShiftRight([1, 2, 3, 4, 5]));
