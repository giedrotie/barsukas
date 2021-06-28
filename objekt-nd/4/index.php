<?php

echo '<pre>';

require __DIR__ . '/Kibiras3.php';
require __DIR__ . '/KibirasNePo1.php';


$kibirasA = new KibirasNePo1;
$kibirasB = new Kibiras3;

_d($kibirasA->kiekPririnktaAkmenu(), 'A');
_d($kibirasB->kiekPririnktaAkmenu(), 'B');


var_dump($kibirasA);
echo '<br>';
var_dump($kibirasB);
echo '<br>';
echo '<br>---------+1------------<br>';
$kibirasA->prideti1Akmeni();
$kibirasB->prideti1Akmeni();

_d($kibirasA->kiekPririnktaAkmenu(), 'A');
_d($kibirasB->kiekPririnktaAkmenu(), 'B');

var_dump($kibirasA);
echo '<br>';
var_dump($kibirasB);
echo '<br>';

echo '<br>----------+1-----------<br>';
$kibirasA->prideti1Akmeni();
$kibirasB->prideti1Akmeni();

_d($kibirasA->kiekPririnktaAkmenu(), 'A');
_d($kibirasB->kiekPririnktaAkmenu(), 'B');

var_dump($kibirasA);
echo '<br>';
var_dump($kibirasB);
echo '<br>';

echo '<br>---------------------<br>';

