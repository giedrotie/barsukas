<?php
// echo '<pre>';

$masyvasD = [];

$string = '#%+*@裡';


foreach(range(1, 10) as $index => $val) {

    $masyvasD[] = [];

   foreach (range(1, 10) as $index2 => $val2) {

      $masyvasD[$index][] =  [  // nulines eilutes masyvas galima dar []vietoj[$index2]

      $string[rand(0, 6)],

      '#'. rand(0, 999999)

      ];

   }

}

foreach($masyvasD as $index => $val){
    foreach ($val as $index2 => $val2) {

        echo "<span style = 'color: ". $val2[1] . "'>" . $val2[0] . "</span>";
  
    }
    echo '<br>';
}

// print_r($masyvasD);
// _d($masyvasD);