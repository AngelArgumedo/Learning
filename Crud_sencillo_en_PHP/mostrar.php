<?php
//incluye la clase Producto y Crudproducto
require_once('crud_producto.php');
require_once('producto.php');
$crud=new CrudProducto();
$producto= new Producto();
//obtiene todos los productos con el método mostrar de la clase crud
$listaProductos=$crud->mostrar();
?>

<html>
<head>
	<title>Mostrar Productos</title>
</head>
<body>
	<table border=1>
		<head>
			<td>Nombre</td>
			<td>Codigo</td>
			<td>Categoria</td>
            <td>Stock</td>
            <td>Precio</td>
			<td>Actualizar</td>
			<td>Eliminar</td>
		</head>
		<body>
			<?php foreach ($listaProductos as $producto) {?>
			<tr>
				<td><?php echo $producto->getNombre() ?></td>
				<td><?php echo $producto->getCodigo() ?></td>
				<td><?php echo $producto->getCategoria()?> </td>
                <td><?php echo $producto->getStock()?> </td>
                <td><?php echo $producto->getPrecio()?> </td>
				<td><a href="actualizar.php?id=<?php echo $producto->getId()?>&accion=a">Actualizar</a> </td>
				<td><a href="administrar_producto.php?id=<?php echo $producto->getId()?>&accion=e">Eliminar</a>   </td>
			</tr>
			<?php }?>
		</body>
	</table>
	<a href="index.php">Volver</a>
</body>
</html>