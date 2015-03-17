<?php

/*
 * Una función es un conjunto de lineas de código que realizan una tarea especifica
 * y puede retornar un valor. Las funciones puden tomar parámetros que modifiquen
 * su funcionamiento. Las funciones son utilizadas para descomponer grandes problemas
 * en tareas simples y para implementar oparaciones que son comúmente utilizadas
 * durante un programa y de esta manera reducir la cantidad de código.
 */

//Funcion simple
echo "<br>Funcion Simple.<br><br>";

function mensaje() {
    return '<string> Soy una función</strong> <br>';
}

echo mensaje(); // para llamar a al afuncion mensaje
//Funcion con parametros
echo "<br>Funcion con parametros.<br><br>";

function sumar($n1, $n2) {
    return $n1 + $n2;
}

echo sumar(12, 3) . "<br>";


//Funcion con parametros opcionales
echo "<br>Funcion con parametros opcional.<br><br>";

function multiplicar($n1, $opcional = 3) {
    return $n1 * $opcional;
}

echo multiplicar(3);

echo "<br>Funcion con parametros opcional.<br><br>";

function multiplicar2($n1, $opcional = 3) {
    return $n1 * $opcional;
}

echo multiplicar2(3, 2);

echo "<br>Funcion con parametros array<br><br><br>";

function nombres(array $nombres) {
    $resultado = '';
    foreach ($nombres as $key => $value) {
        $resultado.="<strong>$key : $value</strong> <br>";
    }
    return $resultado;
}

echo nombres(array('Manuel', 'Fernando', 'Yolanda', 'Alberto'));
