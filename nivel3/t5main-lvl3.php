<?php

//NIVEL 3
require_once 'shape.php';
require_once 'roundShape.php';
require_once 'circulo.php';

$circulo1 = new Circulo(4);

echo "\nDiametro del círculo: ".$circulo1->getDiametro();

echo "\nÁrea Círculo: ".$circulo1->calcularArea();

?>