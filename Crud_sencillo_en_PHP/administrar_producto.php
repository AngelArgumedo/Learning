<?php
//incluye la clase Producto y CrudProducto
require_once('crud_producto.php');
require_once('producto.php');

$crud= new CrudProducto();
$producto= new Producto();

	// si el elemento insertar no viene nulo llama al crud e inserta un producto
	if (isset($_POST['insertar'])) {
		$producto->setNombre($_POST['nombre']);
		$producto->setCodigo($_POST['codigo']);
		$producto->setCategoria($_POST['categoria']);
		$producto->setStock($_POST['stock']);
		$producto->setPrecio($_POST['precio']);
		//llama a la función insertar definida en el crud
		$crud->insertar($producto);
		header('Location: index.php');
	// si el elemento de la vista con nombre actualizar no viene nulo, llama al crud y actualiza el producto
	}elseif(isset($_POST['actualizar'])){
		$producto->setId($_POST['id']);
		$producto->setNombre($_POST['nombre']);
		$producto->setCodigo($_POST['codigo']);
		$producto->setCategoria($_POST['categoria']);
		$producto->setStock($_POST['stock']);
		$producto->setPrecio($_POST['precio']);
		$crud->actualizar($producto);
		header('Location: index.php');
	// si la variable accion enviada por GET es == 'e' llama al crud y elimina un producto
	}elseif ($_GET['accion']=='e') {
		$crud->eliminar($_GET['id']);
		header('Location: index.php');		
	// si la variable accion enviada por GET es == 'a', envía a la página actualizar.php 
	}elseif($_GET['accion']=='a'){
		header('Location: actualizar.php');
	}
?>