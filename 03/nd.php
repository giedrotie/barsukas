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
$newString = substr($name,-3) . substr($lastname,-3);

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
7.	?? Sukurti kintamąjį su stringu: “An American in Paris”.
 Jame ištrinti visas balses. Rezultatą atspausdinti. 
 Kodą pakartoti su stringais: “Breakfast at Tiffany's”, 
 “2001: A Space Odyssey” ir “It's a Wonderful Life”.
*/
echo '<hr>', '<br>';
echo '------ 7 -----','<br>';
echo '<br>';


$originalString1 = 'An American in Paris';
$newString1 = str_ireplace(array('a','e','i','o','u','y'),'',$originalString1);
echo $newString1;
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
8. ??	Stringe, kurį generuoja toks kodas: 
'Star Wars: Episode '.str_repeat(' ', rand(0,5)). rand(1,9) . ' - A New Hope'; 
Surasti ir atspausdinti epizodo numerį.
*/
echo '<hr>', '<br>';
echo '------ 8 -----','<br>';
echo '<br>';

$stringas = 'Star Wars: Episode '.str_repeat(' ', rand(0,5)). rand(1,9) . ' - A New Hope'; 
echo $stringas . '<br>';

echo 'Epizodas: ' .  preg_replace('/[^0-9]/', '', $stringas);


/*
9.	Suskaičiuoti kiek stringe “Don't Be a Menace to South 
Central While Drinking Your Juice in the Hood” yra žodžių trumpesnių 
arba lygių nei 5 raidės. Pakartokite kodą su stringu “Tik nereikia 
gąsdinti Pietų Centro, geriant sultis pas save kvartale”.
*/

echo '<hr>', '<br>';
echo '------ 9 -----';
echo '<br>';

$stringas1 = "Don't Be a Menace to South Central While Drinking Your Juice in the Hood";
$stringas2 = 'Tik nereikia gąsdinti Pietu Centro, geriant sultis pas save kvartale';

function wordCount($str){
    $count = 0;
    $arr = explode(" ", $str);
    for ($i = 0; $i < count($arr); $i++) {
        $word = $arr[$i];
        if(strlen($word) <= 5) {
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
echo '------ 10 -----';
echo '<br>';

/*
10.	Parašyti kodą, kuris generuotų atsitiktinį stringą 
iš lotyniškų mažųjų raidžių. Stringo ilgis 3 simboliai.
*/
function generateRandomString($length = 3) {
    $characters = 'abcdefghijklmnopqrstuvwxyz';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}
echo generateRandomString();

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
echo '<hr>', '<br>';
echo '------ 11 -----';
echo '<br>';

$sakinys1 = "Don't Be a Menace to South Central While Drinking Your Juice in the Hood";
$sakinys2 = 'Tik nereikia gąsdinti Pietu Centro, geriant sultis pas save kvartale';

$pirmas = preg_replace('/[.,]/', '', $pirmas);
$antras = preg_replace('/[,.]/', '', $antras);
$string =array_merge(explode(" ",$pirmas), explode(" ",$antras));
$kiek = count($string);
$random = [];
while(count($random)< 10 ){
    array_push($random, $string[rand(0,$kiek-1)]);
    $random = array_unique($random);
}

print_r($random);