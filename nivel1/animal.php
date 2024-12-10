<?php
//NIVEL 1
abstract class Animal{

    protected $nombre;
    
    abstract function __construct(string $nombre);
    abstract public function makeSound();
}




class Gato extends Animal {
    
    public function __construct(string $nombre)
    {
        $this->nombre=$nombre;
    }

    public function getNombre(){
        return $this->nombre;
    }

    public function makeSound(){
        return "Miau";
    }
}

class Perro extends Animal {

    public function __construct(string $nombre)
    {
        $this->nombre=$nombre;
    }

    public function getNombre(){
        return $this->nombre;
    }

    public function makeSound(){
        return "Guau";
    }

}
