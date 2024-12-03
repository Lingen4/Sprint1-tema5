<?php

//NIVEL 1
include "animal.php";

$gato2= new gato('Luna');

$perro1= new perro ('Mancha');

echo $perro1->makeSound()."\n";

echo $gato2->makeSound()."\n";

//NIVEL 2

include "shape.php";

$rectangulo1 = new Rectangulo(5,8);

$triangulo1 = new Triangulo(5,8);

echo "\nÁrea Rectangulo: " .$rectangulo1->calcularArea();
echo "\nÁrea Triángulo: " .$triangulo1->calcularArea();

//NIVEL 3

$circulo1 = new Circulo(5);

echo "\nDiametro del círculo: ".$circulo1->getDiametro();

echo "\nÁrea Círculo: ".$circulo1->calcularArea();
?>