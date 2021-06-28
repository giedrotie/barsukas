<?php

class Tv {
    protected $istrizaine;
    private static $kanalai = [1 => 'TV3', 2 => 'LRT', '3' => 'Polonia'];



public function ___construct($ist)
{
    $this->istrizaine = $ist;
}

// public function rodyti($kanalas)
// {
//     echo '<h1>RODOM: ' .$this->kanalai[$kanalas]. '</h1>';
// }

public function rodyti($kanalas)
{
    // echo '<h1>RODOM: ' .Tv::$kanalai[$kanalas]. '</h1>';
    echo '<h1>RODOM: ' .self::$kanalai[$kanalas]. '</h1>';
}

public static function keistiPrograma($kanalas, $pavadinimas)
{
    self::$kanalai[$kanalas] = $pavadinimas;
}


}