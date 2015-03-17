<?php

/*
 * Capturar errores a lo largo de la ejecucion.
 */


echo "<strong>Excepciónes </strong><br>";

function entero($entero) {
    if (!intval($entero)) {
        throw new Exception("No se trata de un número entero");
    }
    return $entero;
}

try {
    echo entero('string');
} catch (Exception $exc) {
    echo 'Excepción capturada: ' . $exc->getMessage();
}

//Division por cero 
echo "<br><br><strong>Division por cero</strong><br>";

function division($n1, $n2) {
    if (!$n2) {
        throw new Exception('Division por cero');
    }
    return $n1 / $n2;
}

try {
    echo division(12, 0);
} catch (Exception $exc) {
    echo 'Exceptión capturada ' . $exc->getMessage();
} 

        

