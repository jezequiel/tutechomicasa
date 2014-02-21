<?php

include_once('DAOGeneric.php');
include_once('IDAOUsuario.php');
require_once ROOT_PATH."backend/db/MySQLConnect.php";

class DAOUsuario extends DAOGeneric implements IDAOUsuario {

    public function __construct() {

    }

    public function obtenerUsuario($nombreUsuario) {
    	$usuario = new Usuario();
    	mysql_select_db(MySQLConnect::getMySQLConnection());
    	
		$query = "	Select * From usuarios ";
		
		$result = mysql_query($query);
		$arrayResult = array();
		$temp = array();
		
		if (mysql_affected_rows() > 0) {
			if ($result != null) {
				while($row = mysql_fetch_array($result))
				{
					$usuario->setId($row['Id']);
					$usuario->setNombre($row['Nombre']);
			    	$usuario->setPassword($row['Pass']);
			    	$usuario->setEmail($row['Email']);
			    	$usuario->setTel1($row['Tel01']);
			    	$usuario->setTel2($row['Tel02']);
				}
			}
		}
		return $usuario;
    }
    
	public function guardarUsuario(Usuario $usuario) {
    	mysql_select_db(MySQLConnect::getMySQLConnection());
    	
    	if ($usuario->getId() == 0) {
    		$query =  "	Insert Into usuarios (Nombre, Email, Pass, Tel01, Tel02) Values ( ";
    		$query .= " '".$usuario->getNombre()."', ";
    		$query .= " '".$usuario->getEmail()."', ";
    		$query .= " '".$usuario->getPassword()."', ";
    		$query .= " '".$usuario->getTel1()."', ";
    		$query .= " '".$usuario->getTel2()."') ";
    	} else {
    		$query =  " Update usuarios Set ";
    		$query .= " Nombre = '".$usuario->getNombre()."'";
    		$query .= " Email = '".$usuario->getEmail()."'";
    		$query .= " Pass = '".$usuario->getPassword()."'";
    		$query .= " Tel01 = '".$usuario->getTel1()."'";
    		$query .= " Tel02 = '".$usuario->getTel2()."'";
    		$query .= " Where Id = ".$usuario->getId();
    	}
		
		$result = mysql_query($query);
		$arrayResult = array();
		$temp = array();
		
		if (mysql_affected_rows() > 0) {
			return true;
		}
		return false;;
    }
    
	public function eliminarUsuario(Usuario $usuario) {
    	mysql_select_db(MySQLConnect::getMySQLConnection());
    	
    	$query =  "	Delete From usuarios ";
    	$query .= " Where Email = '".$usuario->getEmail()."'";
    	
		$result = mysql_query($query);
		$arrayResult = array();
		$temp = array();
		
		if (mysql_affected_rows() > 0) {
			return true;
		}
		return false;
    }
	
}