<?php

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

?>