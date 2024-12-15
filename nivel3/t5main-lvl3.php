<?php

//NIVEL 3
require_once 'shape.php';
require_once 'circulo.php';
require_once "triangulo.php";
require_once "rectangulo.php";

$rectangulo1 = new Rectangulo(5,8);
$triangulo1 = new Triangulo(5,8);

echo "\nÁrea Rectangulo: " .$rectangulo1->calcularArea();
echo "\nÁrea Triángulo: " .$triangulo1->calcularArea();

$circulo1 = new Circulo(4);

echo "\nDiametro del círculo: ".$circulo1->getDiametro();

echo "\nÁrea Círculo: ".$circulo1->calcularArea();

?>