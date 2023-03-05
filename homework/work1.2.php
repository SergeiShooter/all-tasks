<?php
const PICTURE = '80'; // кол- во картин
const FLOM = '23'; // фломастер
const PENCIL = '40'; //карандаш
$kras = PICTURE - FLOM - PENCIL;
echo "Количество рисунков выполненных красками равно $kras";