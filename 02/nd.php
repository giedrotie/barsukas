<?php

echo '*** ------ 1 ----- ***';
echo '<br>';

$vardas = 'Giedre';
$pavarde = 'Magie';
$gimimo_metai = 1990;
$einamieji_metai = 2021;

echo "As esu $vardas $pavarde. Man yra ". $einamieji_metai - $gimimo_metai ." metai.";
echo '<br>';

echo '<br>';
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

echo '<br><br>';
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

echo '<br><br>';
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

echo '<br><br>';
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

echo '<br><br>';
echo '*** ------ 6 ----- ***';
echo '<br>';
$variable = rand(1, 6);
echo "<h3>$variable</h3>";

echo '<br><br>';
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

// $color1 = $number1 < 0 ? 'green' : ($number1 > 0 ? 'blue' : 'red');
// $color2 = $number2 < 0 ? 'green' : ($number2 > 0 ? 'blue' : 'red');
// $color3 = $number3 < 0 ? 'green' : ($number3 > 0 ? 'blue' : 'red');

echo "<font color='$color1'>Skaicius1 = " . $number1 . "; </font><br>";
echo "<font color='$color2'>Skaicius2 = " . $number2 . "; </font><br>";
echo "<font color='$color3'>Skaicius3 = " . $number3 . "; </font><br>";

echo '<br><br>';
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

echo '<br><br>';
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

echo '<br><br>';
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


echo '<br><br>';
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
