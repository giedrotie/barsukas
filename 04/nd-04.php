
<?php
/*
4.	Nupieškite kvadratą iš “*”, kurio kraštines sudaro 
100 “*”. Panaudokite css stilių, kad kvadratas ekrane 
atrodytų kvadratinis.
* * * * * * * * * * *
* * * * * * * * * * *
* * * * * * * * * * *
* * * * * * * * * * *
* * * * * * * * * * *
* * * * * * * * * * *
* * * * * * * * * * *
*/

echo '<br>','<h3>--------- 4 ---------</h3>', '<br>','<br>';

$kvadratas = '';
$ilgis = 50;

for ($i = 0; $i < $ilgis; $i++) { 
    $kvadratas = '';
    for ($m = 0; $m < $ilgis; $m++) { 
        $kvadratas .= '*';
    }
    echo "<div style='line-height: 11px; font-size: 22px;'>$kvadratas</div>";
}


echo '<br>','<h3>--------- 4 ---kitas var------</h3>', '<br>','<br>';

echo "<div style = 'line-height: 70%;'>";

for ($i = 0; $i < 25; $i++) {
    for ($j = 0; $j < 25; $j++) {
        echo '* ';
    }
   echo "</br>";
}

'</div>';







echo '<br>','<h3>--------- 4 ---kitas var------</h3>', '<br>','<br>';
<style>
  .kvadratas {
    white-space: nowrap;
  }
  .kvadratas span{
    padding: 3px;
  }
</style>


<?php

echo "<div class='kvadratas' id='kvadratas'>";

for ($i = 0 ; $i < $krastine ; $i++)
{
    for ($j = 0 ; $j < $krastine ; $j++)
    {
        if($i==$j){
            echo '<span class="red">* </span>';
        }
        elseif($i+$j == $krastine-1){
            echo '<span class="red">* </span>';
        }
        else {
         echo '<span>* </span>';
        }
    }
    echo '<br>';

}
echo '</div>';
echo '<hr>';