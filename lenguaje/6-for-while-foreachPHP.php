<?php

/*
 * Un bucle o cliclo, en programación, es una sentencia que se realiza repetidas
 * veces a un trozo aislado de código, hasta que la condición asignada a dicho 
 * bucle deje de cumplirse.
 */

// Bucle for
echo "<br>Sentencia for<br>";
$nombres = array('Fernando', 'Raul', 'Antonio', 'Javier', 'Manuel');
for ($x = 0; $x < count($nombres); $x++) {
    echo "<strong>" . $nombres[$x] . "</strong> <br>";
}

//Bucle while
echo "<br>Sentencia while<br>";
$x = 0;
$limite = 10;

while ($x <= $limite) {
    echo "<steong>$x</strong> <br>";
    $x++;
}

echo "<br>Romper un bucle while<br>";
$x = 0;
$limite = 10;
while ($x <= $limite) {
    echo "<steong>$x</strong> <br>";
    if ($x == 5) {// Para romper la ejecución del buchle en 5
        break;
    }
    $x++;
}

//Bucle foreach
echo "<br>Sentencia foreach<br>";
$asociativo = array('uno' => 1, 'dos' => 2, 'tres' => 3);
foreach ($asociativo as $key => $value) {
    echo "<strong>$key : $value </strong> <br>";
}