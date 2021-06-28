<?php

require __DIR__ . '/Tv.php';

$TV1 = new Tv(32);
$TV2 = new Tv(56);
$TV3 = new Tv(132);

// $TV1->kanalai[1] = 'LRT2';


//kreipiuosi i klase TV ne i kintamaji ir jeiciu visos klases 1 kanala i LRT
// Tv::$kanalai[1] = 'LRT2';

Tv::keistiPrograma(1, 'LRT88');



$TV2->rodyti(1);
$TV1->rodyti(2);
$TV3->rodyti(1);