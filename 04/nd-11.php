<?php
/*
11.	Sugeneruokite stringą, kurį sudarytų 50 atsitiktinių skaičių nuo 1 iki 200, 
atskirtų tarpais. Skaičiai turi būti unikalūs (t.y. nesikartoti). Sugeneruokite antrą stringą, 
pasinaudodami pirmu, palikdami jame tik pirminius skaičius (t.y tokius, kurie dalinasi be 
liekanos tik iš 1 ir patys savęs). Skaičius stringe sudėliokite didėjimo tvarka, nuo mažiausio iki didžiausio.
*/
echo '<br>','<h3>--------- 11---------</h3>', '<br>','<br>';

// $stringas = '';
// for ($i=1; $i <= 50; $i++) { 
//     $stringas .= random_int(1,200) . ' ';
// }
// echo "stringas 1: $stringas<br>";
// $stringas2 = '';
// for($i=1; $i <= strlen($stringas); $i++) { 
//     if ($stringas % 1 === 0){
//         $stringas2 += $stringas + ' ';
//     } 
//     echo "stringas 2 : $stringas2<br>";
// }

$random = [];
while(count($random) < 50 ){
    array_push($random, rand(1,200));
    $random = array_unique($random);
}
echo 'Atsitiktiniu skaiciu stringas: <br>';
echo implode(' ',$random);
echo '<br>';
echo 'Pirminiu skaiciu stringas: <br>';
for ($k = 0 ; $k < count($random); $k++){
    $value=false;
    $sk=$random[$k]; 
    if($sk == 1 ){
        continue;
    } 
    for ($i = 2; $i <= $sk-1; $i++) {  
        if ($sk % $i == 0) {  
            $value= True;  
            break;
        }  
    }  
    if ($value) {  
        continue;
    }   
    echo $sk . ' ';
}

implode(' ', $array);


echo '<br>','<h3>--------- 11----kamiles var-----</h3>', '<br>','<br>';



$array = [];
while(count($array) <= 50){
$sk = rand(1,200);
if(count($array) == 0){
array_push($array, $sk);
} else {
foreach($array as $i){
if($sk === $i){
continue 2;
}
}
array_push($array, $sk);
}
}
echo implode(" ",$array);

echo '<br>';

echo '<br>';



$new_array = [];
for($i = 0; $i < count($array); $i++){
$sk = $array[$i];
$dalikliai = 0;
for($o = 2; $o < $sk; $o++){
if($sk % $o === 0){
$dalikliai++;
}
}
if($dalikliai === 0){
array_push($new_array, $sk);
}
}

sort($new_array);



echo implode(" ",$new_array);