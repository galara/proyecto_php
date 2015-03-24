<?php
require "../sql/Conexion.php";
require "../CRUD/Crud.php";

$model = new Crud;
$model->select = "*";
$model->from = "productos";
$model->Read();
$filas = $model->rows;
$total = count($filas);

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>read</title>
</head>
<body>
	<h1> CRUD . Tabla productos</h1>
	<strong> El total de filas es ...<?php echo $total ?> </strong>
	<table>
		<tr>
			<th>ID_PRODUCTO</th>
			<th>NOMBNRE</th>
			<th>DESCRIPCION</th>
			<th>CATEGORIA</th>
			<th>PRECIO</th>
			<th>ACTUALIZAR</th>
			<th>ELIMINAR</th>
		</tr>
		<?php
		foreach ($filas as $fila) {
			# code...
			echo "<tr>";
			echo "<td>".$fila["id_producto"]."</td>";
			echo "<td>".$fila["nombre"]."</td>";	
			echo "<td>".$fila["descripcion"]."</td>";
			echo "<td>".$fila["categoria"]."</td>";
			echo "<td>".$fila["precio"]."</td>";
			echo "<td> <a href='update.php?id_producto=".$fila['id_producto']."'> Actualizar </a> </td>";
			echo "<td> <a href='delete.php?id_producto=".$fila['id_producto']."'> Eliminar </a> </td>";

			echo "</tr>";


		}
		?> 
	</table>
	
</body>
</html>