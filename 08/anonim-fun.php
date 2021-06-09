<?php

$labas = 'labas';

$a1 = function(){ // line function 
    var_dump($labas); //  nemato kintamuju is isores
};

$a2 = fn() => var_dump($labas); // arrow function


$a1();
$a2();


//////////////////////////////

$labas = 'labas';
$viso = 'viso';
$a3 = function() use($labas, $viso){
    var_dump($labas);
    var_dump($viso);
};

$labas = 'viso gero'; // kadangi yra po funkcijos, jis nesimato
$a3();


////////////////////////////// & REFERENCE

$labas = 'labas';
$viso = 'viso';
$a4 = function() use(&$labas, $viso){ // kdanagi yra & reference, bus naudojamas paskutinis $labas priskirymas t.y. viso gero
    var_dump($labas);
    var_dump($viso);
};

$labas = 'viso gero'; // kadangi yra po funkcijos, jis nesimato
$a4();


////////////////////////////// ANONIMINME REKURSINE F-JA

$func = function ($limit = NULL) use (&$func) { 
    static $current = 10; 
    // tikrinam eigą
    if ($current <= 0) { 
        //išeinam 
        return FALSE;
    } 
    // spausdinam reikšmę.
    echo "$current<br>"; 
    $current--; 
    $func(); 
 }; 
  //  Kviečiam funkciją
 $func();
 