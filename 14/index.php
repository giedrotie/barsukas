<?php
// PROGRAMUTOJAS PETRAS
echo '<pre>';

require __DIR__ . '/Bebras.php';
$bebras1 = new Bebras();
$bebras2 = new Bebras();
$bebras3 = $bebras1;

// var_dump($bebras1);
// echo '<br>';

// var_dump($bebras2);
// echo '<br>';

// var_dump($bebras3);
// echo '<br>';

echo $bebras1->name;
echo '<br>';

$bebras2->name = 'Bobikas';
// $bebras2->age = 'Labas';
// $bebras2->setAge('Labas');
$bebras2->setAge(2);

// $bebras2->addYear();
// $bebras2->addYear();

echo $bebras1->sayHello1();
echo $bebras2->sayHello1();

echo $bebras1->getAge();


echo $bebras1->__get($age);