<?php 

class Animal {
    public $animal;
    public $legs = 4;
    public $cold_blooded = false;
    
    public function __construct($nama)
    {
        $this->animal = $nama; 
    }
  }

?>