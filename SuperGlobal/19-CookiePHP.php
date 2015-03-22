<?php
/*
*Una cookie (o galleta informática) es una pequeña infomación enviada por un
*sitio web y almacenada en el navegador del usuario, de manera que el sitio web
*pueda consultar la actividad privada del usuario.
*/

$resultado = null;

if(!empty($_COOKIE["galleta"]))
{
	$resultado = $_COOKIE["galleta"];
}

if (isset($_GET["crear"]) && $_GET["crear"] == "true")
{
	setcookie("galleta", "He creado una cookie",time()+(60*6024));
	header("location: 19-CookiePHP.php");
}
if( isset($_GET["eliminar"]) && $_GET["eliminar"] == "true" )
{
	setcookie("galleta",null,-1);
	header("location: 19-CookiePHP.php");
}
?>

<a href="?crear=true">Crear cookie</a><br>
<a href="?eliminar=true">Eliminar cookie</a><br>

<strong> <?php echo $resultado; ?> </strong>

