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