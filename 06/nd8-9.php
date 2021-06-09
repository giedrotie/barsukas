<?php
echo '<pre>';

//8.	Sukurkite masyvą iš 10 elementų. Masyvo reikšmes užpildykite pagal 
//taisyklę: generuokite skaičių nuo 0 iki 5. Ir sukurkite tokio ilgio masyvą. 
//Jeigu reikšmė yra 0 masyvo nekurkite. Antro lygio masyvo reikšmes užpildykite 
//atsitiktiniais skaičiais nuo 0 iki 10. Ten kur masyvo nekūrėte reikšmę 
//nuo 0 iki 10 įrašykite tiesiogiai.

echo '<br>','--------- 8 ---------', '<br>';

$sum = 0;
$masyvas8 = array_fill(0, 10, '');

foreach ($masyvas8 as &$value_ii) {
    $length = rand(0, 5);
    if ($length !== 0) {
        $value_ii = array_fill(0, $length, '');
        foreach ($value_ii as $i => &$value_i) {
            $value_i = rand(0, 10);
            $sum += $value_i;
        }
    } else {
        $value_ii = rand(0, 10);
        $sum += $value_ii;
    }
}
print_r($masyvas8);


echo '<br>','--------- 8 lidijos var---------', '<br>';

$masyvas = [];



foreach (range(1, 10) as $key1 => $_) {
    $sk = rand(0, 5);
    if ($sk == 0) {
        $masyvas[$key1] = rand(0, 10);
    } else {
        foreach (range(1, $sk) as $key2 => $_) {
            $masyvas[$key1][] = rand(0, 10); 
        }
    }
}

_d($masyvas);


//9.	Paskaičiuokite 8 uždavinio masyvo visų reikšmių sumą ir 
//išrūšiuokite masyvą taip, kad pirmiausiai eitų mažiausios masyvo 
//reikšmės arba jeigu reikšmė yra masyvas, to masyvo reikšmių sumos.

echo '<br>','--------- 9 ---------', '<br>';

echo "<br>$sum<br>";

sort($masyvas4);
print_r($masyvas4);