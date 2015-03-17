<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$numero1 = 3;
$numero2 = 3;
$numero3 = 4;

if ($numero1 != $numero3) {
    echo "<strong>$numero1 es distindo de $numero3</strong> <br>";
} else if ($numero1 == $numero2) {
    echo "<strong>$numero1 es igual a $numero2</strong> <br>";
} else {
    echo "<strong>Ninguna de las condiciones es cierta</strong> <br>";
}

/*  Equivalente a if else
 *  ?entonces
 * : de lo contrario
 */
$numero1 = 1;
$numero2 = 2;

$numero1 != $numero2 ? $resultado = 'Es cierto' : $resulado = 'Es falso';
echo $resultado . "<br>";

//Sentencia Switch
$nombre = 'Fernando';
switch ($nombre) {
    case 'Raul':
        echo "<strong>$nombre ha sido encontrado</strong>";
        break;
    case 'Pepe':
        echo "<strong>$nombre ha sido encontrado</strong>";
        break;
    case 'Fernando':
        echo "<strong>$nombre ha sido encontrado</strong>";
        break;
    default:
        echo "<strong>$nombre no ha sido encontrado</strong>";
        break;
}


