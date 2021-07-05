<?php
namespace Zoo;
use Zoo\Animal as Animal;
use Australia\Animal as AnimalA;
use Belgium\Animal as B;



require __DIR__ . '/vendor/autoload.php';

// spl_autoload_register(function($class) {
//     echo "<h3>Nerandu klases: $class<h3>";
// });

// spl_autoload_register(function($class) {
//     echo "<h3>Nerandu klases: $class<h3>";
//     // require __DIR__ . '/australai/Animal.php';
// });

// spl_autoload_register(function($class) {
//     echo "<h3>Nerandu klases: $class<h3>";
// });

// require __DIR__ . '/australai/Animal.php';
// require __DIR__ . '/belgai/Animal.php';
// require __DIR__ . '/Animal.php';





echo Animal::$hello;
// // new Animal;

echo AnimalA::$go;
// // new AnimalA;

// echo Animal::$go;


echo B::$go;
// // new AnimalB;