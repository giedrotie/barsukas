<?php
//programuotoja Zita

class Bebras {
//cia rasomos klases savybes

public $name = 'Sarikas'; 
protected $color = 'brown'; // cia yra pasettintas kintamasis, kurio reiksme pradzioje null
private $age = 4;


//----------------------    
//cia rasomos klases metodai (funkcijos)

public function sayHello(){
    echo '<h2>Hello!</h2>';
}

public function sayHello1(){
    echo "<h2>Hello, $this->name!</h2>";
    echo "<h4>Age, $this->age!</h4>";
}

public function addYear(){
    $this->age++;
}

public function getAge(){
    return $this->age;
}



//MAGIC methods
public function __get($prop){
    // echo "<h3>Magic GET with $prop</h3>";

    //reikalinga validacija

    if(!in_array($prop, ['age'])){ // [cia surasomos savybes, kurias leidziu kad nuskaityt]
        return null;
    }
    // arba gali buti tokia validacija
    // if($prop == 'color') {
    //     return null;
    // }

    if($prop == 'rand') {
        return $this->randomNumber();
    }

    return $this->$prop;
}



public function randomNumber(){
    return rand(10, 99);
}




public function setAge($age){
    if(!is_integer($age)){
        echo 'Cia turi buti skaicius!';
        return;
    }
    if($age > 25){
        echo 'Tiek bebrai negyvena!';
        return;
    }
    return $this->age = $age;
}



}