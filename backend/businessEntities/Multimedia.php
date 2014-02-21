<?php

abstract class Multimedia {

	private $id;
	private $path;
	private $tipoArchivo;
	
	public function setId ($id) {
		$this->id = $id;
	}
	public function getId () {
		return $this->id;
	}	
	
	public function setPath ($path) {
		$this->path = $path;
	}
	public function getNombreUsuario () {
		return $this->nombreUsuario;
	}
	
	public function setTipoArchivo ($tipoArchivo) {
		$this->tipoArchivo = $tipoArchivo;
	}
	public function getTipoArchivo () {
		return $this->tipoArchivo;
	}
	
}