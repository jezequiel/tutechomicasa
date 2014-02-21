<?php

class RecordNotFoundException extends Exception {
	
	public function __construct() {
        parent::__construct("El registro no fue encontrado en la DB.");
    }
	
}