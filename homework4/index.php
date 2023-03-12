<?php
include 'src/iTariffe.php';
include 'src/iService.php';
include 'src/TariffAbs.php';
include 'src/TariffBasic.php';
include 'src/GPS.php';
include 'src/Driver.php';
include 'src/TariffHour.php';
include 'src/TariffStudent.php';

$tariff = new TariffStudent(5, 120);
$tariff->addService(new GPS(15));
$tariff->addService(new Driver(100));
echo $tariff->countPrice();