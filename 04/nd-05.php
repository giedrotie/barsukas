
<?php
/*
5.	Prieš tai nupieštam kvadratui nupieškite 
raudonas istrižaines.
*/

echo '<br>','<h3>--------- 5 ---------</h3>', '<br>','<br>';

$ilgis = 15;

for ($i = 1; $i < $ilgis; $i++) { 
    for ($m = 1; $m < $ilgis; $m++) { 
        if ($m === $ilgis - $i || $m === $i){
            echo "<span style='line-height: 5px; font-size: 20px; color: red;'>*</span>";
        } else {
            echo "<span style='line-height: 5px; font-size: 20px;'>*</span>";
        }
    }
    echo "<span style='font-size: 7px;'><br></span>"; // sitas <br> perkelia i nauja eilute!!!!
 }
