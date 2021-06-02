<?php

/*
2.	Sugeneruokit 300 atsitiktinių skaičių nuo 0 iki 300, 
atspausdinkite juos atskirtus tarpais ir suskaičiuokite 
kiek tarp jų yra didesnių už 150.  Skaičiai didesni nei 
275 turi būti raudonos spalvos.
*/

echo '<br>','<h3>--------- 2 ---------</h3>', '<br>','<br>';


$kiekis = 0;
$skaiciuKiekis = 300;
 echo "<div style='overflow-wrap: break-word;'>";
for ($i = 1 ; $i <= $skaiciuKiekis ; $i++)
{
    $skaicius = rand(0,300);
    if ($skaicius > 150)
    {
        $kiekis++;
    }
    if($skaicius > 275)
    {
        echo "<span style='color:red;'>$skaicius</span> ";
    } else {
        echo "$skaicius ";
    }
}
echo '</div>';
echo "<p style='font-size: 16px;'>Skaiciu, didesniu uz 150, yra $kiek.</p>";









// echo '<br>','<h3>--------- 2 -kitas var--------</h3>', '<br>','<br>';


// $skaiciuKiekis = 300;
// $skaiciai[] = '';
// $kiekis = 0;
// for ($i = 0; $i < $skaiciuKiekis; $i++) { 
//     $skaiciai[] = rand(0, 300);
//     if ($skaiciai[$i] > 150){
//         $kiekis++;
//     }
// }

// foreach($skaiciai as $skaicius) {
//     if ($skaicius > 275) {
//         echo "<font color='red'>" . $skaicius . " </font>";
//     }
//     echo $skaicius . ' ';
// }
// echo "<br><br>Skaiciu didesniu uz 150, kiekis: $kiekis.<br><br>";