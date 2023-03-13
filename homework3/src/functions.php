<?php

function task4 ()
{
    $users = [];
    $names = ['Sasha', 'Yana', 'Dima', 'Kolya', 'Sergei'];
    for ($i = 0; $i < 50; $i++) {
        $user = [
            'id' => 'N' . $i,
            'name' => $names[array_rand($names)],
            'age' => mt_rand(18, 45)
        ];
        $users[] = $user;
    }

 echo   '<pre>';
print_r ($users);

file_put_contents("users.json", json_encode($users));

}

function task5 ()
{
    $data = json_decode(file_get_contents('users.json'), true);
    $result = [];
    $age_sum = 0;
    foreach ($data as $name) {
        if (isset($result[$name['name']])) {
            $result[$name['name']] += 1;
        } else {
            $result[$name['name']] = 1;
        }
        $age_sum = $age_sum + $name['age'];
    }
    print_r($result);
}

function task6 ()
{
    $data = json_decode(file_get_contents('users.json'), true);
    $age_sum = 0;
    foreach ($data as $name) {
        $age_sum = $age_sum + $name['age'];
    }
    echo 'Средний возраст равен ' . $age_sum/ count($data);

}