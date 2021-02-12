<?php

require './Carro.php';
require './Volks.php';
require './Audi.php';
require './Volvo.php';
require './Citroen.php';
require './Pai.php';
require './Filho.php';

$audi = new Audi("Audi A4");
echo $audi->intro();
echo "<br>";
$volks = new Volks("Fusca 1969");
echo $volks->intro();
echo "<br>";
$volvo = new Volvo("Volvo V8");
echo $volvo->intro();
echo "<br>";
$citroen = new Citroen("C4 palaces");
echo $citroen->intro();
echo "<br>";
echo "<br>";
echo "<br>";

$filho = new Filho();
echo $filho->prefixoNome("João");
echo "<br>";
echo $filho->prefixoNome("Maria");
echo "<br>";
echo "<br>";
echo "<br>";


