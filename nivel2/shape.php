<?php
//NIVEL 2
abstract class Shape{

    protected $alto, $ancho;
    
    abstract function calcularArea();
    abstract function __construct(int|float $alto, int|float $ancho);  
}


class Rectangulo extends Shape{

    function __construct(int|float $alto, int|float $ancho){
        $this->alto=$alto;
        $this->ancho=$ancho;
    }
    public function calcularArea(): int|float{
         
        $area = $this->alto*$this->ancho;
        return $area;
}

}

class Triangulo extends Shape{


    function __construct(int|float $alto, int|float $ancho){
        $this->alto=$alto;
        $this->ancho=$ancho;
    }
    public function calcularArea():int|float{
         
        $area = ($this->alto*$this->ancho)/2;
        return $area;
}

}




