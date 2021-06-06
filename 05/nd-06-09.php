<?php

/*
6.	Sugeneruokite du masyvus, kurių reikšmės yra 
atsitiktiniai skaičiai nuo 100 iki 999. Masyvų ilgiai 100. 
Masyvų reikšmės turi būti unikalios savo masyve (t.y. neturi kartotis).
*/
echo '<pre>';
echo '<br>','--------- 6 ---------', '<br>','<br>';
$randSkaiciai1 = [];
$randSkaiciai2 = [];
$ilgisMasyvo=10;


while(count($randSkaiciai1) < $ilgisMasyvo ){
    array_push($randSkaiciai1, rand(1,19));
    $randSkaiciai1 = array_unique($randSkaiciai1);
}
while(count($randSkaiciai2) < $ilgisMasyvo ){
    array_push($randSkaiciai2, rand(1,19));
    $randSkaiciai2 = array_unique($randSkaiciai2);
}
 
echo 'Atsitiktiniu skaiciu masyvas 1<br>';
print_r($randSkaiciai1);
echo 'Atsitiktiniu skaiciu masyvas 2<br>';
print_r($randSkaiciai2);

/*
7. Sugeneruokite masyvą, kuris būtų sudarytas iš reikšmių, 
kurios yra pirmame 6 uždavinio masyve, bet nėra antrame 6 uždavinio masyve.
*/
echo '<br>','--------- 7 ---------', '<br>','<br>';
$naujasRandMasyvas = array_diff($randSkaiciai1, $randSkaiciai2);

print_r($naujasRandMasyvas);

/*
8.	Sugeneruokite masyvą iš elementų, kurie kartojasi 
abiejuose 6 uždavinio masyvuose.
*/
echo '<br>','--------- 8 ---------', '<br>','<br>';
$naujasRandMasyvas = array_intersect($randSkaiciai1, $randSkaiciai2);

print_r($naujasRandMasyvas);

/*
9.	Sugeneruokite masyvą, kurio indeksus sudarytų pirmo 6 uždavinio
 masyvo reikšmės, o jo reikšmės iš būtų antrojo masyvo.
*/
echo '<br>','--------- 9 ---------', '<br>','<br>';
$naujasRandMasyvas = array_combine($randSkaiciai1, $randSkaiciai2);

print_r($naujasRandMasyvas);