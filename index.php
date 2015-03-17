<?php require 'lenguaje/Persona.php'; ?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $persona = new Persona();
        //echo $persona->cabeza();
        echo 'Cabeza: ' . $persona->getCabeza() . '<br>';
        echo 'Pernas: ' . $persona->getPiernas() . '<br>';
        echo 'Brazos: ' . $persona->getBrazos() . '<br>';
        $persona->genero = 'Masculino';
        echo 'Genero: ' . $persona->genero . '<br>';
        $persona->altura = 1.8;
        echo 'Altura: ' . $persona->altura . '<br>';
        $persona->peso = 80;
        echo 'peso: ' . $persona->peso . '<br>';

        // put your code here
        ?>
    </body>
</html>
