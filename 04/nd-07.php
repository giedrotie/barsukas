
<?php
/*
7.	Kazys ir Petras žaidžiai šaškėm. Petras surenka taškų kiekį nuo 10 iki 20, 
Kazys surenka taškų kiekį nuo 5 iki 25. Vienoje eilutėje išvesti žaidėjų vardus 
su taškų kiekiu ir “Partiją laimėjo: laimėtojo vardas”. 
Taškų kiekį generuokite funkcija rand(). 
Žaidimą laimi tas, kas greičiau surenka 222 taškus. 

Partijas kartoti tol, kol kažkuris žaidėjas pirmas surenka 222 arba daugiau taškų. //tol kol while ciklas
*/

echo '<br>','<h3>--------- 7 ---------</h3>', '<br>','<br>';

$petroTaskai = 0;
$kazioTaskai = 0;
$partijosLaimetojas ='';
$laimetojas = '';

while ($petroTaskai < 222 && $kazioTaskai < 222){
    $petras = rand(10, 20);
    $kazys = rand(5, 25);
    $petroTaskai += $petras;
    $kazioTaskai += $kazys;
    echo "Petro taskai: $petras, Kazio taskai: $kazys. ";
    if ($petras > $kazys){
        $partijosLaimetojas = 'Petras';
    } elseif ($kazys > $petras){
        $partijosLaimetojas = 'Kazys';
    } else {
        $partijosLaimetojas = 'Lygiosios';
    }
    echo "Partija laimejo: $partijosLaimetojas<br>";
    
    if ($petroTaskai > $kazioTaskai){
        $laimetojas = 'Petras';
    } elseif ( $kazioTaskai > $petroTaskai){
        $laimetojas = 'Kazys';
    } else {
        $laimetojas = 'Lygiosios';
    }
}

if ($laimetojas !== 'Lygiosios'){
    echo "<br>Viso zaidimo laimetojas: $laimetojas.<br> Kazio taskai: $kazioTaskai, Petro taskai: $petroTaskai<br><br>";
} else {
    echo "<br>Viso zaidimo laimetojo nera -  $laimetojas <br><br>";
}




// while ($petroTaskai < 222 && $kazioTaskai < 222){
//     $petras = rand(10, 20);
//     $kazys = rand(5, 25);
//     $petroTaskai += $petras;
//     $kazioTaskai += $kazys;
//     echo "Petro taskai: $petras, Kazio taskai: $kazys. ";
//     if ($petras > $kazys){
//         $partijosLaimetojas = 'Petras';
//     } elseif ($kazys > $petras){
//         $partijosLaimetojas = 'Kazys';
//     } else {
//         $partijosLaimetojas = 'Lygiosios';
//     }
//     echo "Partija laimejo: $partijosLaimetojas<br>";
    
//     if ($petroTaskai >= 222 || $kazioTaskai >= 222){
//         if ($petroTaskai > $kazioTaskai){
//             $laimetojas = 'Petras';
//         } elseif ( $kazioTaskai > $petroTaskai){
//             $laimetojas = 'Kazys';
//         } else {
//             $laimetojas = 'Lygiosios';
//         }
//         if ($laimetojas !== 'Lygiosios'){
//             echo "<br>Viso zaidimo laimetojas: $laimetojas.<br> Kazio taskai: $kazioTaskai, Petro taskai: $petroTaskai<br><br>";
//         } else {
//             echo "<br>Viso zaidimo laimetojo nera -  $laimetojas <br><br>";
//         }
//     }
// }
