<?php
/*
10.	Sugeneruokite 10 skaičių masyvą pagal taisyklę: 
Du pirmi skaičiai- atsitiktiniai nuo 5 iki 25. Trečias, 
pirmo ir antro suma. Ketvirtas- antro ir trečio suma. 
Penktas trečio ir ketvirto suma ir t.t.
*/
echo '<br>','--------- 10 ---------', '<br>','<br>';
$masyvas = [];
$masyvoIlgis = 10;
$skaicius1 = rand(5,25);
$skaicius2 = rand(5,25);



for ($i=2; $i < $masyvoIlgis; $i++) { 
    # code...
}


function skaiciavimas($skaicius1, $skaicius2,$masyvoIlgis){
    $naujaReiksme = $skaicius1 + $skaicius2;
    if($naujaReiksme > $masyvoIlgis) {
        echo "skaicius $skaicius2";
    }else {
        skaiciavimas($skaicius2, $naujaReiksme, $masyvoIlgis);
    }
}

$masyvas = skaiciavimas($skaicius1, $skaicius2,$masyvoIlgis);
print_r($masyvas);






/* Print fiboancci series upto 12 elements. */  
$num = 12;  
echo "<h3>Fibonacci series using recursive function:</h3>";  
echo "\n";  
/* Recursive function for fibonacci series. */  
function series($num){  
    if($num == 0){  
    return 0;  
    }else if( $num == 1){  
return 1;  
}  else {  
return (series($num-1) + series($num-2));  
}   
}  
/* Call Function. */  
for ($i = 0; $i < $num; $i++){  
echo series($i);  
echo "\n";  



$num = 0;  
$n1 = 0;  
$n2 = 1;  
echo "<h3>Fibonacci series for first 12 numbers: </h3>";  
echo "\n";  
echo $n1.' '.$n2.' ';  
while ($num < 10 ){  
    $n3 = $n2 + $n1;  
    echo $n3.' ';  
    $n1 = $n2;  
    $n2 = $n3;  
    $num = $num + 1; 
}
