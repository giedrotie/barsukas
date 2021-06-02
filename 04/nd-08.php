
<?php
/*
8.	Reikia nupaišyti pilnavidurį rombą, taip pat, kaip ir pilnavidurį kvadratą 
(https://lt.wikipedia.org/wiki/Rombas), kurio aukštis 21 eilutė. Reikia padaryti, 
kad kiekviena rombo žvaigždutė būtų atsitiktinės RGB spalvos 
(perkrovus puslapį spalvos turi keistis).
*/

echo '<br>','<h3>--------- 8 ---------</h3>', '<br>','<br>';

$aukstis = 21;
$puse = ($aukstis+1) / 2 ;
echo '<div style="text-align:center;>';
for ($i = 0 ; $i<$puse; $i++)
{
    for ($j = 0 ; $j<$i; $j++)
    {   
        echo '<span style="color: rgb(' . rand(0,255) . ',' . rand(0,255) . ',' . rand(0,255) . '); padding: 5px;">*</span>';
    }
    echo '<br>';
}
for ($i = $puse ; $i>0; $i--){
    for ($j = $i ; $j> 0; $j--){
        echo '<span style="padding: 5px;">*</span>';
    }
    echo '<br>';
}
echo '</div>';



// Height and width adjustable Rhombus


echo '<br>','<h3>--------- 8 ----Tomo var-----</h3>', '<br>','<br>';
$dHorizontalOfRhombus = 101;
$dVerticalOfRhombus = 30;
$diagRatio = $dVerticalOfRhombus / $dHorizontalOfRhombus;

echo '<div style="text-align:center;">';
for ($ii = 0; $ii < $dVerticalOfRhombus; $ii++) {
    for ($i = 0; $i < $dHorizontalOfRhombus; $i++) {
        if ($ii >= $diagRatio  * $i + 1 && $ii <= $diagRatio  * ($dHorizontalOfRhombus - $i) - 1) {
            echo '<span style="line-height: 3px; font-size: 16px; color: rgb(' . rand(0,255) . ',' . rand(0,255) . ',' . rand(0,255) . ');">*</span>';
        }
    }
    echo '<span style="font-size: 1px;"><br></span>';
}
echo '</div><br>';



echo '<br>','<h3>--------- 8 ----Irmanto var-----</h3>', '<br>','<br>';

echo "<div style='width: 300px; height: 300px; text-align: center; display: inline-block;'>";

for ($i=1; $i < 12 ; $i++) {
    $times = 0;
    while ($times < $i) {
        echo "<span style='margin: 0; color: rgb(" . rand(0,255) . "," . rand(0,255) . "," . rand(0,255) . "); font-size: 30px; line-heigh: 3px; height: 30px'> * </span>";
        $times++;
    }

    $times = 0;
    echo '<br>';
}

for ($i=10; $i > 0 ; $i--) { 
    $times = 0;
    while ($times < $i) {
        echo "<span style='margin: 0; color: rgb(" . rand(0,255) . "," . rand(0,255) . "," . rand(0,255) . "); font-size: 30px; line-heigh: 3px; height: 30px'> * </span>";
        $times++;
    }
    $times = 0;
    echo '<br>';
}
echo '</div>';



echo '<br>','<h3>--------- 8 ----Kamiles var-----</h3>', '<br>','<br>';

$rombo_plotis = 1;
$dideja = true;

echo "<div style='text-align:center; letter-spacing: 11px;>'";

for($i = 0; $i < 21; $i++){
for($o = 0; $o < $rombo_plotis; $o++){

echo "<span style='color:rgb(" . rand(0,255) .", ". rand(0,255) .", " . rand(0,255) .");'>*</span>";
}

if($rombo_plotis === 11){
$dideja = false;
}

if($dideja){
$rombo_plotis++;
} else {
$rombo_plotis--;
}
echo '<br>';
}

echo '</div>';


echo '<br>','<h3>--------- 8 ----Audriaus var-----</h3>', '<br>','<br>';

echo '<div class=\'rombas\'>';

$len = 21;
for($x = 0; $x < $len; $x++){
    echo '<br>';
    for($y = 0; $y < $len; $y++){
        if(($x + $y >= 10 && $x - $y <= 10) && 
           ($x + 10 >= $y) && 
           ($x + $y <= 30)){
               echo '<span style="color: rgb(',rand(0, 255),', ',rand(0, 255),', ',rand(0, 255),');">*</span>';
        }else { echo "<span style=\"opacity: 0\">_</span>"; }
    }
}
echo '</div>';