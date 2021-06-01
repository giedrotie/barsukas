<?php
/*
9.Panaudokite funkciją microtime(). Paskaičiuokite kiek sekundžių užtruks kodą:
$c = "10 bezdzioniu \n suvalge 20 bananu.";
Įvykdyti 1 milijoną kartų ir palyginkite kiek užtruks įvykdyti kodą: 
$c = '10 bezdzioniu \n suvalge 20 bananu.';
(Stringas viengubose ir dvigubose kabutėse)
*/

echo '<br>','<h3>--------- 9 ---------</h3>', '<br>','<br>';


$pradzia = microtime(true);
for ($i = 0; $i <1000000; $i++){
    $c = "10 bezdzioniu \n suvalge 20 bananu.";
}
$galas = microtime(true);
echo 'Su " " uzeme tiek laiko '.$galas - $pradzia . 's<br>';

$pradzia = microtime(true);
for ($i = 0; $i <1000000; $i++){
    $c = '10 bezdzioniu \n suvalge 20 bananu.';
}
$galas = microtime(true);
echo "Su ' ' uzeme tiek laiko ".$galas - $pradzia . "s";