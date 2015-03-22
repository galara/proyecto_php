<?php
/*
$_GET -> Nos va a permitir capturar parámetros pasados vía url
*/
$nombre = null;
$apellidos = null;


if (isset($_GET['nombre']) && isset($_GET['apellidos']) ) {
	$nombre = $_GET['nombre'];
	$apellidos = $_GET['apellidos'];

	echo "".$nombre." ".$apellidos;
}

?>


<form method='GET' action='<?php echo $_SERVER['PHP_SELF'];?>' >
<table>
	<tr>
		<td>Nombre: </td>
		<td> <input type="text" name="nombre"></td>
	</tr>
	<tr>
		<td>Apellidos: </td>
		<td> <input type="text" name="apellidos"></td>
	</tr>

</table>
<input type="submit" value="Enviar">
</form>

<a href="15-getPHP.php?nombre=Fernando&apellido=Gallardo Cruz">Obtener Nombre</a>
