<?php
ini_set('display_startup_errors',1);
ini_set('display_errors',1);
error_reporting(-1);

//----------------CONTROLADORA------------------

require_once('controller/ResourceController.php');


//-------------------MODELO---------------------

require_once('model/PDORepositorio.php');
require_once('model/Producto.php');
require_once('model/ProductoRepositorio.php');


//-------------------VISTAS---------------------

require_once('view/TwigView.php');
require_once('view/Home.php');
require_once('view/ListaProducto.php');

//------------------ACCIONES--------------------
		
		
			
			if(isset($_GET['action']))
				$accion = $_GET['action'];
			elseif(isset($_POST['action']))
				$accion = $_POST['action'];
					
			if(isset($accion)){

				switch ($accion) {
					
					case 'listaProductos':
						ResourceController::getInstance()->listaProductos();
				   
					default:
						ResourceController::getInstance()->home();
						break;
				}
				
			}else{
				ResourceController::getInstance()->home();
			}
		
	
	
?>