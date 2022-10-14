<?php 

class Frog extends Animal{
    public $animal;
    public $legs = 4;
    public $cold_blooded = false;

    public function jump(){
        return "Hop Hop";
    }
}

?>