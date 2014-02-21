<?php

class Precio {

	private $id;
	private $idPropiedad;
	private $fechaDesde;
	private $fechaHasta;
	private $precio;
	
	public function setId ($id) {
		$this->id = $id;
	}
	public function getId () {
		return $this->id;
	}	
	
	public function setIdPropiedad ($idPropiedad) {
		$this->idPropiedad = $idPropiedad;
	}
	public function getIdPropiedad () {
		return $this->idPropiedad;
	}
	
	public function setFechaDesde ($fechaDesde) {
		$this->fechaDesde = $fechaDesde;
	}
	public function getFechaDesde () {
		return $this->fechaDesde;
	}
	
	public function setFechaHasta ($fechaHasta) {
		$this->fechaHasta = $fechaHasta;
	}
	public function getFechaHasta () {
		return $this->fechaHasta;
	}
	
	public function setPrecio ($precio) {
		$this->precio = $precio;
	}
	public function getPrecio () {
		return $this->$precio;
	}
}