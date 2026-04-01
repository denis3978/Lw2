<?php

$users = [
    ["name" => "Ivan", "age" => 25],
    ["name" => "Petr", "age" => 17],
    ["name" => "Olga", "age" => 30]
];

echo "Список пользователей:\n";
foreach ($users as $user) {
    echo "{$user['name']} - {$user['age']} лет\n";
}

$sum_age = 0;
$count = count($users);

foreach ($users as $user) {
    $sum_age += $user['age'];
}

$average_age = $sum_age / $count;

echo "\nСумма возрастов: $sum_age\n";
echo "Количество пользователей: $count\n";
echo "Средний возраст: " . round($average_age, 2) . " лет\n";
