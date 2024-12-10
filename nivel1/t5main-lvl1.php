<?php

//NIVEL 1
require_once "animal.php";

$gato2= new Gato('Griffith');

$perro1= new Perro ('Guts');


echo "El perro {$perro1->getNombre()} dice: {$perro1->makeSound()}\n";

echo "El gato {$gato2->getNombre()} dice : {$gato2->makeSound()}\n";


?>