<?php
// incluye la clase Db
require_once('conexion.php');

	class CrudProducto{
		// constructor de la clase
		public function __construct(){}

		// método para insertar, recibe como parámetro un objeto de tipo producto
		public function insertar($producto){
			$db=Db::conectar();
			$insert=$db->prepare('INSERT INTO productos values(NULL,:nombre,:codigo,:categoria,:stock,:precio)');
			$insert->bindValue('nombre',$producto->getNombre());
			$insert->bindValue('codigo',$producto->getCodigo());
			$insert->bindValue('categoria',$producto->getCategoria());
            $insert->bindValue('stock',$producto->getStock());
            $insert->bindValue('precio',$producto->getPrecio());
			$insert->execute();

		}

		// método para mostrar todos los producto
		public function mostrar(){
			$db=Db::conectar();
			$listaProductos=[];
			$select=$db->query('SELECT * FROM productos');

			foreach($select->fetchAll() as $producto){
				$myProducto= new Producto();
				$myProducto->setId($producto['id']);
				$myProducto->setNombre($producto['nombre']);
				$myProducto->setCodigo($producto['codigo']);
				$myProducto->setCategoria($producto['categoria']);
				$myProducto->setStock($producto['stock']);
				$myProducto->setPrecio($producto['precio']);
				$listaProductos[]=$myProducto;
			}
			return $listaProductos;
		}

		// método para eliminar un producto, recibe como parámetro el id del producto
		public function eliminar($id){
			$db=Db::conectar();
			$eliminar=$db->prepare('DELETE FROM productos WHERE ID=:id');
			$eliminar->bindValue('id',$id);
			$eliminar->execute();
		}

		// método para buscar un producto, recibe como parámetro el id del producto
		public function obtenerProducto($id){
			$db=Db::conectar();
			$select=$db->prepare('SELECT * FROM productos WHERE ID=:id');
			$select->bindValue('id',$id);
			$select->execute();
			$producto=$select->fetch();
			$myProducto= new Producto();
			$myProducto->setId($producto['id']);
			$myProducto->setNombre($producto['nombre']);
			$myProducto->setCodigo($producto['codigo']);
			$myProducto->setCategoria($producto['categoria']);
			$myProducto->setStock($producto['stock']);
			$myProducto->setPrecio($producto['precio']);
			return $myProducto;
		}

		// método para actualizar un producto, recibe como parámetro el producto
		public function actualizar($producto){
			$db=Db::conectar();
			$actualizar=$db->prepare('UPDATE productos SET nombre=:nombre, codigo=:codigo, categoria=:categoria, stock=:stock, precio=:precio  WHERE ID=:id');
			$actualizar->bindValue('id',$producto->getId());
			$actualizar->bindValue('nombre',$producto->getNombre());
			$actualizar->bindValue('codigo',$producto->getCodigo());
			$actualizar->bindValue('categoria',$producto->getCategoria());
			$actualizar->bindValue('stock',$producto->getStock());
			$actualizar->bindValue('precio',$producto->getPrecio());
			$actualizar->execute();
		}
	}
?>