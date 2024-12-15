<?php


class Circulo implements Shape{

    private $radio;
  
    function __construct(int|float $radio){
        $this->radio=$radio;
    }

    public function calcularArea(): int|float{
        
        $area = $this->radio**2*M_PI;
        $area = number_format($area, 3);
        return $area;
}

    public function getDiametro():int|float
    {
        return $this->radio*2;
    }
}

?>