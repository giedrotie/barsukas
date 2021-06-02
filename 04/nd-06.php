
<?php
/*
6.	Metam monetą. Monetos kritimo rezultatą imituojam 
rand() funkcija, kur 0 yra herbas, o 1 - skaičius. 
Monetos metimo rezultatus išvedame į ekraną atskiroje 
eilutėje: “S” jeigu iškrito skaičius ir “H” jeigu herbas. 
Suprogramuokite keturis skirtingus scenarijus kai monetos metimą stabdome:
a)	Iškritus herbui;
b)	Tris kartus iškritus herbui;
c)	Tris kartus iš eilės iškritus herbui;
*/


echo '<br>','<h3>--------- 6 ---------</h3>', '<br>','<br>';


$moneta = rand(0, 1);
echo $moneta.'<br>';
if($moneta == false){
    echo 'S';
} else {
    echo 'H';
}

echo '<br>','<h3>--------- 6 a---------</h3>', '<br>','<br>';
$metimai = '';
while ($metimai !== 'H'){
    if (rand(0, 1) === 0){
        $metimai = 'H';
    } else {
        $metimai = 'S';
    }
    echo $metimai . ' ';
}
echo '<br>','<h3>--------- 6 b---------</h3>', '<br>','<br>';
   
$metimai = '';
$herbuKiekis = 0;

while ($herbuKiekis !== 3){
    if (rand(0, 1) === 0){
        $metimai = 'H';
        $herbuKiekis++;
    } else {
        $metimai = 'S';
    }
    echo $metimai . ' ';
}

echo '<br>','<h3>--------- 6 c---------</h3>', '<br>','<br>';
/*
8 c)	Tris kartus iš eilės iškritus herbui;
*/
$metimai = '';
$herbuKiekis = 0;

while ($herbuKiekis !== 3){
    if (rand(0, 1) === 0){
        $metimai = 'H';
        ++$herbuKiekis;
    } else {
        $metimai = 'S';
        $herbuKiekis = 0;
    }
    echo $metimai . ' ';
}




//c
echo '<br>','<h3>--------- 6 kitas var--------</h3>', '<br>','<br>';
echo '<br>';

$h = 0;

do {
    $coin = rand(0, 1);
    if ($coin === 1) {
        echo 'S';
        $h = 0;
    } else {
        echo 'H';
        $h++;
    }
} while ($h < 3);










// echo '<br>';
// echo '<br>';
// $result = '';
// $hCount = 0;
// while ($hCount !== 3) {
//     $result = rand(0, 1) === 0 ? 'H' : 'S';
//     $hCount = $result === 'H' ? ++$hCount : 0;
//     echo $result . ' ';
// }