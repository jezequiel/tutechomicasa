<?php

include_once('ServiceGeneric.php');
include_once('IServiceUsuario.php');

class ServiceUsuario implements IServiceUsuario {

    private $UsuarioDAO;

    public function __construct() {
        $this->UsuarioDAO = new DAOUsuario();
    }
    
    public function login($nombreUsuario, $password) {
    	$usuario = $this->UsuarioDAO->obtenerUsuario($nombreUsuario);
    	if ($usuario != null) {
    		if ($usuario->getPassword() == $password) {
    			return true;
    		}
    	}
    	return false;
    }
    
    public function obtenerUsuario ($nombreUsuario) {
    	$usuario = $this->UsuarioDAO->obtenerUsuario($nombreUsuario);
    	return $usuario;	
    }
    
	public function actualizarUsuario (Usuario $usuario) {
		
	}
	   
	public function registrarUsuario (Usuario $usuario) {
		return $this->UsuarioDAO->guardarUsuario($usuario);
	}
	
	public function eliminarUsuario(Usuario $usuario) {
		return $this->UsuarioDAO->eliminarUsuario($usuario);
	}
	
}