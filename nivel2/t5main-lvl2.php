<?php
//NIVEL 2

require_once "shape.php";
require_once "triangulo.php";
require_once "rectangulo.php";

$rectangulo1 = new Rectangulo(5,8);

$triangulo1 = new Triangulo(5,8);

echo "\nÁrea Rectangulo: " .$rectangulo1->calcularArea();
echo "\nÁrea Triángulo: " .$triangulo1->calcularArea();


?>