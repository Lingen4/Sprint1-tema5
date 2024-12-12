<?php

class Rectangulo extends Shape{


public function calcularArea(): int|float{
     
    $area = $this->alto*$this->ancho;
    return $area;
}

}

?>