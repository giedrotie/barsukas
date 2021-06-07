
<?php 
 
//get the highest value from multi dimenstion array in php
$array = [[100, 200, 600],[205, 108, 849, 456],[548, 149, 784]];
$max = 0;
foreach ($array as $val)
{
    foreach($val as $key=>$val1)
    {
        if ($val1 > $max)
        {
        $max = $val1;
        }
    }       
}
print ($max);

$array = [[100, 200, 7840],[205, 108, 849, 456],[548, 149, 40]];
$max = 0;
for($i=0;$i<count($array);$i++)
{
    for($j=0;$j<count($array[$i]);$j++)
    {
        if ($array[$i][$j] > $max)
        {
        $max = $array[$i][$j];
        }
    }       
}
print $max;