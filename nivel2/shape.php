<?php

abstract class Shape{

    public $alto;
    public $ancho;

    abstract function calcularArea();
    public function __construct(int|float $alto, int|float $ancho){
        $this->alto = $alto;
        $this->ancho=$ancho; 
    }  
}







