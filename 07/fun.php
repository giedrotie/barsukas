<?php

$labas = 'Labas';

function vardas($par1 = 10, $par2 = 10)
{
    // global $labas, $viso; // Nekoks budas
    // echo $GLOBALS['labas']; // totalus oldskulas,, nenaudotina
    // echo $labas;
    $viso = 'Viso gero';
    $sumav = $par1 + $par2;
    return $sumav;

}


$suma = vardas(8, 25, 88);
echo $suma;

$suma = vardas();
echo $suma;

$suma = vardas(56, 25);
echo $suma;



function calc($action, ...$arg)
{
    _d($arg);
    $answ = 0;
    foreach ($arg as $val) {
        if ($action == '+') {
            $answ += $val;
        }
        elseif ($action == '-') {
            $answ -= $val;
        }
        
    }

    return $answ;
}

_d( 
    calc('-', 1, 5, 8)
);

// echo $viso;


function stepper() 
{
    static $x = 0;
    _d( __FUNCTION__ );
    return ++$x;
}


_d( stepper() );
_d( stepper() );
_d( stepper() );
_d( stepper() );