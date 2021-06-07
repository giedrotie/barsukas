<?php

/*
1.	Sugeneruokite masyvą iš 30 elementų (indeksai nuo 0 iki 29), 
kurių reikšmės yra atsitiktiniai skaičiai nuo 5 iki 25.
*/
echo '<br>','--------- 1 ---------', '<br>';

echo '<pre>';
$masyvoIlgis = 30;
$masyvas = [];

for ($i=0; $i < $masyvoIlgis; $i++) { 
    array_push($masyvas,rand(5,25));
}
print_r($masyvas);
/*
2.	Naudodamiesi 1 uždavinio masyvu:
*/
//a)	Suskaičiuokite kiek masyve yra reikšmių didesnių už 10;
echo '<br>','--------- 2 a) ---------', '<br>','<br>';

$kiekis = 0;
foreach ($masyvas as $kintamasis) {
    if ($kintamasis > 10){
        $kiekis++;
    }
}
echo "Skaiciu didesniu uz 10 kiekis: $kiekis.<br>";


//b)	Raskite didžiausią masyvo reikšmę ir jos indeksą;
echo '<br>','--------- 2 b) ---------', '<br>','<br>';

$didziausiosReiksmesIndeksas = 0;
for ($i=1; $i < $masyvoIlgis; $i++) { 
    if($masyvas[$i] > $masyvas[$didziausiosReiksmesIndeksas] ){
        $didziausiosReiksmesIndeksas = $i;
    }
}
echo "Didziausia reiksme masyve: $masyvas[$didziausiosReiksmesIndeksas], indeksas: $didziausiosReiksmesIndeksas.<br>";

//c)	Suskaičiuokite visų porinių indeksų reikšmių sumą;
echo '<br>','--------- 2 c) ---------', '<br>','<br>';

$lyginiuIndeksuReiksmiuSuma = 0;
echo 'Reiksmes: '; 
foreach ($masyvas as $key => $value) {
    if ($key % 2 == 0){
        echo $value . ' ';
        $lyginiuIndeksuReiksmiuSuma += $value;
    }
}
echo "<br>Lyginiu indeksu reiksmiu suma: $lyginiuIndeksuReiksmiuSuma. <br>";



//d)	Sukurkite naują masyvą, kurio reikšmės yra 1 uždavinio 
//masyvo reikšmes minus tos reikšmės indeksas;
echo '<br>','--------- 2 d) ---------', '<br>','<br>';

$naujasMasyvas = [];
foreach ($masyvas as $key => $value) {
    $naujasMasyvas[] .= $value - $key;
}
print_r($naujasMasyvas);


// $naujasMasyvas = [];
// // $newValue=0;
// foreach ($masyvas as $key => $value) {
//         // echo "reiksme: $value ";
//         // echo "- indeksas: $key = ";
//         // $newValue = $value - $key;
//         $naujasMasyvas[] .= $value - $key;
//         // echo $newValue . '<br>';
// }
// print_r($naujasMasyvas);


//e)	Papildykite masyvą papildomais 10 elementų su reikšmėmis 
//nuo 5 iki 25, kad bendras masyvas padidėtų iki indekso 39;
echo '<br>','--------- 2 e) ---------', '<br>','<br>';
$pridedamasMasyvoIlgis = 10;

for ($i=0; $i < $pridedamasMasyvoIlgis ; $i++) { 
    array_push($naujasMasyvas, rand(5,25));
}
 print_r($naujasMasyvas);



//f)	Iš masyvo elementų sukurkite du naujus masyvus. 
//Vienas turi būti sudarytas iš neporinių indekso reikšmių, o kitas iš porinių;
echo '<br>','--------- 2 f) ---------', '<br>','<br>';
$pirmasMasyvas = [];
$antrasMasyvas = [];

foreach ($naujasMasyvas as $key => $value) {
    if($key % 2 === 0){
        array_push($pirmasMasyvas, $value);
    } else {
        array_push($antrasMasyvas, $value);
    }
}
echo 'Pirmas masyvas is poriniu indekso reiksmiu: <br>';
print_r($pirmasMasyvas);
echo 'Antras masyvas is neporiniu indekso reiksmiu: <br>';
print_r($antrasMasyvas);



//g)	Pirminio masyvo elementus su poriniais indeksais 
//padarykite lygius 0 jeigu jie didesni už 15;
echo '<br>','--------- 2 g) ---------', '<br>','<br>';

//su foreach
foreach ($masyvas as $index=> $value) {
     if($index % 2 === 0 ){
         if ($value > 15){
            $masyvas[$index] = 0;
         } else {
            $masyvas[$index] = $masyvas[$index];
         }
     }
}
print_r($masyvas);

// for ($i=0; $i < count($naujasMasyvas) ; $i++) { 
//    if ($i % 2 === 0 ){
//        if ($naujasMasyvas[$i] > 15){
//          $naujasMasyvas[$i] = 0;
//        }
//    }
// }
// print_r($naujasMasyvas);

//h)	Suraskite pirmą (mažiausią) indeksą, kurio elemento 
//reikšmė didesnė už 10;
echo '<br>','--------- 2 h) ---------', '<br>','<br>';
$indeksas = 0;

// Su FOREACH
foreach ($masyvas as $key => $value) {
    if ($value > 10){
        $key;
        break;
    }
}

// for ($i=0; $i < $masyvoIlgis; $i++) { 
//     if ($masyvas[$i] > 10){
//         $indeksas = $i;
//         break;
//     }
// }
// echo 'Originalus Masyvas: <br>';
// print_r($masyvas);
// echo "Pirmo indekso numeris: $indeksas, kurio reiksme yra daugiau uz 10.<br>";

echo "Pirmo indekso numeris: $key, kurio reiksme yra daugiau uz 10.<br>";


//i)	Naudodami funkciją unset() iš masyvo ištrinkite visus 
//elementus turinčius porinį indeksą;
echo '<br>','--------- 2 i) ---------', '<br>','<br>';


foreach ($masyvas as $key => $value) {
    if($key % 2 === 0){
        unset($masyvas[$key]);
    }
}
var_dump($masyvas);

// su FOR:
// for ($i=0; $i < $masyvoIlgis; $i++) { 
//     if($i % 2 === 0){
//         unset($masyvas[$i]);
//     }
// }
// print_r($masyvas);


/*
3.	3.	Sugeneruokite masyvą, kurio reikšmės atsitiktinės raidės 
A, B, C ir D, o ilgis 200. Suskaičiuokite kiek yra kiekvienos raidės.
*/
echo '<br>','--------- 3 ---------', '<br>','<br>';
$pradinesReiksmes = ['A', 'B', 'C', 'D'];
$raidziuMasyvas =[];
$raidziuMasyvoIlgis = 200;
$aKiekis = 0;
$bKiekis = 0;
$cKiekis = 0;
$dKiekis = 0;


// for ($i=0; $i < $raidziuMasyvoIlgis ; $i++) { 
//     // $raidziuMasyvas[$i] = range('A', 'D');
//     $char = chr(rand(65, 68));
// }
// print_r($raidziuMasyvas);


// foreach (range('A', 'D') as $letter) {
//     echo $letter;
// }


/*
4.	Išrūšiuokite 3 uždavinio masyvą pagal abecėlę.
*/

echo '<br>','--------- 4 ---------', '<br>','<br>';
/*
5.	Sugeneruokite 3 masyvus pagal 3 uždavinio sąlygą. 
Sudėkite masyvus, sudėdami atitinkamas reikšmes. 
Paskaičiuokite kiek unikalių (po vieną, nesikartojančių) 
reikšmių ir kiek unikalių kombinacijų gavote.
*/

echo '<br>','--------- 5 ---------', '<br>','<br>';

/*
6.	Sugeneruokite du masyvus, kurių reikšmės yra 
atsitiktiniai skaičiai nuo 100 iki 999. Masyvų ilgiai 100. 
Masyvų reikšmės turi būti unikalios savo masyve (t.y. neturi kartotis).
*/
echo '<br>','--------- 6 ---------', '<br>','<br>';
$randSkaiciai1 = [];
$randSkaiciai2 = [];
$ilgisMasyvo=100;

for ($i=0; $i < $ilgisMasyvo; $i++) { 
    array_push($randSkaiciai1,rand(100,999));
    $randSkaiciai1 = array_unique($randSkaiciai1);
}   
for ($i=0; $i < $ilgisMasyvo; $i++) { 
    array_push($randSkaiciai2,rand(100,999));
    $randSkaiciai2 = array_unique($randSkaiciai2);
}   
echo 'Array rand skaiciai 1<br>';
print_r($randSkaiciai1);
echo 'Array rand skaiciai 2<br>';
print_r($randSkaiciai2);

/*
7. Sugeneruokite masyvą, kuris būtų sudarytas iš reikšmių, 
kurios yra pirmame 6 uždavinio masyve, bet nėra antrame 6 uždavinio masyve.
*/
echo '<br>','--------- 7 ---------', '<br>','<br>';
$naujasRandMasyvas = [];
array_push($naujasRandMasyvas,$randSkaiciai1);
array_push($naujasRandMasyvas,$randSkaiciai2);
$naujasRandMasyvas = array_unique($naujasRandMasyvas);
print_r($naujasRandMasyvas);


echo '<br>','--------- 7 --juosta-------', '<br>','<br>';
$diff = array_diff($randSkaiciai1,$randSkaiciai1);
print_r($diff);

/*
8.	Sugeneruokite masyvą iš elementų, kurie kartojasi abiejuose 
6 uždavinio masyvuose.
*/

/*
9.	Sugeneruokite masyvą, kurio indeksus sudarytų pirmo 6 uždavinio
 masyvo reikšmės, o jo reikšmės iš būtų antrojo masyvo.
*/

/*
10.	Sugeneruokite 10 skaičių masyvą pagal taisyklę: 
Du pirmi skaičiai- atsitiktiniai nuo 5 iki 25. Trečias, 
pirmo ir antro suma. Ketvirtas- antro ir trečio suma. 
Penktas trečio ir ketvirto suma ir t.t.
*/

/*
11.	Sugeneruokite 101 elemento masyvą su atsitiktiniais skaičiais nuo 0 iki 300. 
Reikšmes kurios tame masyve yra ne unikalios pergeneruokite iš naujo taip, kad 
visos reikšmės masyve būtų unikalios. Išrūšiuokite masyvą taip, kad jo didžiausia 
reikšmė būtų masyvo viduryje, o einant nuo jos link masyvo pradžios ir pabaigos 
reikšmės mažėtų. Paskaičiuokite pirmos ir antros masyvo dalies sumas 
(neskaičiuojant vidurinės). Jeigu sumų skirtumas (modulis, absoliutus dydis) 
yra didesnis nei | 30 | rūšiavimą kartokite. (Kad sumos nesiskirtų viena nuo 
kitos daugiau nei per 30)
*/
