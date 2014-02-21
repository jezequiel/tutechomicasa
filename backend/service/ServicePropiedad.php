<?php

include_once('ServiceGeneric.php');
include_once('IServicePropiedad.php');

class ServicePropiedad implements IServicePropiedad {
	
	private $propiedadDAO;

    public function __construct() {
        $this->$propiedadDAO = new DAOPropiedad();
    }

	public function guardarPropiedad (Propiedad $propiedad) {
		
	}
	
	public function obtenerPropiedad (Propiedad $proepiedad) {
		
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