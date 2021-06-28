<?php

class Kibiras3 {

    protected $akmenuKiekis = 0;


    public function prideti1Akmeni()
    {
        $this->akmenuKiekis++;
    }

    // cia SETTERIS, TODEL VALIDACIJA BUTINA!
    public function pridetiDaugAkmenu($kiekis)
    {
        if (!is_integer($kiekis)) {
            return;
        }
        $this->akmenuKiekis+=$kiekis;
    }

    public function pridetiDaugAkmenu1(int $kiekis)
    {
        $this->akmenuKiekis+=$kiekis;
    }


    public function kiekPririnktaAkmenu()
    {
        return $this->akmenuKiekis;
    }

}