<?php
echo '<pre>';


//9.	Sugeneruokite masyvą iš trijų elementų, kurie yra 
//atsitiktiniai skaičiai nuo 1 iki 33. Jeigu tarp trijų 
//paskutinių elementų yra nors vienas ne pirminis skaičius, 
//prie masyvo pridėkite dar vieną elementą- atsitiktinį skaičių 
//nuo 1 iki 33. Vėl patikrinkite pradinę sąlygą ir jeigu reikia 
//pridėkite dar vieną elementą. Kartokite, kol sąlyga nereikalaus 
//pridėti elemento. 

echo '<br>','--------- 9 -su Nagliu--------', '<br>';

function isPrime($n){for($i=$n;--$i&&$n%$i;);return$i==1;}

$masyvas = [];
foreach(range(1, 3) as $_) {
    $masyvas [] = rand(1, 33);
 
}

while (!isPrime($masyvas[(count($masyvas) - 1)]) || 
       !isPrime($masyvas[(count($masyvas) - 2)])  || 
       !isPrime($masyvas[(count($masyvas) - 3)]) ) {
    $masyvas[] = rand(1, 33);
}
 
print_r($masyvas);