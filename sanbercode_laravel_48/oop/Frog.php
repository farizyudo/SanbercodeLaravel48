<?php

require_once('animal.php');

class kodok extends animal
{
    public $jump = "hop hop";
    public function jump()
    {
        echo "Jump : hop hop";
    }
} 

?>