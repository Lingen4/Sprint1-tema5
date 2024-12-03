<?php
//NIVEL 1
abstract class animal{

    protected $nombre;
    
    abstract function __construct($nombre);
    abstract public function makeSound();
}




class gato extends animal {
    
    public function __construct($nombre)
    {
        $this->nombre=$nombre;
    }

    public function getNombre(){
        return $this->nombre;
    }

    public function makeSound(){
        echo "Miau";
    }
}

class perro extends animal {

    public function __construct($nombre)
    {
        $this->nombre=$nombre;
    }

    public function getNombre(){
        return $this->nombre;
    }

    public function makeSound(){
        echo "Guau";
    }

}
