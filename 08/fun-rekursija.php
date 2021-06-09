<?php

function recursive($num){
    echo $num, '<br>';
    if($num < 5){
        //Kviečiame save. Padidiname numerį vienetu.
        return recursive($num + 1);
    }
}
$startNum = 1;
recursive($startNum);

echo '<br>','--------- fun ieinam - iseinam---------', '<br>';

function recursive1($num){
    echo $num, '<br>';
    if($num < 5){
        //Kviečiame save. Padidiname numerį vienetu.
        recursive1($num + 1);
    }
    echo "Iseinam su $num <br>";
}
$startNum = 1;
recursive1($startNum);

echo '<br>','--------- callback---------', '<br>';


function doSort($a, $b) {
    return $a[0] <=> $b[0];
}