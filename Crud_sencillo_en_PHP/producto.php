<?php
	class Producto{
		private $id;
		private $nombre;
		private $codigo;
		private $categoria;
        private $stock;
        private $precio;

		function __construct(){}

		public function getNombre(){
		return $this->nombre;
		}

		public function setNombre($nombre){
			$this->nombre = $nombre;
		}

		public function getCodigo(){
			return $this->codigo;
		}

		public function setCodigo($codigo){
			$this->codigo = $codigo;
		}

		public function getCategoria(){
		return $this->categoria;
		}

		public function setCategoria($categoria){
			$this->categoria = $categoria;
		}

		public function getStock(){
            return $this->stock;
        }
    
        public function setStock($stock){
            $this->stock = $stock;
        }

        public function getPrecio(){
            return $this->precio;
        }
    
        public function setPrecio($precio){
            $this->precio = $precio;
        }

		public function getId(){
			return $this->id;
		}

		public function setId($id){
			$this->id = $id;
		}
	}
?>