<?php

interface IDAOUsuario {
    
    public function obtenerUsuario ($nombreUsuario);
    public function guardarUsuario (Usuario $usuario);
    public function eliminarUsuario (Usuario $usuario);
    
}