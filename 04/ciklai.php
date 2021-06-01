<?php

echo '<br>---------------1--while----------<br>';

$sk = rand(0, 10);
while ($sk < 9) {
   echo $sk . '<br>';
   $sk = rand(0, 10);
}

echo '<br>-------------2--do while------------<br>';

do {
    $sk = rand(0, 10);
echo $sk . '<br>';
} while ($sk < 9);


echo '<br>-------------3----for----------<br>';

for ($x = 1; $x <= 5; $x++) {
    echo 'Numeris: '.$x.' <br>';
 }
 

 $ciklai = 0;
 while ($ciklai < 5) {  // turetu buti FOR ciklas
    echo 'Ciklas: '.$ciklai.' <br>';
    $ciklai++;
 }


 echo '<br>-------------4-----continue---------<br>';
 for ($i = 1;$i <= 15;$i++){
    echo '<br>';
    echo $i.'-';
    if (($b = rand(0, 10))> 4){
        echo "daugiau uz 4: $b";
        continue;
    }
    echo $i;
    
  }
  echo 'Ciklo pabaiga';

  echo '<br>-------------5-----break---------<br>';
  for ($i = 1;$i <= 15;$i++){
     echo '<br>';
     echo $i.'-';
     if (($b = rand(0, 10))> 4){
        echo "daugiau uz 4: $b";
         break;
     }
     echo $i;
     
   }
   echo 'Ciklo pabaiga';


  echo '<br>-------------6-----continue 2---------<br>';
  for ($a = 1; $a <= 5; $a++) {
    echo '<b>Didžiojo ciklo Numeris: '.$a.' </b><br>';
    for ($x = 1; $x <= 5; $x++) {
        if ($x == 3) {
            continue 2;
        }
        echo 'Mažojo Ciklo Numeris: '.$x.' <br>';
    }
    echo '<b>********************</b><br>';
 }
 

 echo '<br>-------------7-----break 2---------<br>';
 for ($a = 1; $a <= 5; $a++) {
   echo '<b>Didžiojo ciklo Numeris: '.$a.' </b><br>';
   for ($x = 1; $x <= 5; $x++) {
       if ($x == 4) {
           break 2;
       }
       echo 'Mažojo Ciklo Numeris: '.$x.' <br>';
   }
   echo '<b>********************</b><br>';
}
