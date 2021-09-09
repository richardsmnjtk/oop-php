<?php
require_once('animal.php');

class frog extends animal
{

    public function __construct()
    {
        $this->name = "buduk";
        $this->legs = "4";
        $this->jump = "Hop Hop";
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

    public function getJump()
    {
        return $this->jump;
    }

}