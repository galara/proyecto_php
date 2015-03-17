<?php

/*
 * Los arrays son listas de elementos indexados, los arrays permiten albergar tantos
 * elementos como sean necesarios, a cada elemento corresponde un valor que puede ser
 * del tipo de datos qeu se desee, al primer elemento de un array le corresponde al 
 * index 0, incrementandose en 1 por cada nuevo elemento.
 */

$lista = array('hola', 3, 1.5, 'mundo');
echo $lista[0] . "<br>";
echo $lista[1] . "<br>";
echo $lista[2] . "<br>";
echo $lista[3] . "<br> <br>";

//Arrays multidimencionales
$miltidimensional = array(array('Raul', 'Peru'), array('Fernando', 'Argentina'));
echo $miltidimensional[0][0] . "<br>";
echo $miltidimensional[0][1] . "<br>";
echo $miltidimensional[1][0] . "<br>";
echo $miltidimensional[1][1] . "<br> <br>";

//Array asociativo
$asociativo = array('Color' => 'Verde', 'Precio' => 300);
echo $asociativo['Color'] . "<br>";
echo $asociativo['Precio'] . "<br>";
