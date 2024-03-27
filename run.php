<?php declare(strict_types=1);

require_once __DIR__ . '/vendor/autoload.php';

$array = ['ahoj1', 'Ahoj10', 'ahoj12', 'Ahoj2', 'ahoj3'];
$sorter = new Brilo\Sorter();

var_dump($sorter->sortArray($array));