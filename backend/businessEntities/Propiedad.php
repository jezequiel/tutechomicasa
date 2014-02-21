<?php

class Propiedad {
	
	private $id;
	private $tipoPropiedad;
	private $idUsuario;
	private $ambientes;
	private $dormitorios;
	private $ant;
	private $banos;
	private $supTotal;
	private $supCubierta;
	private $plantas;
	private $paxMax;
	private $observaciones;
	private $activo;
	private $idZona;
	
	private $comodidades;
	private $precios;
	private $ocupaciones;
	private $fotos;
	private $videos;	
	
	public function setId ($id) {
		$this->id = $id;
	}
	public function getId () {
		return $this->id;
	}
	
	public function setTipoPropiedad ($tipoPropiedad) {
		$this->tipoPropiedad = $tipoPropiedad;
	}
	public function getTipoPropiedad () {
		return $this->tipoPropiedad;
	}
	
	public function setIdUsuario ($idUsuario) {
		$this->tipoPropiedad = $tipoPropiedad;
	}
	public function getIdUsuario () {
		return $this->Usuario;
	}
	
	public function setAmbientes ($ambientes) {
		$this->ambientes = $ambientes;
	}
	public function getAmbientes () {
		return $this->ambientes;
	}
	
	public function setDormitorios ($dormitorios) {
		$this->dormitorios = $dormitorios;
	}
	public function getDormitorios () {
		return $this->dormitorios;
	}
	
	public function setAnt ($ant) {
		$this->ant = $ant;
	}
	public function getAnt () {
		return $this->ant;
	}

	public function setBanos ($banos) {
		$this->banos = $banos;
	}
	public function getBanos () {
		return $this->banos;
	}
	
	public function setSupTotal ($supTotal) {
		$this->supTotal = $supTotal;
	}
	public function getSupTotal () {
		return $this->supTotal;
	}
	
	public function setSupCubierta ($supCubierta) {
		$this->supCubierta = $supCubierta;
	}
	public function getSupCubierta () {
		return $this->supCubierta;
	}
	
	public function setPlantas ($plantas) {
		$this->plantas = $plantas;
	}
	public function getPlantas () {
		return $this->plantas;
	}
	
	public function setPaxMax($paxMax) {
		$this->paxMax = $paxMax;
	}
	public function getPaxMax() {
		return $this->paxMax;
	}
	
	public function setObservaciones($observaciones) {
		$this->observaciones = $observaciones;
	}
	public function getObservaciones() {
		return $this->observaciones;
	}

	public function setActivo($activo) {
		$this->activo = $activo;
	}
	public function getActivo() {
		return $this->activo;
	}
	
	public function setZona($zona) {
		$this->zona = $zona;
	}
	public function getZona() {
		return $this->zona;
	}
	
	public function setComodidades($comodidades) {
		$this->comodidades = $comodidades;
	}
	public function getComodidades() {
		return $this->comodidades;
	}
	
	public function setPrecios($precios) {
		$this->precios = $precios;
	}
	public function getPrecios() {
		return $this->precios;
	}
	
	public function setOcupaciones($ocupaciones) {
		$this->ocupaciones = $ocupaciones;
	}
	public function getOcupaciones() {
		return $this->ocupaciones;
	}

	public function setFotos($fotos) {
		$this->fotos = $fotos;
	}
	public function getFotos() {
		return $this->fotos;
	}
	
	public function setVideos($videos) {
		$this->videos = $videos;
	}
	public function getVideos() {
		return $this->videos;
	}
	
}
