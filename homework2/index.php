<?php
include "src/functions.php";

/**
Задание 2.1
 */
echo task1([1,2,3]);

/**
Задание 2.2
 */
echo '<br>';
echo task2('-', 1, 2, 3);
echo '<br>';

/**
 Задание 2.3
 */
echo '<br>';
echo task3 (9, 10);

/**
Задание 2.4
 */
echo '<br>';
date_default_timezone_set('UTC+3');
echo date("d.m.y H:i") . '<br>';

/**
Задание 2.5
 */
$str1 =  "Карл у Клары украл Кораллы";
$chars = 'К';
echo (str_replace($chars, " ", $str1)) . "<br>";
$str2 = "Две бутылки лимонада";
echo (str_replace('Две', 'Три', $str2));

/**
Задание 2.6
 */
echo '<br>';
file_put_contents('test.txt', '"Hello again!"');
test_file_open('test.txt');