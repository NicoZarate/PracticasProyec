<?php

/**
 * Descripción de Cuota
 *
 * @author Florencia
 */
class Producto {
    
    private $id_producto;
    private $nombre;
    private $marca;
    private $stock;
    private $stock_minimo;
    private $proveedor;
    private $precio_venta_unitario;
    private $descripcion;
    private $fecha_alta;
    private $alta_producto;

    public function __construct( $id_producto, $nombre, $marca, $stock, $stock_minimo, $proveedor, $precio_venta_unitario, $descripcion, $fecha_alta, $alta_producto ) {
        $this->id_producto = $id_producto;
        $this->nombre = $nombre;
        $this->marca = $marca;
        $this->stock = $stock;
        $this->stock_minimo= $stock_minimo;
        $this->proveedor = $proveedor;
        $this->precio_venta_unitario = $precio_venta_unitario;
        $this->descripcion = $descripcion;
        $this->fecha_alta = $fecha_alta;
        $this->alta_producto = $fecha_alta;
    }

    public function getId_Producto() {
        return $this->id_producto;
    }

    public function getNombre() {
        return $this->nombre;
    }

        public function getMarca() {
        return $this->marca;
    }

        public function getStock() {
        return $this->stock;
    }

        public function getStock_minimo() {
        return $this->stock_minimo;
    }

        public function getProveedor() {
        return $this->proveedor;
    }

        public function getPrecio_venta_unitario() {
        return $this->precio_venta_unitario;
    }

        public function getDescripcion() {
        return $this->descripcion;
    }

        public function getFecha_alta() {
        return $this->fecha_alta;
    }

      public function getAlta_producto() {
        return $this->alta_producto;
    }

}

?>