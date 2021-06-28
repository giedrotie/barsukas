<?php

echo '<pre>';
require __DIR__ . '/Pinigine.php';


$pinigine = new Pinigine;
echo '<br>';
$pinigine->skaiciuoti();
echo '<br>';

$pinigine->ideti(12);

var_dump($pinigine);
echo '<br>';


$pinigine->ideti(1);
$pinigine->ideti(1.5);
var_dump($pinigine);
echo '<br>';


// $kiek = $pinigine->skaiciuoti();
// echo $kiek;
// echo '<br>';
$pinigine->skaiciuoti();
