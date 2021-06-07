<?php
echo '<pre>';

/*
1.	Sugeneruokite masyvą iš 10 elementų, 
kurio elementai būtų masyvai iš 5 elementų 
su reikšmėmis nuo 5 iki 25.
*/
echo '<br>','--------- 1 ---------', '<br>';
$masyvas =[];

foreach (range(1, 2) as $isorinioIndex => $valueNera) {
   foreach(range(1, 5) as $vidinioIndex => $valueNera){
    $masyvas[$isorinioIndex][$vidinioIndex] = rand(5,25);
   }
}
print_r($masyvas);

/*
2.	Naudodamiesi 1 uždavinio masyvu:
a)	Suskaičiuokite kiek masyve yra elementų didesnių už 10;
*/
echo '<br>','--------- 2 a)---------', '<br>';
$count = 0;
foreach ($masyvas as $value) {
    if(is_array($value)){
        foreach ($value as $innerValue) {
            if($innerValue > 10){
                $count++;
            }
            echo '<br>Vidinio masyvo reiksme: ';
            print_r($innerValue);
        }
    } else {
        echo '<br>Isorinio masyvo reiksme yra skaicius: ';
        print_r($val);
    }
}
echo "<br><br>Reiksmiu didesniu nei 10 kiekis: $count. <br>";

//b)	Raskite didžiausio elemento reikšmę; // kaip rasti tos reiksmes indeksa???
echo '<br>','--------- 2 b)---------', '<br>','<br>';
$biggestValue = 0;
foreach ($masyvas as $index1 => $outerValue) {
    //    if(is_array($outerValue)){
           foreach ($outerValue as $index2 => $innerValue) {
               if($innerValue > $biggestValue){
                $biggestValue = $innerValue;
                $big = $index1;
                $small = $index2;
               }
           }
        // } else {
        //     echo '<br>Isorinio masyvo reiksme yra skaicius: ';
        //     print_r($outerValue);
        // }
    }
    echo "Didziausia reiksme masyve: $biggestValue<br>";
    echo "Koordinates [$big][$small]<br>";
    
//c)	Suskaičiuokite kiekvieno antro lygio masyvų su 
//vienodais indeksais sumas (t.y. suma reikšmių turinčių indeksą 0, 1 ir t.t.)
echo '<br>','--------- 2 c)---------', '<br>';

foreach ($masyvas[0] as $o => $outerValue ) { // o = 0
    $sum = 0;
    foreach ($masyvas as $i => $innerValue) { // i = 0
        $sum+= $masyvas[$i][$o];  // m[i][o] = m[0][0] // m[1][0] //m[2][0]
    }
    echo $sum."<br>";
 }

// echo '<br>','--------- 2 c) dest var---------', '<br>';
// $sums = [];
// foreach ($masyvas as $index1 => $val1) {
//     foreach ($val1 as $index2 => $val2) {
//         $sums[$index2] = ($sums[$index2] ?? 0) + $val2;
//     }
// }

//  echo '<br>','--------- 2 c)---vaigaudo var------', '<br>';

//  foreach ($masyvas as $value) {
//     foreach ($value as $key => $value2) {
//         match ($key) {
//             0 => $sum += $value2,
//             1 => $sum1 += $value2,
//             2 => $sum2 += $value2,
//             3 => $sum3 += $value2,
//             4 => $sum4 += $value2,
//         };
//     }
// }
// // _d("$sum $sum1 $sum2 $sum3 $sum4", '2c');


//  echo '<br>','--------- 2 c)--vitos var-------', '<br>';
//  $reiksmes = [];
//  $reiksme = 0;
//  foreach (range(1, 5) as $key => $value) {
//  foreach (range(1, 10) as $key2 => $value2) {
//  $reiksme += $masyvas[$key2][$key];
//  }
//  $reiksmes[] = $reiksme;
//  $reiksme = 0;
//  }
//  print_r($reiksmes);


//d)	Visus masyvus “pailginkite” iki 7 elementų
echo '<br>','--------- 2 d)---------', '<br>';

foreach ($masyvas as $index => $value) {
    while(count($masyvas[$index]) < 7){
        array_push($masyvas[$index],rand(0, 1));
    }
    
}
print_r($masyvas);


echo '<br>','--------- 2 d) tomo var---------', '<br>';
foreach ($masyvas as $index_ii => &$value) {
    $value[] =  rand(5, 25);
    $value[] =  rand(5, 25);
}
print_r($masyvas);

echo '<br>','--------- 2 d) vaigaudo var---------', '<br>';
foreach ($masyvas as $key => $_) {
    $masyvas[$key][] = rand(5, 25);
    $masyvas[$key][] = rand(5, 25);

}
//_d($masyvas, '2d');

echo '<br>','--------- 2 d) irmanto var---------', '<br>';
foreach($masyvas as $key => $value) {
    array_push($masyvas[$key], rand(5, 25), rand(5, 25));    

}

//e)	Suskaičiuokite kiekvieno iš antro lygio masyvų elementų 
//sumą atskirai ir sumas panaudokite kaip reikšmes sukuriant naują masyvą. 
//T.y. pirma naujo masyvo reikšmė turi būti lygi mažesnio masyvo, 
//turinčio indeksą 0 dideliame masyve, visų elementų sumai 

 echo '<br>','--------- 2 e)---------', '<br>';

$sumuMasyvas = [];
$rows = count($masyvas);
$cols = count($masyvas[0]);

for ($i=0; $i <count($masyvas) ; $i++) { 
    $masyvoSuma = 0;
    for ($j=0; $j < count($masyvas[0]); $j++) { 
        $masyvoSuma += $masyvas[$i][$j];
    }
    print("Suma " . ($i) ." (eilutes) t.y. vidinio masyvo: " . $masyvoSuma . "<br>");  
    array_push($sumuMasyvas,$masyvoSuma);
} 
echo '<br>Naujai sukurtas sumu masyvas: <br><br>';
print_r($sumuMasyvas); 


echo '<br>','--------- 2 e)---audriaus var------', '<br>';
$sum = 0;
foreach($masyvas as $x){
    foreach($x as $y){
        $sum += $y;
    }
    $naujasMasyvas[] = $sum;
    $sum = 0;
}
//_d($naujasMasyvas, 'Naujas masyvas, Antras namu darbas: E');


echo '<br>','--------- 2 e)---astos var------', '<br>';
foreach($masyvas as $i => $el){
    $sumos[$i]=array_sum($el);
}

print_r($sumos);

// $suma0 = 0;
// $suma1 = 0;
// foreach ($masyvas as $indexOut => $outerValue) {
//     foreach ($masyvas[0] as $indexInn => $innerValue) {
//         if($indexOut === 0){
//          $suma0 += $masyvas[$indexOut][$indexInn]; 
//         }
//         if($indexOut === 1){
//             $suma1 += $masyvas[$indexOut][$indexInn]; 
//         }
//     }
//  }
//  print("Suma " . ($indexOut) ." (eilutes) t.y. vidinio masyvo: " . $suma0 . "<br>");
//  print("Suma " . ($indexOut) ." (eilutes) t.y. vidinio masyvo: " . $suma1 . "<br>");


// // visu masyvo elementu sumos skaiciavimas:
//  echo '<br>','--------- * ---------', '<br>', '<br>';

// foreach ($masyvas as $indexOut => $outerValue) {
//     foreach ($outerValue as $indexInn => $innerValue) {
//         $suma0 += $masyvas[$indexOut][$indexInn];
//         echo "indexOut: $indexOut;indexInn: $indexInn; suma0: $suma0<br>";
//     }
//  }
//  echo "=========suma0: $suma0<br>";


