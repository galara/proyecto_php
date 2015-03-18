<?php

/*
  addslashes -> Escapa un string con barras invertidas
 */

$string = "' or '1' = '1'";
echo addslashes($string) . '<br>';

/* htmlentities -> Convierte todos los caracteres aplicables en entidades html */
$string = '<script> alert("hack");</script>';
echo htmlentities($string) . '<br>';

/* htmlspecialchars -> Convierte todos los caracteres especiales en entidaes html 
 * Caracteres especiales <> ' " &
 */

$string = '<strong>Hola Mundo</strong>';
echo htmlspecialchars($string) . '<br>';

/* implode -> Une elementos de un array enun string */
$lista = array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9);

$unir = implode('-', $lista);
echo $unir;
echo '<br>';
$unir = implode('*', $lista);
echo $unir;

$string = 'repetir';
$repetir = str_repeat($string, 3) . '<br>';
echo $repetir;

/* str_replace -> Reemplaza todas las apariciones del string buscado con string de reemplazo */
$buscar = 'hola';
$reemplazar = 'adios';
$string = 'hola amigo';

echo str_replace($buscar, $reemplazar, $string) . '<br>';

/* strkeb -> Obtiene la longitud de un string */

$string = 'contar';
echo strlen($string) . '<br>';

/* strpos -> Encuentra la posición de la primera ocurrencia de un substring en un string */
$buscar = '1';
$string = '4316';
$pos = strpos($string, $buscar);

if ($pos == true) {
    echo "$buscar ha sido encontrado en la pocición: $pos en el string: $string" . '<br>';
} else {
    echo "$buscar no ha sido encontrado en el string: $string" . '<br>';
}

/* strtolower -> Convierte una cadena en minúscula */

$string = 'PHP';
echo strtolower($string) . '<br>';

/* strtoupper -> Convierte una cadema en mayúscula */
$string = 'phP';
echo strtoupper($string) . '<br>';

