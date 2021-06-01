<?php

/*
1.	Naršyklėje nupieškite linija iš 400 “*”. 
a)	Naudodami css stilių “suskaldykite” 
liniją taip, kad visos žvaigždutės matytųsi ekrane;
b)	Programiškai “suskaldykite” žvaigždutes taip, 
kad vienoje eilutėje nebūtų daugiau nei 50 “*”; 
*/
echo '<br>','<h3>--------- 1 ---------</h3>', '<br>','<br>';
$linija = '';
$ilgis = 400;

for ($i=0; $i < $ilgis; $i++) {
    $linija .= '*';
}
echo $linija;

echo '<h3>--- a)---</h3>';
echo "<p style = 'overflow-wrap: break-word;'>$linija</p>";

echo '<h3>--- b)---</h3>';

$plotis = 50;
for ($i = 0; $i < $ilgis / $plotis; $i++) {
    $linija = '';
    for ($m = 0; $m < $plotis; $m++) {
        $linija = $linija . '*';
    }
    echo "<h5 style='color: blue; overflow-wrap: break-word;'>$linija</h5>";
}