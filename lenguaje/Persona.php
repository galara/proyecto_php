<?php

/*
 * En la programación orientada a objetos, una clases es una construcción que se utiliza
 * como un modelo (o plantilla) para crear objetos de ese tipo. El modelo describe 
 * el estado y contiene el comportamiento que todos los objetos creados a partir de 
 * esta clase tendrán. Un objeto creado a partir de una determinada clase se denomina 
 * una instancia de esa clase.
 */

class Persona {

    private $cabeza;
    private $brazos;
    private $piernas;
    public $genero;
    public $altura;
    public $peso;

    function __construct() {
        $this->cabeza = 1;
        $this->brazos = 2;
        $this->piernas = 2;
        $this->altura = 5;
    }

    public function getPiernas() {
        return $this->piernas;
    }

    public function getCabeza() {
        return $this->cabeza;
    }

    public function getBrazos() {
        return $this->brazos;
    }

}
