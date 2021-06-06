<?php

echo '<pre>';



echo 'dvigubas masyvas su reiksmem skaiciais:<br>';
$masyvas = [];

foreach (range(1, 5) as $keyBig => $_) {
    foreach (range(1, 2) as $keySmall => $_) {
        $masyvas[$keyBig][$keySmall] = rand(5, 25);
    }
  
}

print_r($masyvas);
echo 'pabaiga<br>';

foreach ($masyvas as $val) {
    if (is_array($val)) {
        foreach ($val as $val2) {
            echo '<br>vidinio masyvo reiksme: ';
            print_r($val2);
        }
    }
    else {
        echo '<br>isorinio masyvo reiksme skaicius<br>';
        print_r($val);
    }
}


echo '<br>','--------- --------- ---------', '<br>';

echo '<br><br>dvigubas masyvas su kai kuriom reiksmem skaiciais:<br>';
$masyvas = [];

foreach (range(1, 5) as $keyBig => $_) {
    if (rand(0, 1)) {
        foreach (range(1, 5) as $keySmall => $_) {
            $masyvas[$keyBig][$keySmall] = rand(5, 25);
        }
    }
    else {
        $masyvas[$keyBig] = rand(5, 25);
    }
}

print_r($masyvas);
echo 'pabaiga<br>';


foreach ($masyvas as $val) {
    if (is_array($val)) {
        foreach ($val as $val2) {
            echo '<br>vidinio masyvo reiksme: ';
            print_r($val2);
        }
    }
    else {
        echo '<br>isorinio masyvo reiksme skaicius';
        print_r($val);
    }
}