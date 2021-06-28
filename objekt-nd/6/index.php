<?php
echo '<pre>';
// 6.	Sukurti klasę Stikline. Sukurti privačią savybę turis ir kiekis. Parašyti metodą ipilti($kiekis), kuris keistų savybę kiekis. Jeigu stiklinės tūris yra mažesnis nei pilamas kiekis- kiekis netelpa ir būna lygus tūriui. Parašyti metodą ispilti(), kuris grąžiną kiekį. Pilant išpilamas visas kiekis, tas kas netelpa, nuteka per stalo viršų. Sukurti tris stiklinės objektus su tūriais: 200, 150, 100. Didžiausią pripilti pilną ir tada ją ispilti į mažesnę stiklinę, o mažesnę į dar mažesnę.


include __DIR__. '/./Stikline.php';

$stikline1 = new Stikline(200);

$stikline2 = new Stikline(150);

$stikline3 = new Stikline(100);


echo '<br>---------------------<br>';
$stikline1->ipilti(200);
_d($stikline1, 'stikline1 ipilti 200');
$stikline2->ipilti($stikline1->ispilti(200));
_d($stikline2, 'stikline2 ipilti 200');
$stikline3->ipilti($stikline2->ispilti(150));
_d($stikline3, 'stikline2 ipilti 150');




_d($stikline1, 'stikline1');
_d($stikline2, 'stikline2');
_d($stikline3, 'stikline3');