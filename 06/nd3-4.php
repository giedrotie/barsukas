<?php
echo '<pre>';

//3.	Sukurkite masyvą iš 10 elementų. Kiekvienas masyvo elementas 
//turi būti masyvas su atsitiktiniu kiekiu nuo 2 iki 20 elementų. 
//Elementų reikšmės atsitiktinai parinktos raidės iš intervalo A-Z. 
//Išrūšiuokite antro lygio masyvus pagal abėcėlę (t.y. tuos kur su raidėm).

echo '<br>','--------- 3 ---------', '<br>';
$raidziuMasyvas = [];

foreach (range(1, 10) as $isorinioIndex => $valueNera) {
    foreach(range(1,rand(2, 20)) as $vidinioIndex => $valueNera){
     $raidziuMasyvas[$isorinioIndex][$vidinioIndex] = chr(rand(65,90));
    //  $raidziuMasyvas[$isorinioIndex][$vidinioIndex] = range('A', 'Z')[rand(0,25)];
    }
 }
print_r($raidziuMasyvas);

foreach ($raidziuMasyvas as &$value) {
    sort($value); 
}
unset($value);

echo '<br> issortintas raidziu masyvas<br><br>';
print_r($raidziuMasyvas);

echo '<br>','--------- 3 tomo ---------', '<br>';
for ($ii = 0; $ii < 10; $ii++) {
    $iSize = rand(2, 20);
    for ($i = 0; $i < $iSize; $i++) {
        $masyvas2[$ii][$i] = range('A', 'Z')[rand(0, 25)];
    }
    sort($masyvas2[$ii]);
}

print_r($masyvas2);


//4.	Išrūšiuokite trečio uždavinio pirmo lygio masyvą taip, 
//kad elementai kurių masyvai trumpiausi eitų pradžioje. 
//Masyvai kurie turi bent vieną “K” raidę, visada būtų didžiojo 
//masyvo visai pradžioje.
echo '<br>','--------- 4 tomo ---------', '<br>';

// sort($masyvas2);
// print_r($masyvas2);

// $indexes_K_sorted = [];

// foreach ($masyvas2 as $ii => $value_ii) {
//     if (in_array('K', $value_ii)) {
//         $indexes_K_sorted[] = $ii;
//     }
// }

// foreach ($masyvas2 as $ii => $value_ii) {
//     if (!in_array($ii, $indexes_K_sorted)) {
//         $indexes_K_sorted[] = $ii;
//     }
// }
// // _d($indexes_K_sorted);
// foreach ($indexes_K_sorted as $index => $value) {
//     $masyvas2_KSorted[$index] = $masyvas2[$value];
// }
// echo '<br>','4 K sorted', '<br>';
// $masyvas2 = $masyvas2_KSorted;
// print_r($masyvas2);


echo '<br>','--------- 4 destytojo ---------', '<br>';


usort($masyvas2, function($a, $b) { // a ir b yra automatiskai usorto generuojami argumentai
    // t.y. gretimi vienas salia kito stovintys kintamieji

$ak = (int) in_array('K', $a); // in_array grazina boolean reiksme
$bk = (int) in_array('K', $b); // naudojamas castingas kad gauti 1, 0

if ($ak + $bk == 1) {
return $bk <=> $ak;
}
return count($a) <=> count($b);

});

print_r($masyvas2);