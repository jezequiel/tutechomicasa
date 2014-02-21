<?php

class ArrayEmptyException extends Exception {
	
	public function __construct() {
        parent::__construct("Array esta vacio. ¿Olvido fromArray? ¿Olvivido load?");
    }
	
}