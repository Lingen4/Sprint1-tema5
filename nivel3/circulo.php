<?php


abstract class Shape{

   abstract function __construct(int|float $alto, int|float $ancho);  
   abstract function calcularArea(): int|float;
}

interface RoundShape{

    public function __construct(int|float $radio);
    public function getDiametro(): int|float;
}



class Circulo extends Shape implements RoundShape{

    protected $radio;

    function __construct(int|float $radio){
        $this->radio=$radio;
        
    }
    public function calcularArea(): int|float{
         
        $area = $this->radio**2;
        return $area;
}

    public function getDiametro():int|float
    {
        return $this->radio*2;
    }
}

?>