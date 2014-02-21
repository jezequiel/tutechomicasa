<?php

include_once('DAOGeneric.php');
include_once('IDAOPropiedad.php');
require_once ROOT_PATH."backend/db/MySQLConnect.php";

class DAOPropiedad extends DAOGeneric implements IDAOPropiedad {

    public function __construct() {

    }

    public function guardarPropiedad(Propiedad $propiedad) {
		return true;
    }
    
	public function obtenerPropiedad(Propiedad $propiedad) {
    	return true;
    }
    
	public function agregarComodidad (Propiedad $propiedad, Comodidad $comodidad) {
		
	}
	
	public function agregarImagen (Propiedad $propidad, Imagen $imagen) {
		
	}
	
	public function agregarVideo (Propidad $propiedad, Video $video) {
		
	}
	
	public function agregarPrecio (Propiedad $propiedad, Precio $precio) {
		
	}
	
	public function agregarOcupacion (Propiedad $propiedad, Ocupacion $ocupacion) {
		
	}
	
}