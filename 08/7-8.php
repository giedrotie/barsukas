<?php
echo '<pre>';

//7.	Sugeneruokite atsitiktinio (nuo 10 iki 20) ilgio masyvą, 
//kurio visi, išskyrus paskutinį, elementai yra atsitiktiniai 
//skaičiai nuo 0 iki 10, o paskutinis masyvas, kuris generuojamas 
//pagal tokią pat salygą kaip ir pirmasis masyvas. 
//Viską pakartokite atsitiktinį nuo 10 iki 30  kiekį kartų.
//Paskutinio masyvo paskutinis elementas yra lygus 0;

echo '<br>','--------- 7 -su Nagliu--------?', '<br>';
$arr = genegenerator([], rand(10,30));

print_r($arr);

function genegenerator($arr, $times){
    $arrSize = rand(10, 20);
    for ($i=0; $i < $arrSize - 1; $i++) { 
       $arr[] = rand(0,10);
    }
    if ($times > 0) {
        $arr[] = genegenerator([], $times - 1);
        return $arr;
    } else {
        $arr[] = 0;
    }
   return $arr;
}
_d($arr);

//8.	Suskaičiuokite septinto uždavinio elementų, 
//kurie nėra masyvai, sumą. Skaičiuoti reikia visuose 
//masyvuose ir submasyvuose.
echo '<br>','--------- 8 -su Nagliu--------?', '<br>';
$result = calc($arr);
echo "Rezultatas: $result<br>";
function calc($arr)
{
    $sum = 0;
    foreach ($arr as $value) {
        if( !is_array($value)){
            $sum += $value;
        } else {
            $sum += calc($value);
        }
        
    }

    return $sum;
}





