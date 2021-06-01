
<?php
/*
4.	Nupieškite kvadratą iš “*”, kurio kraštines sudaro 
100 “*”. Panaudokite css stilių, kad kvadratas ekrane 
atrodytų kvadratinis.
* * * * * * * * * * *
* * * * * * * * * * *
* * * * * * * * * * *
* * * * * * * * * * *
* * * * * * * * * * *
* * * * * * * * * * *
* * * * * * * * * * *
*/

echo '<br>','<h3>--------- 4 ---------</h3>', '<br>','<br>';

$kvadratas = '';
$ilgis = 50;

for ($i = 0; $i < $ilgis; $i++) { 
    $kvadratas = '';
    for ($m = 0; $m < $ilgis; $m++) { 
        $kvadratas .= '*';
    }
    echo "<div style='line-height: 11px; font-size: 22px;'>$kvadratas</div>";
    //echo $kvadratas;
}


// $string = '';
// $columnWidth = 10;
// for ($ii = 0; $ii < $columnWidth; $ii++) {
//     $string = '';
//     for ($i = 0; $i < $columnWidth; $i++) {
//         $string = $string . '*';
//     }
//     echo "<div style='color: blue; line-height: 7px; font-size: 14px;'>$string</div>";
// }
// echo '<br><br>';
