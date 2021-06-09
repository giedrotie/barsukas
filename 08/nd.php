<?php
echo '<pre>';

/*
1.	Parašykite funkciją, kurios argumentas būtų tekstas, kuris yra įterpiamas į h1 tagą;
*/
echo '<br>','--------- 1 ---------', '<br>';



function h1($text)
{
    return "<h1>$text</h1>";
}
h1('Labas');


//2.	Parašykite funkciją su dviem argumentais, pirmas argumentas tekstas, 
//įterpiamas į h tagą, o antrasis tago numeris (1-6). Rašydami šią funkciją 
//remkitės pirmame uždavinyje parašytą funkciją;
echo '<br>','--------- 2 ---------', '<br>';

function tekstasNr($tekstas, $nr)
{
    echo "<h$nr>$tekstas</h$nr>";
}

$numeris = rand(1,6);
echo "<br>Iskrites nr: $numeris<br>";
tekstasNr('Labas 2', $numeris);

//3.	Generuokite atsitiktinį stringą, pasinaudodami kodu md5(time()). 
//Visus skaitmenis stringe įdėkite į h1 tagą. Jeigu iš eilės eina keli skaitmenys, 
//juos į tagą reikią dėti kartu (h1 atsidaro prieš pirmą ir užsidaro po paskutinio) 
//Keitimui naudokite pirmo uždavinio funkciją ir preg_replace_callback();

echo '<br>','--------- 3 ---------', '<br>';

$h1 = function (string|array $text) : string
{
    if (is_array($text)) {
        $text = $text[0]; // cia is arrejau isimamis tik 1 elementas
        // $text = array_pop($text); // galima kitu budu istraukt pirma
    }
    return "<h1 style=\"display:inline;\">$text</h1>";
};
$genText = md5(time());
$out = preg_replace_callback('/[0-9+]/', $h1, $genText);
                             //'/\d+/' ieskau vieno arba daugiau (+) skaiciu (d) -> digital arba 
                            // '/[0-9]+/'
echo $out;


//4.	Parašykite funkciją, kuri skaičiuotų, iš kiek sveikų skaičių 
//jos argumentas dalijasi be liekanos (išskyrus vienetą ir patį save) .

echo '<br>','--------- 4 ---------', '<br>';
function kiek(int $skaicius) : int
{
    if ($skaicius === 0 || $skaicius=== 1) {
        return 1;
    }
    if ($skaicius === 2) {
        return 0;
    }

    $count = 0;
    for ($i=2; $i < $skaicius; $i++) { 
        if ( $skaicius % $i === 0){
            $count++;
        }
    }
    return $count;
}

echo kiek(22);

// echo '<br>','--------- 4 -irmanto var--------', '<br>';
// function isPrime(int $argument)


// echo '<br>','--------- 4 --jolanta-------', '<br>';
// function counter($num) {
//     $count = 0;
//     $daliklis = 2;
//     if (is_int($num) === true) {
//         while ($num > $daliklis) {
//             if ($num % $daliklis === 0) {
//                 $count++;
//             }
//             $daliklis++;
//         } 
//         return $count;
//     } else {
//         return 'Duok sveiką skaičių, idiote';
//     }
// }
// echo counter(4);


// echo '<br>','--------- 4 --dest var------', '<br>';
// function divisor(int $digit) : int
// {
//     if ($digit === 0 || $digit === 1) {
//         return 1;
//     }
//     if ($digit === 2) {
//         return 0;
//     }
//     $divisors = range(2, $digit - 1);
//     $divCounter = 0;
//     foreach ($divisors as $div) {
//         if ($digit % $div === 0) {
//             $divCounter++;
//         }
//     }
//     return $divCounter;
// }


//5.	Sugeneruokite masyvą iš 100 elementų, kurio reikšmės 
//atsitiktiniai skaičiai nuo 33 iki 77. Išrūšiuokite masyvą 
//pagal daliklių be liekanos kiekį mažėjimo tvarka, panaudodami 
//ketvirto uždavinio funkciją.
echo '<br>','--------- 5 ---------', '<br>';
$masyvas5 = [];
foreach (range(1, 10) as $key => $value) {
    $masyvas5[] = rand(33, 77);
}
foreach ($masyvas5 as $key => $value) {
    $dalikliuKiekis = kiek($value);
    echo "Iteracija $key, dalikliu kiekis $dalikliuKiekis<br>";
  }
  
_d($masyvas5, 'masyvas5');
print_r($masyvas);

usort($masyvas5, function($a, $b){
    return kiek($b) <=> kiek($a);
});
_d($masyvas5, 'masyvas5 po rusiavimo');

echo '<br>masyvas5 po rusiavimo<br>';
print_r($masyvas5);


//6.	Sugeneruokite masyvą iš 100 elementų, kurio reikšmės 
//atsitiktiniai skaičiai nuo 333 iki 777. Naudodami 4 uždavinio 
//funkciją iš masyvo ištrinkite pirminius skaičius.
echo '<br>','--------- 6 ---------', '<br>';

foreach (range(1,10) as $key => $value) {
    $masyvas6[] = rand(2,20);
}

_d($masyvas6, 'masyvas6');
print_r($masyvas6);

foreach ($masyvas6 as $key => $value) {
    if (kiek($value) === 0){
        echo "pagavau<br> reiksme $value<br>";
        unset($masyvas6[$key]);
    }

}

_d($masyvas6, 'masyvas6 po rusiavimo');
echo '<br>masyvas6 po rusiavimo<br>';
print_r($masyvas6);

//7.	Sugeneruokite atsitiktinio (nuo 10 iki 20) ilgio masyvą, 
//kurio visi, išskyrus paskutinį, elementai yra atsitiktiniai 
//skaičiai nuo 0 iki 10, o paskutinis masyvas, kuris generuojamas 
//pagal tokią pat salygą kaip ir pirmasis masyvas. 
//Viską pakartokite atsitiktinį nuo 10 iki 30  kiekį kartų.
//Paskutinio masyvo paskutinis elementas yra lygus 0;

echo '<br>','--------- 7 ---------?', '<br>';

function masyvSukurt(){
    static $c = 4; // cia stabdis, kuris turi buti rand(10, 30), bet neveikia ;/ ;
    if(--$c < 0) {
    return 'miau arba 0 :)'; 
    }
    $length = rand(10,20);
    $masyvas=[];
    for ($i=0; $i < $length ; $i++) { 
        if ($i === $length - 1){
            $masyvas[] = masyvSukurt();
        }else{
            $masyvas[] = rand(0, 10);
        }
    }
    return $masyvas;
}
// _d(masyvSukurt(), 'masyvasSukurt');

$length = rand(10,20);
for ($i=0; $i < $length ; $i++) { 
    if ($i === $length - 1){
    $masyvas7[] = masyvSukurt();
    }else{
     $masyvas7[] = rand(0, 10);
    }
}

_d($masyvas7, 'masyvas7');
echo '<br>masyvas7<br>';
print_r($masyvas7);



// echo '-------- -------- 07 ---vaigaudas----- --------<br>';

// function generate($r)
// {
//     static $i = 1;
//     if ($i <= $r) {
//         $z = rand(10, 20);
//         foreach (range(1, $z) as $key => $_) {
//             if ($key == ($z - 1) && $i == $r) {
//                 $arr[] = 0;
//             } elseif ($key == ($z - 1) && $i != $r) {
//                 $i++;
//                 $arr[] = generate($r);
//             } else {
//                 $arr[] = rand(0, 10);
//             }
//         }
//         return $arr;
//     }
// }

// // echo '-------- -------- 07 ---irmantas----- --------<br>';
// function doArray($limit) {
//     if (--$limit < 0) {
//         return 0;
//     }
//     $masyvas = [];
//     $random = rand(10, 20);
//         foreach(range(1, $random) as $key => $value) {
//             if($random - 1 == $key) {
//                 $masyvas[] = doArray($limit);
//             } else {
//                 $masyvas [] = rand(0, 10);
//             }
//         }
//     return $masyvas;
// }


// _dc(doArray(rand(10, 30)), '7 uzduotis');


// echo '-------- -------- 07 ---tomo----- --------<br>';

// function doArray($doArrayCount)
// {
//     // $count = rand(10, 20);
//     $count = 6;
//     foreach (range(1, $count - 1) as $value) {
//         $masyvas[] = rand(0, 10);
//     }
//     $masyvas[] = 'miau';

//     if ($doArrayCount > 0) {
//         $masyvas[$count - 1] = doArray(--$doArrayCount);
//     }
//     return $masyvas;
// }
// // $countToGenerate = rand(10, 30);
// $countToGenerate = 5;


// $masyvas7 = doArray($countToGenerate - 1);
// _d($masyvas7, '7');
// print_r($masyvas7);
// echo '<br><br>';




//8.	Suskaičiuokite septinto uždavinio elementų, 
//kurie nėra masyvai, sumą. Skaičiuoti reikia visuose 
//masyvuose ir submasyvuose.
// echo '<br>','--------- 8 ---------?', '<br>';
// $sum = 0;
// function suma($masyvas){
//     static $sum = 0;
//     foreach ($masyvas as $value) {
//         // if(is_array($value)){
//         //     suma($masyvas);
//         // } else {
//             $sum += $value; 
//             echo "sum 1 : $sum<br>";
            
//             if(is_array($value)){
//             suma($masyvas);
//         }
//     }
//     echo "sum: $sum";
//     return $sum;
// }
// // print_r(suma($masyvas7));
// _d(suma($masyvas7));




// echo '-------- -------- 08 ---irmanto----- --------<br>';
// function calc($masyvas) {
//     $sum = 0;
//     foreach($masyvas as $key => $value) {
//         if(is_array($value)) {
//             cal($value);
//         } else {
//             $sum += $value;
//         }
//     }
//     return $sum;
// } 
// _d(calc($masyvas), '8 uzduotis');


// // echo '-------- -------- 08 ---kamile----- --------<br>';
// function masyvuSuma($m){
//     static $sum = 0;
//     foreach($m as $value){
//     if(!is_array($value)){
//     $sum += $value;
//     } else {
//     masyvuSuma($value);
//     }
//     }
//     return $sum;
//     }


// // // echo '-------- -------- 08 ---tomas----- --------<br>';
// function sumRecursiveArray($array)
// {
//     static $sum = 0;
//     foreach ($array as $value) {
//         if (!is_array($value)) {
//             $sum += $value;
//         } else {
//             sumRecursiveArray($value);
//         }
//     }
//     return $sum;
// }

// _d(sumRecursiveArray($masyvas3), '6-8');

//9.	Sugeneruokite masyvą iš trijų elementų, kurie yra 
//atsitiktiniai skaičiai nuo 1 iki 33. Jeigu tarp trijų 
//paskutinių elementų yra nors vienas ne pirminis skaičius, 
//prie masyvo pridėkite dar vieną elementą- atsitiktinį skaičių 
//nuo 1 iki 33. Vėl patikrinkite pradinę sąlygą ir jeigu reikia 
//pridėkite dar vieną elementą. Kartokite, kol sąlyga nereikalaus 
//pridėti elemento. 

// echo '<br>','--------- 9 ---kamile------?', '<br>';

// function galeNebutuPirminiu(&$m){
//     for($i = count($m) - 1; $i > count($m) - 4; $i--){
//     if(dalikliai($m[$i]) != 0){
//     $m[] = rand(1, 33);
//     galeNebutuPirminiu($m);
//     }
//     }
//     return $m;
//     }

    // echo '<br>','--------- 9 ---tomas-----', '<br>';
    // do {
    //     $last3Prime = true;
    //     for ($i = count($masyvas4) - 1; $i >= count($masyvas4) - 3; $i--) {
    //         if (test($masyvas4[$i]) !== 0) {
    //             $last3Prime = false;
    //             $masyvas4[] = rand(1, 33);
    //         }
    //     }
    // } while (!$last3Prime);
    
    // _dc($masyvas4);


//10.	Sugeneruokite masyvą iš 10 elementų, kurie yra masyvai 
//iš 10 elementų, kurie yra atsitiktiniai skaičiai nuo 1 iki 100. 
//Jeigu tokio didelio masyvo (ne atskirai mažesnių) pirminių 
//skaičių vidurkis mažesnis už 70, suraskite masyve mažiausią 
//skaičių (nebūtinai pirminį) ir prie jo pridėkite 3. 
//Vėl paskaičiuokite masyvo pirminių skaičių vidurkį ir jeigu 
//mažesnis nei 70 viską kartokite. 
echo '<br>','--------- 10 ---------?', '<br>';