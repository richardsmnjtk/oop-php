<?php


class animal
{

    public $name, $legs, $coldBlood;

    public function __construct()
    {
        $this->name = "Shaun";
        $this->legs = "4";
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

    public function get_cold_blooded()
    {
        return $this->coldBlood;
    }

}
