<?php




class ListaProducto extends TwigView {
    
    public function show($productos) {
        
        echo self::getTwig()->render('listadoProductos.html.twig', array('productos' => $productos));
        
        
    }
    
}