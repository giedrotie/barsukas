<?php
/*
3.	Vienoje eilutėje atspausdinkite visus skaičius 
nuo 1 iki atsitiktinio skaičiaus tarp 3000 - 4000 
pvz(aibė nuo 1 iki 3476), kurie dalijasi iš 77 be liekanos. 
Skaičius atskirkite kableliais. Po paskutinio skaičiaus 
kablelio neturi būti. Jeigu reikia, panaudokite css, 
kad visi rezultatai matytųsi ekrane.
*/

echo '<br>','<h3>--------- 3 ---------</h3>', '<br>','<br>';

$skaiciai = '';
$paskutinisSkaicius = rand(3000, 4000);
for ($i=1; $i < $paskutinisSkaicius ; $i++) { 
    if ($i % 77 === 0) {
        if ($i >= $paskutinisSkaicius - 76 ) {
        $skaiciai .= $i . '.';
        } else {
            $skaiciai .= $i . ', ';  
        }
    }
}
echo $skaiciai;








// $string = '';
// $limit = rand(3000, 4000);
// // echo $limit . '<br>';
// for ($i = 1; $i <= $limit; $i++) {
//     if ($i % 77 === 0) {
//         $string = $i >= $limit - 76 ? $string . $i : $string . $i . ', ';
//     }
// }
// echo $string;
// echo '<br><br>';