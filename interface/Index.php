<?php

require './Animal.php';
require './Cachorro.php';
require './Gatos.php';
require './Vaca.php';

$cachorro = new Cachorro();
$cachorro->somAnimal();
echo '<br>';
$gato = new Gatos();
$gato->somAnimal();
echo '<br>';
$vaca = new Vaca;
$vaca->somAnimal();
echo '<br>';
