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
    $masyvas[0][0] = 9;
    $masyvas[0][1] = 20;
    $masyvas[0][2] = 2;
    $masyvas[0][3] = 3;
    $masyvas[0][4] = 4;
    $masyvas[1][0] = 10;
    $masyvas[1][1] = 11;
    $masyvas[1][2] = 12;
    $masyvas[1][3] = 13;
    $masyvas[1][4] = 14;
    $masyvas[2][0] = 20;
    $masyvas[2][1] = 21;
    $masyvas[2][2] = 22;
    $masyvas[2][3] = 23;
    $masyvas[2][4] = 24;
   }
}
print_r($masyvas);
// var_dump($masyvas);

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
foreach ($masyvas as $outerValue) {
       if(is_array($outerValue)){
           foreach ($outerValue as $indexInn => $innerValue) {
               if($innerValue > $biggestValue){
                $biggestValue = $innerValue;
               }
           }
        } else {
            echo '<br>Isorinio masyvo reiksme yra skaicius: ';
            print_r($outerValue);
        }
    }
    echo "Didziausia reiksme masyve: $biggestValue<br>";
    
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

 echo '<br>','--------- 2 c)-band--------', '<br>';


//  foreach ($masyvas[0] as $i => $outerValue ) { // o = 0
//     $sum = 0;
//     echo "kas yra i ? -> $i<br>";
//     foreach ($masyvas as $o => $innerValue) { // i = 0
//         $sum+= $masyvas[$o][$i];  // m[o][i] = m[0][0] // m[1][0] //m[2][0]
//         echo "kas yra o ? -> $o<br>";
//     }
//     echo $sum."<br>";
//  }

//d)	Visus masyvus “pailginkite” iki 7 elementų
echo '<br>','--------- 2 d)---------', '<br>';

foreach ($masyvas as $index => $value) {
    while(count($masyvas[$index]) < 7){
        array_push($masyvas[$index],'a');
    }
    
}
print_r($masyvas);


//e)	Suskaičiuokite kiekvieno iš antro lygio masyvų elementų 
//sumą atskirai ir sumas panaudokite kaip reikšmes sukuriant naują masyvą. 
//T.y. pirma naujo masyvo reikšmė turi būti lygi mažesnio masyvo, 
//turinčio indeksą 0 dideliame masyve, visų elementų sumai 
echo '<br>','--------- 2 e)---------', '<br>';
