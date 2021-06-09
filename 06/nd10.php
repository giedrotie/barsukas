<?php
echo '<pre>';

//10.	Sukurkite masyvą iš 10 elementų. Jo reikšmės masyvai iš 10 elementų. 

//Antro lygio masyvų reikšmės masyvai su dviem elementais value ir color. 

//Reikšmė value vienas iš atsitiktinai parinktų simbolių: #%+*@裡, 
//o reikšmė color atsitiktinai sugeneruota spalva formatu: #XXXXXX. 
//Pasinaudoję masyvų atspausdinkite “kvadratą” kurį sudarytų masyvo 
//reikšmės nuspalvintos spalva color.

echo '<br>','--------- 10 ---------', '<br>';

function customStringGenerator()
{
    $string = '#%+*@裡';
    $symbol = str_split($string, 5);
    $symbolArray = str_split($symbol[0]);
    $symbolArray[] = $symbol[1];
    return $symbolArray[rand(0, count($symbolArray) - 1)];
}


$masyvas10 = array_fill(0, 10, array_fill(0, 10, ''));
foreach ($masyvas10 as $index => $value) {
    foreach ($value as $key => $value_x) {
        $masyvas5[$index][$key] = ['value' => customStringGenerator(), 'color' => '#' . substr(str_shuffle('ABCDEF0123456789'), 0, 6)];
    }
}

print_r($masyvas10);

echo '<div style="text-align:center;">';
foreach ($masyvas10 as $index => $value) {
    foreach ($value as $key => $value_x) {
        $col = $masyvas10[$index][$key]['color'];
        $val = $masyvas10[$index][$key]['value'];
        echo '<span style="font-size: 16px; color:' . $col . ';">' . $val . '</span>';
        echo '<span style="font-size: 16px; color: white">OOO</span>';
    }
    echo '<br><br>';
}
echo '</div><br><br>';
