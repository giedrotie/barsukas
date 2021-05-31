<?php
var_dump ('1' == null);     //false
echo '<br>';
var_dump (1 == null);       //false
echo '<br>';
var_dump ('0' == null);     //false
echo '<br>';
var_dump ("0" == null);     //false
echo '<br>';
var_dump (true == null);    //false

echo '<br>';
var_dump ([] == null);      //true
echo '<br>';
var_dump (0.0 == null);     //true
echo '<br>';
var_dump (0 == null);       //true
echo '<br>';
var_dump ('' == null);      //true
echo '<br>';
var_dump (false == null);   //true
echo '<br>';

$c = null;
$d = null;
echo $c ?? 5 + $d ?? 5; //5
echo '<br>';
echo $c ?? 5 * $d ?? 5; //0
echo '<br>';
echo ($c ?? 5) * ($d ?? 5); //25