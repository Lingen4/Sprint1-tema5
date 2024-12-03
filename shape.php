<?php
//NIVEL 2 Y 3
abstract class Shape{

    protected $alto, $ancho;

    
    abstract function calcularArea();
    abstract function __construct($alto,$ancho);  
}

class Rectangulo extends Shape{

    function __construct($alto,$ancho){
        $this->alto=$alto;
        $this->ancho=$ancho;
    }
    public function calcularArea(){
         
        $area = $this->alto*$this->ancho;
        return $area;
}

}

class Triangulo extends Shape{


    function __construct($alto,$ancho){
        $this->alto=$alto;
        $this->ancho=$ancho;
    }
    public function calcularArea(){
         
        $area = ($this->alto*$this->ancho)/2;
        return $area;
}

}


class Circulo extends Shape{
    
    protected $radio, $diametro;

    function __construct($radio,$diametro=0){
        $this->radio=$radio;
        $this->diametro=$radio*2;
    }

    public function getDiametro(){
        return $this->diametro;
    }

    public function calcularArea(){
         
        $area = $this->radio**2;
        return $area;
}
}