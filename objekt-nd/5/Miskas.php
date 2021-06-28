<?php



class Miskas {

    protected $name;


    public function __construct($vardas){
        // if(!isset($vardas)){
        //     return 0;
        // }
        // if(!is_string($vardas)){
        //     return 0;
        // }
        $this->name = $vardas;
    }

    public function papasakok()
    {
        echo "Aš gyvenu miške pavadintame $this->name, o kur tu?";
    }


  

}