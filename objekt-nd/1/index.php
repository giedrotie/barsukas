<?php

echo '<pre>';
require __DIR__ . '/Kibiras1.php';


$kibirasA = new Kibiras1;
$kibirasB = new Kibiras1;

_d($kibirasA->kiekPririnktaAkmenu(), 'A');
_d($kibirasB->kiekPririnktaAkmenu(), 'B');


var_dump($kibirasA);
echo '<br>';
var_dump($kibirasA);
echo '<br>';
echo '<br>---------------------<br>';
$kibirasA->prideti1Akmeni();
$kibirasA->prideti1Akmeni();
$kibirasB->prideti1Akmeni();

_d($kibirasA->kiekPririnktaAkmenu(), 'A');
_d($kibirasB->kiekPririnktaAkmenu(), 'B');

var_dump($kibirasA);
echo '<br>';
var_dump($kibirasB);
echo '<br>';

echo '<br>---------------------<br>';

$kibirasA->pridetiDaugAkmenu(10);
$kibirasB->pridetiDaugAkmenu(100);

var_dump($kibirasA);
echo '<br>';
var_dump($kibirasB);
echo '<br>';
echo '<br>---------------------<br>';

$kibirasA->pridetiDaugAkmenu(10);
$kibirasB->pridetiDaugAkmenu(100);
$kibirasA->kiekPririnktaAkmenu();
$kibirasB->kiekPririnktaAkmenu();

var_dump($kibirasA);
echo '<br>';
var_dump($kibirasB);
echo '<br>';
