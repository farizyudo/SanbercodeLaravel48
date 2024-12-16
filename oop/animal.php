<?php

class animal
{
    // public $name;
  
    public $legs = 4;
    public $coolBlooded = "no";
    public $hewan;

    public function __construct($jenis){
        $this->hewan  = $jenis;
    }

}

?>