<?php

interface IServicePropiedad {

	public function guardarPropiedad (Propiedad $propiedad);
	public function obtenerPropiedad (Propiedad $proepiedad);
	public function agregarComodidad (Propiedad $propiedad, Comodidad $comodidad);
	public function agregarImagen (Propiedad $propidad, Imagen $imagen);
	public function agregarVideo (Propidad $propiedad, Video $video);
	public function agregarPrecio (Propiedad $propiedad, Precio $precio);
	public function agregarOcupacion (Propiedad $propiedad, Ocupacion $ocupacion);
	
}