<?php
echo '<pre>';
$masyvas = [];
$masyvoIlgis = 30;

// foreach skirtas sukurti masyvui!!!!
foreach(range(1, $masyvoIlgis)as $_) {
    $masyvas[] = rand(5, 25);
}

print_r($masyvas);

$max = 5;
$indexes = [];

foreach ($masyvas as $index => $val) {
    if ($val > $max) {
        $max = $val;
        $indexes = [];
    }
    if($val == $max) {
        $indexes[] = $key;
        array_push($indexes, $key);

    }
}


// print_r($max);
// echo '<br>max<br>';
// echo 'indexes<br>';
// print_r($indexes);

reset($masyvas);

$ind10 = false;

do {
    $ind10 = key($masyvas);
    $val = current($masyvas);
    next($masyvas);
} while(key($masyvas)!==null && $val < 10);


 print_r($ind10);