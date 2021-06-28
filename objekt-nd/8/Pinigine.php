<?php

class Pinigine {

    private $popieriniaiPinigai = 0;
    private $metaliniaiPinigai = 0;


    // public function ideti($kiekis)
    // {
    //     if (!is_float($kiekis)) {
    //         return;
    //     }
    //     if ($kiekis < 2){
    //         $this->metaliniaiPinigai+=$kiekis;
    //     } else {
    //         $this->popieriniaiPinigai+=$kiekis;
    //     }
    // }

    public function ideti(float $kiekis)
    {
        // if (!is_float($kiekis)) {
        //     return;
        // }
        if ($kiekis < 2){
            $this->metaliniaiPinigai+=$kiekis;
        } else {
            $this->popieriniaiPinigai+=$kiekis;
        }
    }

    public function skaiciuoti()
    {
        // $suma = $this->metaliniaiPinigai + $this->popieriniaiPinigai;
        // return $suma;
        echo $this->metaliniaiPinigai + $this->popieriniaiPinigai;
    }


    public function monetos(){

    }

    public function banknotai(){
        
    }
}