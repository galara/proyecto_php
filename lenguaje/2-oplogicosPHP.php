<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 * 
 * && todas las condiciones son ciertas
 * || Al menos una de las condiciones es cierta
 * ! las conidiciones o la condicion no es cierta
 */

$variable1 = 4;
$variable2 = 4;
$variable3 = 5;
$variable4 = 4;

if ($variable1 == $variable2 && $variable3 > $variable4) {
    echo "Es correctro.<br>";
} else {
    echo "Es incorrecto.<br>";
}

$variable4 = 5;
if ($variable1 == $variable2 && $variable3 > $variable4) {
    echo "Es correctro.<br>";
} else {
    echo "Es incorrecto.<br>";
}

if ($variable1 == $variable2 || $variable3 > $variable4) {
    echo "Es correctro.<br>";
} else {
    echo "Es incorrecto.<br>";
}

$variable1 = 2;
$variable2 = 2;
if (!($variable1 > $variable2)) {
    echo "No es cierto.<br>";
} else {
    echo "Es cierto.<br>";
}

