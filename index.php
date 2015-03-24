<?php
require_once 'lenguaje/Persona.php';
require_once 'lenguaje/11-HerenciaPHP.php';

session_start();
if($_SESSION["login"]==true){
    #echo "Bienvenido ".$_SESSION["nombre"];." ID : ".$_SESSION["id_usuario"];
}else{
    session_unset();
    session_destroy();
    header("location: seleccionar.php");
}

?>

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
        ?>

        <h3>Pesona Deportista</h3>
        <?php
        $deportista = new Deportista();
        $deportista->genero = 'Femenino';
        echo 'Genero: ' . $deportista->genero . '<br>';
        $deportista->altura = 1.60;
        echo 'Altura' . $deportista->altura . '<br>';
        $deportista->peso = 55;
        echo 'Peso' . $deportista->peso . '<br>';
        $deportista->nombre = 'Yolanda';
        echo 'Nombre: ' . $deportista->nombre . '<br>';
        $deportista->pais = 'Argentina';
        echo 'Pais: ' . $deportista->pais . '<br>';
        $deportista->deporte = 'Natacion';
        echo 'Deporte: ' . $deportista->deporte . '<br>';
        echo $deportista->nadar() . '<br>';
        echo $deportista->correr() . '<br>';
        echo "prueba de sublime";
        echo "prueba de sublime2";
        
        ?>
    </body>
</html>
