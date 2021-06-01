<?php

/*
2.	Sugeneruokit 300 atsitiktinių skaičių nuo 0 iki 300, 
atspausdinkite juos atskirtus tarpais ir suskaičiuokite 
kiek tarp jų yra didesnių už 150.  Skaičiai didesni nei 
275 turi būti raudonos spalvos.
*/

echo '<br>','<h3>--------- 2 ---------</h3>', '<br>','<br>';

$skaiciuKiekis = 300;
$skaiciai[] = '';
$kiekis = 0;
for ($i = 0; $i < $skaiciuKiekis; $i++) { 
    $skaiciai[] = rand(0, 300);
    if ($skaiciai[$i] > 150){
        $kiekis++;
    }
}

foreach($skaiciai as $skaicius) {
    if ($skaicius > 275) {
        echo "<font color='red'>" . $skaicius . " </font>";
    }
    echo $skaicius . ' ';
}
echo "<br><br>Skaiciu didesniu uz 150, kiekis: $kiekis.<br><br>";