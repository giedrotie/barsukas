<?php
$masyvas = [];

//echo $masyvas;
echo '<pre>';
// print_r($masyvas);


$masyvas['jkca'] = 'varna';
array_push($masyvas, 'kate');
array_push($masyvas, 'kengura');
$masyvas[] = 'suo';
$masyvas[36178] = 'varna';
$masyvas[-635] = 'asotis';
$masyvas[] = 'Liutas';


// print_r($masyvas);

$masyvas2 = ['pele', 'kate' => 'tupi', '9' => 'suo', 'lape', 13 => 'vilkas']; // veikia automatinis casitinimas
// print_r($masyvas2);

$masyvas3 = array('pele', 'kate', '9', 'lape','vilkas')[rand(0,2)]; // tokiu budu galima istraukti viena reiksme is masyvo
// print_r($masyvas3);

$masyvas4 = ['pele', 'kate', '9', 'lape','vilkas'][rand(0,2)]; // tokiu budu galima istraukti viena reiksme is masyvo





$masyvas5 = ['pele', 'kate', '9', 'lape','vilkas'];
sort($masyvas5);
print_r($masyvas5);

print_r($masyvas2);
foreach ($masyvas2 as $ind => $value) {
    echo "$ind => $value" . '<br>';
}

$masyvas[$ind] = 0;