<?php

function calculateAverageAge(array $users): float
{
    $sum = 0;
    $count = count($users);

    foreach ($users as $user) {
        $sum += $user['age'];
    }

    return $sum / $count;
}

$users = [
    ['name' => 'Ivan', 'age' => 25],
    ['name' => 'Petr', 'age' => 17],
    ['name' => 'Olga', 'age' => 30]
];

var_dump(calculateAverageAge($users));
