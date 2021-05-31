<?php
/*
1.	Sukurti du kintamuosius. Jiems priskirti savo mylimo aktoriaus 
vardą ir pavardę kaip stringus (Jonas Jonaitis). Atspausdinti trumpesnį stringą.
*/
echo '------ 1 -----';
echo '<br>';

$name = 'Keanu';
$lastname = 'Reeves';

if (strlen($name) < strlen($lastname)){
    echo $name;
} else {
    echo $lastname;
}

/*
2.	Sukurti du kintamuosius. Jiems priskirti savo mylimo 
aktoriaus vardą ir pavardę kaip stringus. Vardą atspausdinti 
tik didžiosiom raidėm, o pavardę tik mažosioms.
*/
echo '<hr>', '<br>';
echo '------ 2 -----', '<br>';
echo '<br>';

$name = 'Keanu';
$lastname = 'Reeves';

echo strtoupper($name);
echo '<br>';
echo strtolower($lastname);

/*
3.	Sukurti du kintamuosius. Jiems priskirti savo mylimo 
aktoriaus vardą ir pavardę kaip stringus. Sukurti 
trečią kintamąjį ir jam priskirti stringą, sudarytą iš 
pirmų vardo ir pavardės kintamųjų raidžių. Jį atspausdinti.
*/
echo '<hr>', '<br>';
echo '------ 3 -----','<br>';
echo '<br>';

$name = 'Keanu';
$lastname = 'Reeves';
$nameFirstLetter = substr($name,0,1);
$lastnameFirstLetter = substr($lastname, 0,1);

$newString = $nameFirstLetter . $lastnameFirstLetter;
echo $newString;


/*
4.	Sukurti du kintamuosius. Jiems priskirti savo mylimo 
aktoriaus vardą ir pavardę kaip stringus. Sukurti trečią 
kintamąjį ir jam priskirti stringą, sudarytą iš trijų 
paskutinių vardo ir pavardės kintamųjų raidžių. Jį atspausdinti.
*/
echo '<hr>', '<br>';
echo '------ 4 -----','<br>';
echo '<br>';

$name = 'Keanu';
$lastname = 'Reeves';
$nameLast3Letters = substr($name,-3);
$lastnameLast3Letters = substr($lastname,-3);
$newString = $nameLast3Letters . $lastnameLast3Letters;

echo $newString;

/*
5.	Sukurti kintamąjį su stringu: “An American in Paris”. 
Jame visas “a” (didžiąsias ir mažąsias) pakeisti žvaigždutėm “*”. 
Rezultatą atspausdinti.
*/

echo '<hr>', '<br>';
echo '------ 5 -----','<br>';
echo '<br>';

$var = 'An American in Paris';
$result = str_ireplace('a','*',$var); // str_replace keistu tik mazasias a
echo $result;

/*
6.	Sukurti kintamąjį su stringu: “An American in Paris”. 
Suskaičiuoti visas “a” (didžiąsias ir mažąsias) raides. 
Rezultatą atspausdinti.
*/

echo '<hr>', '<br>';
echo '------ 6 -----','<br>';
echo '<br>';

$var = 'An American in Paris';
$var = strtolower($var);

echo substr_count($var, 'a', 0);

/*
7.	Sukurti kintamąjį su stringu: “An American in Paris”.
 Jame ištrinti visas balses. Rezultatą atspausdinti. 
 Kodą pakartoti su stringais: “Breakfast at Tiffany's”, 
 “2001: A Space Odyssey” ir “It's a Wonderful Life”.
*/
echo '<hr>', '<br>';
echo '------ 7 -----','<br>';
echo '<br>';

$originalString = 'An American in Paris';
$newString = str_ireplace(array('a','e','i','o','u','y'),'',$originalString);
echo $newString;
echo '<br>';

$originalString2 = "Breakfast at Tiffany's";
echo $newString2 = str_ireplace(array('a','e','i','o','u','y'),'',$originalString2);
echo '<br>';

$originalString3 = '2001: A Space Odyssey';
echo $newString3 = str_ireplace(array('a','e','i','o','u','y'),'',$originalString3);
echo '<br>';

$originalString4 = "It's a Wonderful Life";
echo $newString4 = str_ireplace(array('a','e','i','o','u','y'),'',$originalString4);
echo '<br>';

/*
8.	Stringe, kurį generuoja toks kodas: 
'Star Wars: Episode '.str_repeat(' ', rand(0,5)). rand(1,9) . ' - A New Hope'; 
Surasti ir atspausdinti epizodo numerį.
*/
echo '<hr>', '<br>';
echo '------ 8 -----','<br>';
echo '<br>';

$stringas = 'Star Wars: Episode '.str_repeat(' ', rand(0,5)). rand(1,9) . ' - A New Hope'; 
echo $stringas;
echo '<br>';
echo rand(1,9); // tik sitas rand rodo epizodo nr 
echo str_repeat(' ', rand(0,5)); // cia paraso tiek kartu nurodyta stringa kiek ismeta rand


/*
9.	Suskaičiuoti kiek stringe “Don't Be a Menace to South 
Central While Drinking Your Juice in the Hood” yra žodžių trumpesnių 
arba lygių nei 5 raidės. Pakartokite kodą su stringu “Tik nereikia 
gąsdinti Pietų Centro, geriant sultis pas save kvartale”.
*/

echo '<hr>', '<br>';
echo '------ 9 -----';
echo '<br>';

$stringas = "Don't Be a Menace to South Central While Drinking Your Juice in the Hood";

echo str_word_count($stringas);


/*
10.	Parašyti kodą, kuris generuotų atsitiktinį stringą 
iš lotyniškų mažųjų raidžių. Stringo ilgis 3 simboliai.
*/

/*
11.	Parašykite kodą, kuris generuotų atsitiktinį stringą 
su 10 atsitiktine tvarka išdėliotų žodžių, o žodžius generavimui 
imtų iš 9-me uždavinyje pateiktų dviejų stringų. Žodžiai neturi kartotis. 
(reikės masyvo)
*/
