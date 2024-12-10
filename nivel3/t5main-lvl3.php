<?php

//NIVEL 3
require_once
require_once 'circulo.php';

$circulo1 = new Circulo(5);

echo "\nDiametro del círculo: ".$circulo1->getDiametro();

echo "\nÁrea Círculo: ".$circulo1->calcularArea();

?>