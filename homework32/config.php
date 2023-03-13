<?php
$host = 'localhost';
$mysql  = new mysqli($host, 'root', '', 'ls', '3306');
if (mysqli_connect_errno()) {
    echo 'Connection error: ' . mysqli_connect_error();
    die;