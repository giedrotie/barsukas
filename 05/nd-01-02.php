<?php

/*
1.	Sugeneruokite masyvą iš 30 elementų (indeksai nuo 0 iki 29), 
kurių reikšmės yra atsitiktiniai skaičiai nuo 5 iki 25.
*/
// echo '<br>','--------- 1 ---------', '<br>';

echo '<pre>';
// $masyvoIlgis = 30;
// $masyvas = [];

// for ($i=0; $i < $masyvoIlgis; $i++) { 
//     array_push($masyvas,rand(5,25));
// }
// print_r($masyvas);



// echo '<br>','--------- 1 ----egles var-----', '<br>';
// $arraySize = 30;
// $masyvas = array_fill(0, $arraySize, ' ');

// foreach ($masyvas as $index => &$value) {
//     $value = rand(5, 25);
// }
// print_r($masyvas);

echo '<br>','--------- 1 ----FOREACH var-----', '<br>';
$masyvas = [];
$masyvoIlgis = 30;

// foreach skirtas sukurti masyvui!!!!
foreach(range(1, $masyvoIlgis)as $_) {
    $masyvas[] = rand(5, 25);
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

//su FOREACH
$didziausiosReiksmesIndeksas = 0;

foreach ($masyvas as $i => $value) {
    if($masyvas[$i] > $masyvas[$didziausiosReiksmesIndeksas] ){
        $didziausiosReiksmesIndeksas = $i;
    }
}
echo "Didziausia reiksme masyve: $masyvas[$didziausiosReiksmesIndeksas], indeksas: $didziausiosReiksmesIndeksas.<br>";

// su FOR
// $didziausiosReiksmesIndeksas = 0;
// for ($i=1; $i < $masyvoIlgis; $i++) { 
//     if($masyvas[$i] > $masyvas[$didziausiosReiksmesIndeksas] ){
//         $didziausiosReiksmesIndeksas = $i;
//     }
// }
// echo "Didziausia reiksme masyve: $masyvas[$didziausiosReiksmesIndeksas], indeksas: $didziausiosReiksmesIndeksas.<br>";
//




//echo '<br>','--------- 2 b) ----tomo var-----', '<br>','<br>';
// $largest = 0;
// $index = 0;
// foreach ($nums as $key => $num) {
//     if ($num > $largest) {
//         $largest = $num;
//         $index = $key;
//     }
//     echo '<br>','--------- 2 b) ----irmanto var-----', '<br>','<br>';
//     $biggestNum = 0;

//     $bigIndex = 0;
    
//     foreach ($masyvas1 as $key => $value) {
    
//         if($value > $biggestNum) {
    
//             $biggestNum = $value;
    
//             $bigIndex = $key;
    
//         }
    
//     }

//     echo '<br>','--------- 2 b) ----lino var-----', '<br>','<br>';
//     $biggest = 0;
//     foreach ($masyvas as $key => $value) {
//         if($value > $biggest){
//             $biggest =  $value;
//         }
//     }
    
//     echo "Max reiksme: $biggest <br>";
//     echo 'Index: '.array_search($biggest,$masyvas);



//c)	Suskaičiuokite visų porinių indeksų reikšmių sumą;
echo '<br>','--------- 2 c) ---------', '<br>','<br>';

$lyginiuIndeksuReiksmiuSuma = 0;
echo 'Reiksmes: '; 
foreach ($masyvas as $key => $value) {
    if ($key % 2 === 0){
        echo $value . ' ';
        $lyginiuIndeksuReiksmiuSuma += $value;
    }
}
echo "<br>Lyginiu indeksu reiksmiu suma: $lyginiuIndeksuReiksmiuSuma. <br>";



//d)	Sukurkite naują masyvą, kurio reikšmės yra 1 uždavinio 
//masyvo reikšmes minus tos reikšmės indeksas;
echo '<br>','--------- 2 d) -- nauja reiksme - indexas -------', '<br>','<br>';

$naujasMasyvas = [];
foreach ($masyvas as $index => $value) {
    $naujasMasyvas[] .= $value - $index;
}
print_r($naujasMasyvas);


// echo '<br>','--------- 2 d) irmanto var---------', '<br>','<br>';

// $masyvas2 = [];
// foreach ($masyvas1 as $key => $value) {
//     $masyvas2[$key] = $value - $key;

// }
// print_r($masyvas2);

//e)	Papildykite masyvą papildomais 10 elementų su reikšmėmis 
//nuo 5 iki 25, kad bendras masyvas padidėtų iki indekso 39;
echo '<br>','--------- 2 e) -pailginimas--------', '<br>','<br>';
$pridedamasMasyvoIlgis = 10;

for ($i=0; $i < $pridedamasMasyvoIlgis ; $i++) { 
    array_push($naujasMasyvas, rand(5,25));
}
 print_r($naujasMasyvas);


 echo '<br>','--------- 2 e) -kamiles var--------', '<br>','<br>';
 for($i = 0; $i < 10; $i++){
    $naujas_m[]= rand(5,25);
    }




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


// echo '<br>','--------- 2 f) -Audriaus var--------', '<br>','<br>';
// foreach ($naujasMasyvas as $index => $val) {
//     $index % 2 != 0 ?: $lyginiuMasyvas[] = $val;
//     $index % 2 == 0 ?: $nelyginiuMasyvas[] = $val;
// }


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


// echo '<br>','--------- 2 g) ---irmanto var------', '<br>','<br>';

// foreach ($masyvas3 as $key => &$value) {
//     if($value > 15) {
//         $value = 0;
//     }
// }
// unset($value);

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
