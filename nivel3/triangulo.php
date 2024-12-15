<?php

class Triangulo implements Shape{

    private $alto;
    private $ancho;

    public function __construct($alto,$ancho)
    {
        $this->alto=$alto;
        $this->ancho=$ancho;
    }
    public function calcularArea():int|float{
         
        $area = ($this->alto*$this->ancho)/2;
        return $area;
}

}






?>