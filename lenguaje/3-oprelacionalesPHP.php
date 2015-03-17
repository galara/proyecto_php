<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 * 
 * == Igual
 * === Igual. Mismo tipo de datos y valor
 * != Distinto
 * !== Distinto. Distinto tipo de datos y valor
 * > Mayor que
 * < Menor que
 * >= Mayor o igual que
 * <= Menor o ugual que
 */

$numero1 = 2;
$numero2 = 2;

if ($numero1 == $numero2) {
    echo "Verdadero.<br>";
} else {
    echo "Falso.<br>";
}

if ($numero1 === $numero2) {
    echo "Verdadero.<br>";
} else {
    echo "Falso.<br>";
}

if ($numero1 < $numero2) {
    echo "Verdadero.<br>";
} else {
    echo "Falso.<br>";
}

if ($numero1 > $numero2) {
    echo "Verdadero.<br>";
} else {
    echo "Falso.<br>";
}