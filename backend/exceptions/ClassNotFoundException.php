<?php
class ClassNotFoundException extends Exception{
    private $class;

    public function __construct($class) {
        $this->class = $class;
        parent::__construct("La clase ". $class ." no existe", 1);
    }
    public function __toString() {
        return __CLASS__.' - '.$this->getClass().": [ ".$this->getCode().' ] '.$this->getMessage();
    }
    public function getClass(){
        return $this->class;
    }

}