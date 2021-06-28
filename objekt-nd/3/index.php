<?php

require __DIR__ . '/Kibiras2.php';


$kibirasA = new Kibiras2;
$kibirasB = new Kibiras2;

_d($kibirasA->kiekPririnktaAkmenu(), 'A');
_d($kibirasB->kiekPririnktaAkmenu(), 'B');
_d(Kibiras2::kiekVisoPririnktaAkmenu(), 'VISO');

$kibirasA->prideti1Akmeni();
$kibirasB->prideti1Akmeni();

_d($kibirasA->kiekPririnktaAkmenu(), 'A');
_d($kibirasB->kiekPririnktaAkmenu(), 'B');
_d(Kibiras2::kiekVisoPririnktaAkmenu(), 'VISO');


$kibirasB->pridetiDaugAkmenu(10);
$kibirasA->pridetiDaugAkmenu(3);

_d($kibirasA->kiekPririnktaAkmenu(), 'A');
_d($kibirasB->kiekPririnktaAkmenu(), 'B');
_d(Kibiras2::kiekVisoPririnktaAkmenu(), 'VISO');