<?php

class Imagen extends Multimedia {

 	public function __construct() {
        $this->tipoArchivo = TIPOARCHIVO::IMAGEN;
    }
	
}