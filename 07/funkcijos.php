<?php
// funkcija yra uzdara ir i ja niekas nepatenka is issores 

$labas = 'Labas';
function vardas($parametras1, $parametras2 = 2){ // funkcijos deklaracija, su vardu ir parametrais
    // global $labas; // jei pasakau global, jie bus matomi visame kode // nenaudot geriau
    // echo $GLOBALS['labas']; // oldschool NENEAUDOTI!
    // echo $labas;
    return $parametras1 + $parametras2;
}

$suma = vardas(8, 25,3); //funkcijos iskvietimas su argumentais (t.y. konkrecios reiksmes)
echo $suma;

$suma = vardas(2); 
echo $suma;

$suma = vardas(23, 25); 
echo $suma;


function stepper(){
    static $x = 0; // static leis paskaiciuoti kiek kartu isvieciau funkcija
    echo '<br>';
    print_r( __FUNCTION__); // parodo kokioje funkcijoje ivyko iskvietimas
    echo '<br>';
    return ++$x;
    
}
echo '<br>';
print_r(stepper());
print_r(stepper());
print_r(stepper());
print_r(stepper());

print_r( __FUNCTION__); // jei iskvieciama ne pacioje funkcijoje - grazins tuscia stringa