<html>
<head>
	<title> Ingresar producto</title>
</head>
<header>
Ingresa los datos del producto
</header>
<form action='administrar_producto.php' method='post'>
	<table>
		<tr>
			<td>Nombre producto:</td>
			<td> <input type='text' name='nombre'></td>
		</tr>
		<tr>
			<td>Codigo:</td>
			<td><input type='text' name='codigo' ></td>
		</tr>
		<tr>
			<td>Categoria:</td>
			<td><input type='text' name='categoria' ></td>
		</tr>
        <tr>
			<td>Stock:</td>
			<td><input type='text' name='stock' ></td>
		</tr>
        <tr>
			<td>Precio:</td>
			<td><input type='text' name='precio' ></td>
		</tr>
		<input type='hidden' name='insertar' value='insertar'>
	</table>
	<input type='submit' value='Guardar'>
	<a href="index.php">Volver</a>
</form>

</html>