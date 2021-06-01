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

echo '<hr>', '<br>';
echo '------ 1 ---kitas var--', '<br>';
echo '<br>';
$name = 'Jason';
$surname = 'Statham';

echo strlen($name) > strlen($surname) ? $name : $surname;
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
$newString = substr($name,-3) . substr($lastname,-3);

echo $newString;

echo '<hr>', '<br>';
echo '------ 4 ---kitas var--','<br>';
echo '<br>';

$name = 'Leonardo';
$surname = 'DaVincio';
$letters = substr($name, (strlen($name) - 3), 3) . substr($surname, (strlen($surname) - 3), 3);

echo $letters;


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

echo '<hr>', '<br>';
echo '------ 6 --kitas var---','<br>';
echo '<br>';
$pavadinimas = 'An American in Paris'; 
echo substr_count(strtolower($pavadinimas),'a');

/*
7.	Sukurti kintamąjį su stringu: “An American in Paris”.
 Jame ištrinti visas balses. Rezultatą atspausdinti. 
 Kodą pakartoti su stringais: “Breakfast at Tiffany's”, 
 “2001: A Space Odyssey” ir “It's a Wonderful Life”.
*/
echo '<hr>', '<br>';
echo '------ 7 -----','<br>';
echo '<br>';


$originalString1 = 'An American in Paris';
$newString1 = str_ireplace(['a','e','i','o','u','y'],'',$originalString1);
echo $newString1;
echo '<br>';

$originalString2 = "Breakfast at Tiffany's";
echo $newString2 = str_ireplace(['a','e','i','o','u','y'],'',$originalString2);
echo '<br>';

$originalString3 = '2001: A Space Odyssey';
echo $newString3 = str_ireplace(['a','e','i','o','u','y'],'',$originalString3);
echo '<br>';

$originalString4 = "It's a Wonderful Life";
echo $newString4 = str_ireplace(['a','e','i','o','u','y'],'',$originalString4);
echo '<br>';



echo '<hr>', '<br>';
echo '------ 7 ---kitas var--','<br>';
echo '<br>';

$string1 = 'An American in Paris';
$string2= "Breakfast at Tiffany's";
$string3 = '2001: A Space Odyssey';
$string4 = "It's a Wonderful Life";

function delete_vowels($string){
    $string = preg_replace('/[aeiouy]/', '', strtolower($string));
    return $string;
}
echo $string1 . '<br>';
echo delete_vowels($string1) . '<br>';
echo $string2 . '<br>';
echo delete_vowels($string2) . '<br>';
echo $string3 . '<br>';
echo delete_vowels($string3) . '<br>';
echo $string4 . '<br>';
echo delete_vowels($string4);

/*
8.	Stringe, kurį generuoja toks kodas: 
'Star Wars: Episode '.str_repeat(' ', rand(0,5)). rand(1,9) . ' - A New Hope'; 
Surasti ir atspausdinti epizodo numerį.
*/
echo '<hr>', '<br>';
echo '------ 8 -----','<br>';
echo '<br>';

$stringas = 'Star Wars: Episode '.str_repeat(' ', rand(0,5)). rand(1,9) . ' - A New Hope'; 
echo $stringas . '<br>';
echo 'Epizodas: ' .  preg_replace('/[^0-9]/', '', $stringas);

echo '<hr>', '<br>';
echo '------ 8 ---kitas var--','<br>';
echo '<br>';

$starwars = 'Star Wars: Episode '.str_repeat(' ', rand(0,5)). rand(1,9) . ' - A New Hope';
echo preg_replace('/\D/', '', $starwars);

echo '<hr>', '<br>';
echo '------ 8 ---dar kitas var--','<br>';
echo '<br>';

$string = 'Star Wars: Episode '.str_repeat(' ', rand(0,5)). rand(1,9) . ' - A New Hope';
preg_match_all('!\d+!', $string, $episodeNumber);
echo $string . '<br>Episode Nr. ' . $episodeNumber[0][0] . '.';

/*
9. ? Suskaičiuoti kiek stringe “Don't Be a Menace to South 
Central While Drinking Your Juice in the Hood” yra žodžių trumpesnių 
arba lygių nei 5 raidės. Pakartokite kodą su stringu “Tik nereikia 
gąsdinti Pietų Centro, geriant sultis pas save kvartale”.
*/

echo '<hr>', '<br>';
echo '------ 9 -----';
echo '<br>';

$stringas1 = "Don't Be a Menace to South Central While Drinking Your Juice in the Hood";
$stringas2 = 'Tik nereikia gąsdinti Pietų Centro, geriant sultis pas save kvartale';

function wordCount($str){
    $count = 0;
    $array = explode(" ", $str);
    for ($i = 0; $i < count($array); $i++) {
        $word = $array[$i];
        if(mb_strlen($word) <= 5) {
            $count++;
        }
    }
    return $count;
}

echo wordCount($stringas1);
echo '<br>';
echo wordCount($stringas2);
echo '<br>';



echo '<hr>', '<br>';
echo '------ 9 -kitas var----';
echo '<br>';

$string2 = 'Tik nereikia gąsdinti Pietų Centro, geriant sultis pas save kvartale.';
echo $string2;
echo '<br>'; echo '<br>';

$words = explode(' ', $string2);
$counter = 0;

for($i = 0; $i < count($words); $i++) {
    if (mb_strlen($words[$i], 'UTF-8') <= 5){
        $counter++;
    }
}
echo "Žodžių, trumpenių arba lygių nei 5 raidės skaičius: $counter";





echo '<hr>', '<br>';
echo '------ 10 -----';
echo '<br>';

/*
10.	Parašyti kodą, kuris generuotų atsitiktinį stringą 
iš lotyniškų mažųjų raidžių. Stringo ilgis 3 simboliai.
*/
function randomStringoGeneravimas($ilgis = 3) {
    $raides = 'abcdefghijklmnopqrstuvwxyz';
    $raidziuIlgis = strlen($raides);
    $randomStringas = '';
    for ($i = 0; $i < $ilgis; $i++) {
        $randomStringas .= $raides[rand(0, $raidziuIlgis - 1)];
    }
    return $randomStringas;
}
echo randomStringoGeneravimas();


echo '<hr>', '<br>';
echo '------ 10 --dar kitas var---';
echo '<br>';

$raides = substr(str_shuffle('abcdefghijklmnopqrstuvwxyz'), 0, 3);
echo "<b>$raides</b>";
$randomStringChars = str_split('abcdefghijklmnopqrstuvwxyz' .'ABCDEFGHIJKLMNOPQRSTUVWXYZ');
shuffle($randomStringChars);
$rand = '';
foreach (array_rand($randomStringChars, 3) as $k) $rand .= $randomStringChars[$k];
echo 'Atsitiktiniai 3 lotyniski simboliai:<br>';
echo $rand;


echo '<hr>', '<br>';
echo '------ 10 --dar kitas var---';
echo '<br>';
echo chr(rand(97, 122)) . chr(rand(97, 122)) . chr(rand(97, 122));



echo '<hr>', '<br>';
echo '------ 10 --dar kitas var---';
echo '<br>';

$characters = range( 'a', 'z' );
$string = implode($characters);
echo "Full ABC string: $string";
echo '<br>';



$randomString = substr(str_shuffle($string), 0, 3);

echo $randomString;


// echo '<hr>', '<br>';
// echo '------ 10 ---kitas var--';
// echo '<br>';

// function generuotiAtsitiktiniStr($length = 3) {
//     return substr(str_shuffle(str_repeat($x='abcdefghijklmnopqrstuvwxyz', ceil($length/strlen($x)) )),1,$length);
// }

// echo  generuotiAtsitiktiniStr();

/*
11.	Parašykite kodą, kuris generuotų atsitiktinį stringą 
su 10 atsitiktine tvarka išdėliotų žodžių, o žodžius generavimui 
imtų iš 9-me uždavinyje pateiktų dviejų stringų. Žodžiai neturi kartotis. 
(reikės masyvo)
*/



/*
11.	Parašykite kodą, kuris generuotų atsitiktinį stringą 
su 10 atsitiktine tvarka išdėliotų žodžių, o žodžius generavimui 
imtų iš 9-me uždavinyje pateiktų dviejų stringų. Žodžiai neturi kartotis. 
(reikės masyvo)
*/
echo '<hr>', '<br>';
echo '------ 11 -----';
echo '<br>';

$string = "Don't Be a Menace to South Central While Drinking Your Juice in the Hood";
$string1 = 'Tik nereikia gąsdinti Pietų Centro, geriant sultis pas save kvartale';
$string = str_replace(',', '', $string);
$string1 = str_replace(',', '', $string1);
$wordSource = array_merge(explode(' ', $string), explode(' ', $string1));
$random[] = '';
$randomWordCount = 20;
$randomWordCount = $randomWordCount > count($wordSource) ? count($wordSource) : $randomWordCount;
while (count($random) <= $randomWordCount ) {
    array_push($random, $wordSource[rand(0, count($wordSource) - 1)]);
    $random = array_unique($random);
}
foreach ($random as $word) {
    echo $word . ' ';
}