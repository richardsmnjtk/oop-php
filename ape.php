<?php

require_once('animal.php');

class ape extends animal
{

    public function __construct()
    {
        $this->name = "kera sakti";
        $this->yell = "Auooo";
        $this->legs = "2";
        $this->coldBlood = "no";
    }

    public function get_name()
    {
        return $this->name;
    }

    public function get_legs()
    {
        return $this->legs;
    }

    public function getYell()
    {
        return $this->yell;
    }

    
}
?>