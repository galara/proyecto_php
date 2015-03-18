<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/* array_pop -> elimina el último elemento de un array */
$array = array(1, 2, 3, 4, 5);
array_pop($array);
print_r($array);
//var_dump($array);

foreach ($array as $key => $value) {
    echo "$key => $value <br>";
}

$frutas = array('peras', 'naranjas', 'manzanas');
array_push($frutas, 'uvas', 'ciruelas');

foreach ($frutas as $key => $value) {
    echo "$key => $value <br>";
}

/* array_shift -> Elimina un elemento del principio de un array */
$nombre = array('Antonio', 'mario', 'José');
array_shift($nombre);
foreach ($nombre as $key => $value) {
    echo "$key => $value <br>";
}


