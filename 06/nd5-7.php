<?php
echo '<pre>';
//5.	Sukurkite masyvą iš 30 elementų. Kiekvienas masyvo elementas yra 
//masyvas [user_id => xxx, place_in_row => xxx] user_id atsitiktinis 
//unikalus skaičius nuo 1 iki 1000000, place_in_row atsitiktinis 
//skaičius nuo 0 iki 100. 
echo '<br>','--------- 5 ---------', '<br>';

// unikaliu skaiciu funkcija

// function UniqueRandomNumbersWithinRange($min, $max, $quantity) {
//     $numbers = range($min, $max);
//     shuffle($numbers);
//     return array_slice($numbers, 0, $quantity);
// }

// $masyvas5 = array_fill(0, 3, '');
// foreach ($masyvas5 as $key => $value) {
//     $masyvas5 [$key]= ['user_id' => UniqueRandomNumbersWithinRange(0,10,1), 'place_in_row' => rand(1, 10)];
// }

// print_r($masyvas5);
// echo 'pabaiga<br>';

///////////////////////

$masyvas5 = array_fill(0, 5, '');
foreach ($masyvas5 as $key => $value) {
    $masyvas5 [$key]= ['user_id' => rand(1,20), 'place_in_row' => rand(1, 10)];
}

print_r($masyvas5);
echo 'pabaiga<br>';

echo '<br>','--------- 5 tomo var---------', '<br>';

$mas = array_fill(0, 30, '');
$indexes = [];
while (count($indexes) < 30) {
    $indexes[] = rand(1, 1000000);
    array_unique($indexes);
}

foreach ($indexes as $key => $value) {
    $mas[$key] = ['user_id' => $indexes[$key], 'place_in_row' => rand(0, 100)];
}

echo '<br>','--------- 5 vaigaudo var---------', '<br>';
foreach (range(1, 30) as $key => $_) {
    foreach (range(1, 2) as $key2 => $_) {
        $id = rand(1, 1000000);
        $place = rand(0, 100);
        if ($key2 == 0) {
            $arr[$key][$key2] = "user_id => $id";
        }

        if ($key2 == 1) {
            $arr[$key][$key2] = "place_in_row => $place";
        }
    }
}
//d($arr, '5');
echo '<br>','--------- 5 dest var---------', '<br>';

$mas5 = [];
$count = 0;
do{
    $count++;
    $uniqID = rand(1, 20);
    foreach ($mas5 as $user) {
       if($user['user_id'] == $uniqID){
           continue 2; // tesiu do t.y. tevini cikla
       }
    }
    $mas5[] = [
        'user_id' => $uniqID, 
        'place_in_row' => rand(0,100)
    ];
} while (count($mas5) < 10);

print_r($mas5);
echo "<br> Counter $count <br>";

//6.	Išrūšiuokite 5 uždavinio masyvą pagal user_id didėjančia tvarka. 
//Ir paskui išrūšiuokite pagal place_in_row mažėjančia tvarka.
echo '<br>','--------- 6 ---------', '<br>';

// sort($masyvas5);
// echo '<br> Masyvas isrusiuotas pagal user_id didėjančia tvarka.';
// print_r($masyvas5);


// foreach ($masyvas5 as $key => $rowVal) {
//     $user_id[$key] = $row['user_id'];
//     $user_id[$key]  = $row['user_id'];
//     $place_in_row[$key] = $row['place_in_row'];
// }
// array_multisort($place_in_row, SORT_DESC, $user_id, SORT_ASC, $masyvas5);

// echo '<br> Masyvas isrusiuotas pagal place_in_row mažėjančia tvarka ';
// print_r($masyvas5);

echo '<br>','--------- 6 -kamiles var--------', '<br>';

usort($mas5, function($a, $b) {
    return $a <=> $b;
    });
    // _d($masyvas);
    print_r($mas5);


    usort($mas5, function($a, $b) {
    return $a['place_in_row'] <=> $b['place_in_row'];
    });
    // _d($masyvas);
    print_r($mas5);


echo '<br>','--------- 6 -rutos var--------', '<br>';
sort($mas5);
print_r('Rūšiavimas didėjančia tvarka: ');
print_r($mas5);

usort( $mas5, function ($place_in_row, $user_id){
    return $user_id['place_in_row'] <=> $place_in_row['place_in_row']  ; 
});
print_r('Rūšiavimas mažėjančia tvarka: ');
print_r($mas5);

//7.	Prie 6 uždavinio masyvo antro lygio masyvų pridėkite dar 
//du elementus: name ir surname. Elementus užpildykite stringais iš 
//atsitiktinai sugeneruotų lotyniškų raidžių, kurių ilgiai nuo 5 iki 15.

// echo '<br>','--------- 7 ---------', '<br>';
// function generateString($length){
//     $string = '';
//     for ($i = 0; $i < $length; $i++) {
//         $string = $string . chr(rand(65, 90));
//     }
//     return $string;
// }

// foreach ($masyvas5 as $index2 => $value_index2) {
//     $masyvas5[$index2] += ['name' => generateString(rand(5, 15)), 'surname' => generateString(rand(5, 15))];
// }
// print_r($masyvas5);

// echo '<br>','--------- 7 vaigaudo var---------', '<br>';

// function randomString(){
//     $letters = '';
//     for ($i = 0; $i < rand(5, 15); $i++) {
//         if ($i == 0) {
//             $letters .= chr(rand(65, 90));
//         } else {
//             $letters .= chr(rand(97, 122));
//         }
//     }
//     return $letters;
// }

// foreach ($arr as $key => $value) {
//     $arr[$key][] = 'Name => ' . randomString();
//     $arr[$key][] = 'Surname => ' . randomString();
// }
// print_r($arr);

echo '<br>','--------- 7 dest var---------', '<br>';

foreach ($masyvas5 as &$user) { // perduodama su referencu kad deti i masyva o ne i naujai sukurta kopija!!!!
    $user['name'] = '';
    $user['surname'] = '';
    foreach (range(1, rand(5,15)) as $_) {
       $user ['name'] .= range('a','z')[rand(0, 15)];
    }
    foreach (range(1, rand(5,15)) as $_) {
        $user ['surname'] .= range('a','z')[rand(0, 15)];
     }

}
print_r($masyvas5);
_d($masyvas5);