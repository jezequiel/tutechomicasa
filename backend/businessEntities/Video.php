<?php

class Video extends Multimedia {

 	public function __construct() {
        $this->tipoArchivo = TIPOARCHIVO::VIDEO;
    }
	
}