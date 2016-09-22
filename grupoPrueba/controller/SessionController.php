<?php

/**
 * Description of SessionController
 *
 * @author jota
 */
class SessionController {
    
    private static $instance;
	

    public static function getInstance() {

        if (!isset(self::$instance)) {
            self::$instance = new self();
        }

        return self::$instance;
    }
	
    
    private function __construct() {
        session_start();
    }
	
	
	public function iniciar()
	{
		$view = new Login();
		$view->show();
	}
	
	public function terminar()
	{
		$configuracion = ConfiguracionRepositorio::getInstance()->getConfiguration("todo");
		$view = new Home();
		$view->show($configuracion);
	}
	

    public function login($username,$password)
	{
        $usuario = UsuarioRepositorio::getInstance()->cantUsuario($username,$password);
        
        if(count($usuario) == 0)
        {
            ResourceController::getInstance()->home();
        }
        else
		{
			$_SESSION['idUsuario'] = $usuario[0]->getIdUsuario();
			$_SESSION['usuario'] = $usuario[0]->getUsername();
			$_SESSION['rol'] = $usuario[0]->getidRol();
			ResourceController::getInstance()->backend();
        }
    }
	

    public function logout()
	{
        session_unset();
        session_destroy();
    }
	
    
    public function administrador()
	{
		if(isset($_SESSION['rol']))
			if($_SESSION['rol']=="1")
				return true;
		return false;
    }
	
	
	public function administradorGestion()
	{
		if(isset($_SESSION['rol']))
			if($_SESSION['rol']=="1" || $_SESSION['rol']=="2")
				return true;
		return false;
    }
	
	
	public function administradorGestionConsulta()
	{
		if(isset($_SESSION['rol']))
			if($_SESSION['rol']=="1" || $_SESSION['rol']=="2" || $_SESSION['rol']=="3")
				return true;
		return false;
    }
    
}
