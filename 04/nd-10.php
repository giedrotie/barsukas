<?php
/*
10.	Sumodeliuokite vinies kalimą. Įkalimo gylį sumodeliuokite pasinaudodami rand() funkcija. 
Vinies ilgis 8.5cm (pilnai sulenda į lentą).
a)	“Įkalkite” 5 vinis mažais smūgiais. Vienas smūgis vinį įkala 5-20 mm. 
Suskaičiuokite kiek reikia smūgių.
*/
echo '<br>','<h3>--------- 10 a---------</h3>', '<br>','<br>';

$viniesIlgis = 85;
for ($i=1; $i <= 5; $i++) { 
    $kalimoGylis = 0;
    $smugiuKiekis = 0;
    do{
        $kalimoGylis += rand(5,20);
        $smugiuKiekis++;
    }while ($kalimoGylis < $viniesIlgis);
    echo "$i vinis. Smugiu kiekis: $smugiuKiekis <br>";
}
/*
b)	“Įkalkite” 5 vinis dideliais smūgiais. Vienas smūgis vinį įkala 20-30 mm, 
bet yra 50% tikimybė (pasinaudokite rand() funkcija tikimybei sumodeliuoti), 
kad smūgis nepataikys į vinį. Suskaičiuokite kiek reikia smūgių.
*/
echo '<br>','<h3>--------- 10 b---------</h3>', '<br>','<br>';

$viniesIlgis = 85;
for ($i=1; $i <= 5; $i++) { 
    $kalimoGylis = 0;
    $smugiuKiekis = 0;
    do{
        if (rand(0,1)===0){
            $kalimoGylis += rand(20,30);
        }
        //echo "Kiekvieno do kalimo gylis $kalimoGylis<br>";
        $smugiuKiekis++;
    }while ($kalimoGylis < $viniesIlgis);
    echo "$i vinis. Smugiu kiekis: $smugiuKiekis <br>";
}