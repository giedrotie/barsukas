<?php
/*
1.	Sukurkite 4 kintamuosius, kurie saugotų jūsų vardą,
 pavardę, gimimo metus ir šiuos metus (nebūtinai tikrus). 
 Parašykite kodą, kuris pagal gimimo metus paskaičiuotų 
 jūsų amžių ir naudodamas vardo ir pavardės kintamuosius 
 atspausdintų tokį sakinį :
"Aš esu Vardenis Pavardenis. Man yra XX metai(ų)".
*/
echo '*** ------ 1 ----- ***';
echo '<br>';

$vardas = 'Giedre';
$pavarde = 'Magie';
$gimimo_metai = 1990;
$einamieji_metai = 2021;

echo "As esu $vardas $pavarde. Man yra ". $einamieji_metai - $gimimo_metai ." metai.";
echo '<br>';


/*
2.	Naudokite funkcija rand(). Sukurkite du kintamuosius ir naudodamiesi 
funkcija rand() jiems priskirkite atsitiktines reikšmes nuo 0 iki 4. 
Didesnę reikšmę padalinkite iš mažesnės. Atspausdinkite rezultatą 
jį suapvalinę iki 2 skaičių po kablelio.
*/

echo '<br>'; echo '<br>'; echo '<br>';
echo '*** ------ 2 ----- ***';
echo '<br>';

$var1 = rand(0, 4);
$var2 = rand(0, 4);

if ($var1 > $var2) {
    if ($var2 !== 0) {
        $result = $var1 / $var2;
        echo "var1 = $var1; var2 = $var2. <br>";
        echo "Rezultatas: ". round($result, 2) . "";
    } else {
        echo "var1 = $var1; var2 = $var2. <br>";
        echo 'Mazesnis skaicius yra lygus 0. Dalyba negalima.';
    }
} else if ($var1 !==0) {
    $result = $var2 / $var1;
    echo "var1 = $var1; var2 = $var2. <br>";
    echo "Rezultatas: ". round($result, 2) . "";
    } else {
        echo "var1 = $var1; var2 = $var2. <br>";
        echo 'Mazesnis skaicius yra lygus 0. Dalyba negalima.';
    }

/*
3.	Naudokite funkcija rand(). Sukurkite tris kintamuosius ir naudodamiesi 
funkcija rand() jiems priskirkite atsitiktines reikšmes nuo 0 iki 25.
Raskite ir atspausdinkite kintąmąjį turintį vidurinę reikšmę.
*/
echo '<br>'; echo '<br>'; echo '<br>';
echo '*** ------ 3 ----- ***';
echo '<br>';

$var1 = rand(0, 25);
$var2 = rand(0, 25);
$var3 = rand(0, 25);

if ($var1 > $var2 && $var1 < $var3 || $var1 < $var2 && $var1 > $var3) {
    $result = $var1;
    echo "Atsitiktiniai skaiciai: var1 = $var1, var2 = $var2, var3 = $var3.<br>";
    echo "Vidurinis skaicius: $result";
} elseif ($var2 > $var1 && $var2 < $var3 || $var2 < $var1 && $var2 > $var3 ) {
    $result = $var2;
    echo "Atsitiktiniai skaiciai: var1 = $var1, var2 = $var2, var3 = $var3.<br>";
    echo "Vidurinis skaicius: $result";
} elseif ($var3 > $var2 && $var3 < $var1 || $var3 < $var2 && $var3 > $var1) {
    $result = $var3;
    echo "Atsitiktiniai skaiciai: var1 = $var1, var2 = $var2, var3 = $var3.<br>";
    echo "Vidurinis skaicius: $result";
} else {
    echo "Atsitiktiniai skaiciai: var1 = $var1, var2 = $var2, var3 = $var3.<br>";
    echo 'Vidurinio skaiciaus nera!';
}   




/*
4.	Įvedami skaičiai -a, b, c –kraštinių ilgiai, trys kintamieji 
(naudokite rand() funkcija nuo 1 iki 10). Parašykite PHP programą, 
kuri nustatytų, ar galima sudaryti trikampį ir atsakymą atspausdintų. 
*/

echo '<br>'; echo '<br>'; echo '<br>';
echo '*** ------ 4 ----- ***';
echo '<br>';

$a = rand(1, 10);
$b = rand(1, 10);
$c = rand(1, 10);

if ( $a + $b > $c || $b + $c > $a || $c + $b > $a) {
    echo "Krastines a = $a, b = $b, c = $c; <br> Trikampi sudaryti GALIMA.";
} else {
    echo "Krastines a = $a, b = $b, c = $c; <br> Trikampi sudaryti NEGALIMA.";
}



/*
5.	Sukurkite keturis kintamuosius ir rand() funkcija sugeneruokite jiems 
reikšmes nuo 0 iki 2. Suskaičiuokite kiek yra nulių, vienetų ir dvejetų. 
(sprendimui masyvo nenaudoti).
*/
echo '<br>'; echo '<br>'; echo '<br>';
echo '*** ------ 5 ----- ***';
echo '<br>';

$var1 = rand(0, 2);
$var2 = rand(0, 2);
$var3 = rand(0, 2);
$var4 = rand(0, 2);

$result0 = 0;
$result1 = 0;
$result2 = 0;

if ($var1 === 0){
    $result0++;
} elseif($var1 === 1){
    $result1++;
} else {
    $result2++;
}
if ($var2 === 0){
    $result0++;
} elseif($var2 === 1){
    $result1++;
} else {
    $result2++;
}
if ($var3 === 0){
    $result0++;
} elseif($var3 === 1){
    $result1++;
} else {
    $result2++;
}
if ($var4 === 0){
    $result0++;
} elseif($var4 === 1){
    $result1++;
} else {
    $result2++;
}
echo "Kintamieji var1 = $var1, var2 = $var2, var3 = $var3, var4 = $var4.<br>";
echo "Nuliu kiekis: $result0, vienetu kiekis: $result1, dvejetu kiekis: $result2.";
echo '<br>';

//kitas var 5.
echo '<br>', '----kitas 5var----','<br>';
$pirmas = rand(0, 2);
$antras = rand(0, 2);
$trecias = rand(0, 2);
$ketvirtas = rand(0, 2);

echo "$pirmas, $antras, $trecias, $ketvirtas";
echo '<br>'; echo '<br>';

$counter0 = 0;
$counter1 = 0;
$counter2 = 0;

($pirmas === 0) ? $counter0++ : ( ($pirmas === 1) ? $counter1++ : $counter2++ );
($antras === 0) ? $counter0++ : ( ($antras === 1) ? $counter1++ : $counter2++ );
($trecias === 0) ? $counter0++ : ( ($trecias === 1) ? $counter1++ : $counter2++ );
($ketvirtas === 0) ? $counter0++ : ( ($ketvirtas === 1) ? $counter1++ : $counter2++ );

echo "nulių yra - $counter0; vienetų yra - $counter1; dvejetų yra - $counter2";




/*
6.	Naudokite funkcija rand(). Sugeneruokite atsitiktinį skaičių nuo 1 iki 6 
ir jį atspausdinkite atitinkame h tage. Pvz skaičius 3- rezultatas: <h3>3</h3>
*/

echo '<br>'; echo '<br>'; echo '<br>';
echo '*** ------ 6 ----- ***';
echo '<br>';
$variable = rand(1, 6);
echo "<h$variable>$variable</h$variable>";

/*
7.	Naudokite funkcija rand(). Atspausdinkite 3 skaičius nuo -10 iki 10. 
Skaičiai mažesni už 0 turi būti žali, 0 - raudonas, didesni už 0 mėlyni. 
*/

echo '<br>'; echo '<br>'; echo '<br>';
echo '*** ------ 7 ----- ***';
echo '<br>';
$number1 = rand(-10, 10);
$number2 = rand(-10, 10);
$number3 = rand(-10, 10);

if ($number1 < 0){
    $color1 = 'green';
} else if ($number1 > 0) {
    $color1 = 'blue';
} else {
    $color1 = 'red';
}

if ($number2 < 0){
    $color2 = 'green';
} else if ($number2 > 0) {
    $color2 = 'blue';
} else {
    $color2 = 'red';
}

if ($number3 < 0){
    $color3 = 'green';
} else if ($number3 > 0) {
    $color3 = 'blue';
} else {
    $color3 = 'red';
}

echo "<font color='$color1'>Skaicius1 = " . $number1 . "; </font><br>";
echo "<font color='$color2'>Skaicius2 = " . $number2 . "; </font><br>";
echo "<font color='$color3'>Skaicius3 = " . $number3 . "; </font><br>";

// $color1 = $number1 < 0 ? 'green' : ($number1 > 0 ? 'blue' : 'red');
// $color2 = $number2 < 0 ? 'green' : ($number2 > 0 ? 'blue' : 'red');
// $color3 = $number3 < 0 ? 'green' : ($number3 > 0 ? 'blue' : 'red');



/*
8.	Įmonė parduoda žvakes po 1 EUR. Perkant daugiau kaip už 1000 EUR 
taikoma 3 % nuolaida, daugiau kaip už 2000 EUR - 4 % nuolaida. 
Parašykite programą, kuri skaičiuos žvakių kainą ir atspausdintų 
atsakymą kiek žvakių ir kokia kaina perkama. Žvakių kiekį generuokite 
rand() funkcija nuo 5 iki 3000.
*/


echo '<br>'; echo '<br>'; echo '<br>';
echo '*** ------ 8 ----- ***';
echo '<br>';

$oneCandlePrice = 1;
$candleCount = rand(5, 3000);
$totalPrice = $oneCandlePrice * $candleCount;

if ($candleCount > 1000){
    $totalPrice = $candleCount * ($oneCandlePrice - 0.03);
}
if ($candleCount > 2000){
    $totalPrice = $candleCount * ($oneCandlePrice - 0.04);
}
echo "Perkamas zvakiu kiekis: $candleCount. Kaina uz toki kieki: $totalPrice.";

echo '<br>';
echo ' *** ------ 8 --kitas var--- ***<br>';

$zvakiuKiekis = rand(5, 3000);

if ($zvakiuKiekis<1000){
    echo "kiekis: $zvakiuKiekis, nuolaida = 0, kaina: $zvakiuKiekis";
}
if ($zvakiuKiekis>= 1000 && $zvakiuKiekis<2000) {
    echo 'kiekis: '. $zvakiuKiekis.' , nuolaida: '.$zvakiuKiekis * 0.03 . ' , kaina: '. $zvakiuKiekis - ($zvakiuKiekis * 0.03);
}
if ($zvakiuKiekis>= 2000) {
    echo 'kiekis: '. $zvakiuKiekis. ' , nuolaida: '.$zvakiuKiekis * 0.04 .' , kaina: '. $zvakiuKiekis - ($zvakiuKiekis * 0.04);
}


/*
9.	Naudokite funkcija rand(). Sukurkite tris kintamuosius su atsitiktinėm 
reikšmėm nuo 0 iki 100. Paskaičiuokite jų aritmetinį vidurkį. Ir aritmetinį 
vidurkį atmetus tas reikšmes, kurios yra mažesnės nei 10 arba didesnės nei 90. 
Abu vidurkius atspausdinkite. Rezultatus apvalinkite iki sveiko skaičiaus.
*/



echo '<br>'; echo '<br>'; echo '<br>';
echo '*** ------ 9 ----- ***';
echo '<br>';

$var1 = rand(0, 100);
$var2 = rand(0, 100);
$var3 = rand(0, 100);

echo "Kintamieji: var1 = $var1, var2 = $var2, var3 = $var3. <br>";

$simpleAvg = ($var1 + $var2 + $var3) / 3;
$superAvg = 0;
echo "Paprastas vidurkis: " . round($simpleAvg) . "<br>";
// echo 'round($simpleAvg)';

if ($var1 < 10 || $var1 > 90){
    $superAvg = ($var2 + $var3)/2;
    echo "Kintamasis var1 <10 arba >90.<br>";
    echo "Super vidurkis: " . round($superAvg) . "<br>";
} elseif ($var2 < 10 || $var2 > 90){
    $superAvg = ($var1 + $var3)/2;
    echo "Kintamasis var2 yra <10 arba >90.<br>";
    echo "Super vidurkis: " . round($superAvg) . "<br>";
} elseif ($var3 < 10 || $var3 > 90){
    $superAvg = ($var1 + $var2)/2;
    echo "Kintamasis var3 yra <10 arba >90.<br>";
    echo "Super vidurkis: " . round($superAvg) . "<br>";
} elseif ($var1 < 10 || $var1 > 90 && $var2 < 10 || $var2 > 90){
    $superAvg = $var3;
    echo "Kintamieji var1 ir var2 yra <10 arba >90.<br>";
    echo "Super vidurkis yra skaicius var3: $superAvg";
} elseif ($var1 < 10 || $var1 > 90 && $var3 < 10 || $var3 > 90){
    $superAvg = $var2;
    echo "Kintamieji var1 ir var3 yra <10 arba >90.<br>";
    echo "Super vidurkis yra skaicius var2: $superAvg";
} elseif ($var2 < 10 || $var2 > 90 && $var3 < 10 || $var3 > 90){
    $superAvg = $var1;
    echo "Kintamasieji var2 ir var3 yra <10 arba >90.<br>";
    echo "Super vidurkis yra skaicius var1: $superAvg";
} elseif ($var1 < 10 || $var1 > 90 && $var3 < 10 || $var3 > 90  && $var2 < 10 || $var2 > 90){
    echo 'Visi skaiciai yra <10 arba >90, todel SUPER VIDURKIS NESKAICIUOJAMAS!';
}




/*
10.	Padarykite skaitmeninį laikrodį, rodantį valandas, 
minutes ir sekundes. Valandom, minutėm ir sekundėm sugeneruoti panaudokite 
funkciją rand(). Sugeneruokite skaičių nuo 0 iki 300. Tai papildomos sekundės. 
Skaičių pridėkite prie jau sugeneruoto laiko. Atspausdinkite laikrodį prieš 
ir po sekundžių pridėjimo ir pridedamų sekundžių skaičių.
*/


echo '<br>'; echo '<br>'; echo '<br>';
echo '*** ------ 10 ----- ***';
echo '<br>';

$hours = rand(0, 23);
$minutes = rand(0, 59);
$seconds = rand(0, 59);
$randomSeconds = rand(0, 300);

echo "Pradinis laikas yra $hours : $minutes : $seconds <br>";
echo "Pridetos sekundes: $randomSeconds <br>";

$seconds = $seconds + $randomSeconds;
echo "<font color='grey'>Sekundziu is viso: $seconds </font><br>";
if ($seconds > 60){
    $newMinutes = floor($seconds / 60);
    echo "<font color='grey'> Naujos minutes: $newMinutes </font><br>";
    $leftSeconds = $seconds % 60;
    echo "<font color='grey'>Likusios sekundes: $leftSeconds</font><br>";
    $seconds = $leftSeconds;
}

$totalMinutes = $minutes + $newMinutes;
if ($totalMinutes > 59){
    $totalMinutes -= 60;
    $hours++;
}
if ($leftSeconds < 0) {
    $leftSeconds = $newSeconds;
}

echo "Naujas laikas yra $hours : $totalMinutes : $seconds <br>";


echo '<br>'; echo '<br>'; echo '<br>';
echo '*** ------ 10 ---pilnas var-- ***';
echo '<br>';

$hours = rand(0, 23);
$minutes = rand(0, 59);
$seconds = rand(0, 59);

$length = 2;

$hours = substr(str_repeat(0, $length).$hours, -$length);
$minutes = substr(str_repeat(0, $length).$minutes, -$length);
$seconds = substr(str_repeat(0, $length).$seconds, -$length);

echo "<h1>$hours : $minutes : $seconds</h1>";

$extraSeconds = rand(0, 300);

echo "Papildomos sekundės: $extraSeconds";
echo '<br>';

$totalTime = $seconds + $minutes * 60 + $hours * 3600 + $extraSeconds;

$seconds = $totalTime % 60;
$minutes = (($totalTime - $seconds) / 60) % 60 ;
$hours = (($totalTime - $seconds) / 60 - $minutes) / 60;

$hours = substr(str_repeat(0, $length).$hours, -$length);
$minutes = substr(str_repeat(0, $length).$minutes, -$length);
$seconds = substr(str_repeat(0, $length).$seconds, -$length);

echo "<h1>$hours : $minutes : $seconds</h1>";



/*
11.	Naudokite funkcija rand(). Sugeneruokite 6 kintamuosius 
su atsitiktinem reikšmėm nuo 1000 iki 9999. Atspausdinkite reikšmes viename strige,
išrūšiuotas nuo didžiausios iki mažiausios, atskirtas tarpais. 
Naudoti ciklų ir masyvų NEGALIMA.
*/





echo '<br>'; echo '<br>'; echo '<br>';
echo '*** ------ 11 ----- ***';
echo '<br>';
$var1 = rand(1000, 9999);
$var2 = rand(1000, 9999);
$var3 = rand(1000, 9999);
$var4 = rand(1000, 9999);
$var5 = rand(1000, 9999);
$var6 = rand(1000, 9999);

echo "Pradines reiksmes: sk1 = $var1, sk2 = $var2, sk3 = $var3, sk4 = $var4, sk5 =$var5, sk6 = $var6. <br>";

if ($var1 < $var2){
    $tmp = $var1;
    $var1 = $var2;
    $var2 = $tmp;
}
if ($var1 < $var3){
    $tmp = $var1;
    $var1 = $var3;
    $var3 = $tmp;
}
if ($var1 < $var4) {
    $tmp = $var1;
    $var1 = $var4;
    $var4 = $tmp;
}
if($var1 < $var4) {
    $tmp = $var1;
    $var1 = $var4;
    $var4 = $tmp;
}
if($var1 < $var5) {
    $tmp = $var1;
    $var1 = $var5;
    $var5 = $tmp;
}
if($var1 < $var6) {
    $tmp = $var1;
    $var1 = $var6;
    $var6 = $tmp;
}
if ($var2 < $var3) {
    $tmp = $var2;
    $var2 = $var3;
    $var3 = $tmp;
}
if ($var2 < $var4) {
    $tmp = $var2;
    $var2 = $var4;
    $var4 = $tmp;
}
if ($var2 < $var5) {
    $tmp = $var2;
    $var2 = $var5;
    $var5 = $tmp;
}
if ($var3 < $var4){
    $tmp = $var3;
    $var3 = $var4;
    $var4 = $tmp;
}
if ($var3 < $var5){
    $tmp = $var3;
    $var3 = $var5;
    $var5 = $tmp;
}
if ($var3 < $var6) {
    $tmp = $var3;
    $var3 = $var6;
    $var6 = $tmp;
}
if ($var4 < $var5) {
    $tmp = $var4;
    $var4 = $var5;
    $var5 = $tmp;
}
if ($var5 < $var6) {
    $tmp = $var5;
    $var5 = $var6;
    $var6 = $tmp;
}
echo "Reiksmes sudeliotos mazejimo tvarka: $var1, $var2, $var3, $var4, $var5, $var6. <br>";
// dar reikia paversti stringa!!!!


echo '<br>'; echo '<br>'; echo '<br>';
echo '*** ------ 11 ----kitas var- ***';
echo '<br>';
$var1 = rand(1000, 9999);
$var2 = rand(1000, 9999);
$var3 = rand(1000, 9999);
$var4 = rand(1000, 9999);
$var5 = rand(1000, 9999);
$var6 = rand(1000, 9999);
echo "Skaičius1 = $var1; Skaičius2 = $var2; Skaičius3 = $var3; Skaičius4 = $var4; Skaičius5 = $var5; Skaičius6 = $var6.<br>";

$string = strval($var1) . ' ' . strval($var2) . ' ' . strval($var3) . ' ' . strval($var4) . ' ' . strval($var5) . ' ' . strval($var6) . ' ';
$stringParts = str_split($string, 5);
rsort($stringParts);
echo 'String of descending variables: ' . implode($stringParts) . '<br><br>';








