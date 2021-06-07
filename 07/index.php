<?php
echo '<pre>';
// sukuriamas naujas masyvas surandama min ir max reiksmes, bei ju indexai
foreach (range(1, 10) as $keyBig => $_) {
    foreach (range(1, 5) as $keySmall => $_) {
        $masyvas[$keyBig][$keySmall] = 1;
    }
}


$max = 0;
foreach ($masyvas as $index1 => $val1) {
    foreach ($val1 as $index2 => $val2) {
        if ($val2 > $max) {
            $max = $val2;
            $big = $index1;
            $small = $index2;
        }
    }
}
echo "<br>masyvas<br>";
print_r($masyvas);

echo "<br>max<br>";
print_r($max);

echo "<br>coord<br>";
echo "$big - $small";
echo "<br><br>";



// masyvo reiksmiu pagal indeksus sumos
$sums = [];

foreach ($masyvas as $index1 => $val1) {
    foreach ($val1 as $index2 => $val2) {
        $sums[$index2] = ($sums[$index2] ?? 0) + $val2;
    }
}
print_r($sums);

$abc = range('A', 'Z');
foreach (range(1, 10) as $keyBig => $_) {
    foreach (range(1, rand(2, 20)) as $keySmall => $_) {
        
        $masyvas2[$keyBig][$keySmall] = $abc[rand(0, 25)];
    }
}


// masyvo sortinimas pagal K raide ir ilgi

usort($masyvas2, function($a, $b) { // a ir b yra automatiskai usorto generuojami argumentai
                                    // t.y. gretimi vienas salia kito stovintys kintamieji

$ak = (int) in_array('K', $a);
$bk = (int) in_array('K', $b);

if ($ak + $bk == 1) {
    return $bk <=> $ak;
}
return count($a) <=> count($b);

});

print_r($masyvas2);