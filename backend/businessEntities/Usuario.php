<?php

class Usuario {

	private $id;
	private $nombre;
	private $email;
	private $password;
	private $tel1;
	private $tel2;
	
	public function setId ($id) {
		$this->id = $id;
	}
	public function getId () {
		return $this->id;
	}
	
	public function setNombre ($nombre) {
		$this->nombre = $nombre;
	}
	public function getNombre () {
		return $this->nombre;
	}
	
	public function setEmail ($email) {
		$this->email = $email;
	}
	public function getEmail () {
		return $this->email;
	}
	
	public function setPassword ($password) {
		$this->password = $password;
	}
	public function getPassword () {
		return $this->password;
	}
	
	public function setTel1 ($tel1) {
		$this->tel1 = $tel1;
	}
	public function getTel1 () {
		return $this->tel1;
	}
	
	public function setTel2 ($tel2) {
		$this->tel2 = $tel2;
	}
	public function getTel2 () {
		return $this->tel2;
	}
	
}