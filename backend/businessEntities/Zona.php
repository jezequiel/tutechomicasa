<?php

class Zona {

	private $id;
	private $zona;
	
	public function setId ($id) {
		$this->id = $id;
	}
	public function getId () {
		return $this->id;
	}
	
	public function setZona ($zona) {
		$this->zona = $zona;
	}
	public function getZona () {
		return $this->zona;
	}
	
}