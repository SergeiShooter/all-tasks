<?php
require "src/functions.php";

echo task4();
echo '<br>';
$data = json_decode(file_get_contents('users.json'), true);
//var_dump($data);

$result = [];
$age_sum = 0;
foreach ($data as $name) {
        if (isset($result[$name['name']])) {
            $result[$name['name']] += 1;
        } else{
            $result[$name['name']] = 1;
        }
        $age_sum = $age_sum + $name['age'];
    }
var_dump($result);
echo 'Средний возраст равен ' . $age_sum/ count($data);