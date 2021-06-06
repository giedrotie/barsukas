<?php
/*
3.	3.	Sugeneruokite masyvą, kurio reikšmės atsitiktinės raidės 
A, B, C ir D, o ilgis 200. Suskaičiuokite kiek yra kiekvienos raidės.
*/
echo '<pre>';
echo '<br>','--------- 3 ---------', '<br>','<br>';
$pradinesReiksmes = ['A', 'B', 'C', 'D'];
$raidziuMasyvas =[];
$raidziuMasyvoIlgis = 20;
$aKiekis = 0;
$bKiekis = 0;
$cKiekis = 0;
$dKiekis = 0;

for ($i=0; $i < $raidziuMasyvoIlgis ; $i++) { 
    $raidziuMasyvas[$i]= chr(rand(65, 68));
}
print_r($raidziuMasyvas);

foreach ($raidziuMasyvas as $indeksas => $value) {
    if($value === 'A') {
        $aKiekis++;
    } elseif($value === 'B') {
        $bKiekis++;
    } elseif($value === 'C') {
        $cKiekis++;
    } else {
        $dKiekis++;
    }
}
echo "Raide 'A' panaudota $aKiekis kartus,<br>Raide 'B' panaudota $bKiekis kartus,<br>Raide 'C' panaudota $cKiekis kartus,<br>Raide 'D' panaudota $dKiekis kartus.<br>";




// echo '<br>','--------- 3 -vitos var--------', '<br>','<br>';
// $raides = ['A', 'B', 'C', 'D'];
// $raidziuMasyvas = array_fill(0, 20, 0);
// $a = 0;
// $b = 0;
// $c = 0;
// $d = 0;
// foreach ($raidziuMasyvas as $key => &$value) {
//     $value = $raides[rand(0, count($raides)-1)];
//     if ($value === 'A') {
//          $a++;
//     } elseif ($value === 'B') {
//          $b++;
//     } elseif ($value === 'C') {
//         $c++;
//     } else {
//         $d++;
//     }
// }
// unset($value);
// print_r($raidziuMasyvas);
// echo "Raide 'A' panaudota $a kartus,<br>Raide 'B' panaudota $b kartus,<br>Raide 'C' panaudota $c kartus,<br>Raide 'D' panaudota $d kartus.<br>";

/*
4.	Išrūšiuokite 3 uždavinio masyvą pagal abecėlę.
*/

echo '<br>','--------- 4 ---------', '<br>','<br>';
array_multisort($raidziuMasyvas);
print_r($raidziuMasyvas);

/*
5.	Sugeneruokite 3 masyvus pagal 3 uždavinio sąlygą. 
Sudėkite masyvus, sudėdami atitinkamas reikšmes. 
Paskaičiuokite kiek unikalių (po vieną, nesikartojančių) 
reikšmių ir kiek unikalių kombinacijų gavote.
*/


echo '<br>','--------- 5 ---------', '<br>','<br>';// nepadariau!??????????????
$pradinesRaides = ['A', 'B', 'C', 'D'];
$raidziuMasyvas5_1 = array_fill(0, 10, 0);
$raidziuMasyvas5_2 = array_fill(0, 10, 0);
$raidziuMasyvas5_3 = array_fill(0, 10, 0);
$resultMasyvas=[];
$unikaliuReiksmiuKiekis = 0;
echo "===========================";

echo "===========================";
foreach ($raidziuMasyvas5_1 as $index => &$value) {
    $value = $pradinesRaides[rand(0, count($pradinesRaides) - 1)];
}
foreach ($raidziuMasyvas5_2 as $index => &$value) {
    $value = $pradinesRaides[rand(0, count($pradinesRaides) - 1)];
}
foreach ($raidziuMasyvas5_3 as $index => &$value) {
    $value = $pradinesRaides[rand(0, count($pradinesRaides) - 1)];
}
unset($value);

print_r($raidziuMasyvas5_1);
print_r($raidziuMasyvas5_2);
print_r($raidziuMasyvas5_3);

foreach (range(0,count($raidziuMasyvas5_1)-1) as $i)
{
  array_push($resultMasyvas,$raidziuMasyvas5_1[$i] . $raidziuMasyvas5_2[$i] . $raidziuMasyvas5_3[$i]);
}
echo 'Masyvas su naujom reiksmem:<br>';
print_r($resultMasyvas);

$unikaliuReiksmiuMasyvas = array_unique($resultMasyvas);
echo 'Unikaliu reiksmiu masyvas:<br>';
print_r($unikaliuReiksmiuMasyvas);

$pasikartojanciuReiksmiuKiekis = count($resultMasyvas) - count($unikaliuReiksmiuMasyvas);

$unikaliuReiksmiuKiekis = count($resultMasyvas) - $pasikartojanciuReiksmiuKiekis ;

 echo "Unikaliu reiksmiu kiekis: $unikaliuReiksmiuKiekis.<br>";

