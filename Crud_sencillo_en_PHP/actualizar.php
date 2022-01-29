<?php
//incluye la clase Producto y CrudProducto
	require_once('crud_libro.php');
	require_once('libro.php');
	$crud= new CrudProducto();
	$producto=new Producto();
	//busca el Producto utilizando el id, que es enviado por GET desde la vista mostrar.php
	$producto=$crud->obtenerProducto($_GET['id']);
?>
<html>
<head>
	<title>Actualizar producto</title>
</head>
<body>
	<form action='administrar_producto.php' method='post'>
	<table>
		<tr>
			<input type='hidden' name='id' value='<?php echo $producto->getId()?>'>
			<td>Nombre:</td>
			<td> <input type='text' name='nombre' value='<?php echo $producto->getNombre()?>'></td>
		</tr>
		<tr>
			<td>Codigo:</td>
			<td><input type='text' name='codigo' value='<?php echo $producto->getCodigo()?>' ></td>
		</tr>
		<tr>
			<td>Categoria:</td>
			<td><input type='text' name='categoria' value='<?php echo $producto->getCategoria() ?>'></td>
		</tr>
        <tr>
			<td>Stock:</td>
			<td><input type='text' name='stock' value='<?php echo $producto->getStock()?>' ></td>
		</tr>
        <tr>
			<td>Precio:</td>
			<td><input type='text' name='precio' value='<?php echo $producto->getPrecio()?>' ></td>
		</tr>
		<input type='hidden' name='actualizar' value'actualizar'>
	</table>
	<input type='submit' value='Guardar'>
	<a href="index.php">Volver</a>
</form>
</body>
</html>