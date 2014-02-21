<?php

interface IServiceUsuario {

	public function login ($nombreUsuario, $password);
	public function obtenerUsuario ($nombreUsuario);
	public function actualizarUsuario (Usuario $usuario);
	public function registrarUsuario (Usuario $usuario);
	public function eliminarUsuario (Usuario $usuario);
	
}