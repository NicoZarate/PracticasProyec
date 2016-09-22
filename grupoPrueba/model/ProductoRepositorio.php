<?php


 
class ProductoRepositorio extends PDORepositorio {

     private static $instance;

    public static function getInstance() {

        if (!isset(self::$instance)) {
            self::$instance = new self();
        }

        return self::$instance;
    }
    
    private function __construct() {
        
    }
	
	
	public function listAll() {

        $mapper = function($row) {
            $producto = new Producto($row['id_producto'], $row['nombre'], $row['marca'], $row['stock'], $row['stock_minimo'], $row['proveedor'], $row['precio_venta_unitario'], $row['descripcion'], $row['fecha_alta'], $row['alta_producto']);
            return $producto;
        };

        $answer = $this->queryList(
                "SELECT *
                FROM producto;", ['BASE TABLE'], $mapper);

        return $answer;
    }

    

}

?>