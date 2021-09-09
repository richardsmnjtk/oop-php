<?php



require('animal.php');
include('ape.php');
include('frog.php');

$animal = new animal;

echo " Name: " .  $animal->get_name() . "<br>";
echo " legs : " .  $animal->get_legs() . "<br>";
echo " cold blooded : " .  $animal->get_cold_blooded() . "<br><br>";

$frog = new frog;

echo " Name : " .  $frog->get_name() . "<br>";
echo " legs : " .  $frog->get_legs() . "<br>";
echo " cold blooded : " .  $frog->get_cold_blooded() . "<br>";
echo " Jump : " .  $frog->getJump() . "<br><br>";

$ape = new ape;

echo " Name : " .  $ape->get_name() . "<br>";
echo " legs : " .  $ape->get_legs() . "<br>";
echo " cold blooded: " .  $ape->get_cold_blooded() . "<br>";
echo " Yell : " .  $ape->getYell() . "<br><br>";

?>