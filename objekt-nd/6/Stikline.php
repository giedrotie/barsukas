<?php
// 6.	Sukurti klasę Stikline. Sukurti privačią savybę turis ir kiekis. Parašyti metodą ipilti($kiekis), kuris keistų savybę kiekis. Jeigu stiklinės tūris yra mažesnis nei pilamas kiekis- kiekis netelpa ir būna lygus tūriui. Parašyti metodą ispilti(), kuris grąžiną kiekį. Pilant išpilamas visas kiekis, tas kas netelpa, nuteka per stalo viršų. Sukurti tris stiklinės objektus su tūriais: 200, 150, 100. Didžiausią pripilti pilną ir tada ją ispilti į mažesnę stiklinę, o mažesnę į dar mažesnę.

class Stikline {

    private $turis;
    private $kiekis;


    public function __construct($turis){
        if(!is_integer($turis)){
            echo 'Turis nurodomas skaiciais<br>';
        }else{
            $this->turis = $turis;
        }
    }

    public function ipilti($kiekis)
    {
        if (!is_integer($kiekis)) {
            return;
        } else {
            $this->kiekis += $kiekis;
            if ($this->kiekis > $this->turis){
                $this->kiekis = $this->turis;
            }
            echo "Stiklines turis: $this->turis, ipiltas kiekis: $this->kiekis.<br>";
        }
    }

    public function ispilti($kiekis)
    {
        if (!is_integer($kiekis)) {
            return;
        } else {
            $this->kiekis -= $kiekis;
            if($this->kiekis < 0){
                $this->kiekis = 0;
                echo 'Stikline tuscia';
            }
            echo "Stiklines turis: $this->turis, ipiltas kiekis: $this->kiekis.<br>";
        }
        return $kiekis;
    }

}