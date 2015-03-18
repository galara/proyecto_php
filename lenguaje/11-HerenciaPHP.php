<?php

require_once 'Persona.php';

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

Class Deportista extends Persona {

    public $nombre;
    public $pais;
    public $deporte;

    public function correr() {
        return 'El deportista esta corriendo';
    }

    public function saltar() {
        return 'El deportista esta saltando';
    }

    public function nadar() {
        return 'El deportista esta nadando';
    }

}
