<?php 

// <C:\wamp\www\tutechomicasa\test>PHPUnit-3.1.6\pear-phpunit.bat TestUsuario.php

define('ROOT_PATH', '../');
include_once '../backend/businessEntities/Usuario.php';
include_once '../backend/service/ServiceUsuario.php';
include_once '../backend/dao/DAOUsuario.php';

class TestUsuario extends PHPUnit_Framework_TestCase {

    function testRegistro() {
    	$usuario = new Usuario();
    	$srvUsuario = new ServiceUsuario();
    	
    	$usuario->setNombre("test");
    	$usuario->setEmail("test@test.com");
    	$usuario->setPassword("123456");
    	$usuario->setTel1("111");
    	$usuario->setTel2("222");
    	$srvUsuario->eliminarUsuario($usuario);
    	
        $this->assertEquals($usuario->getNombre(), "test");
        $this->assertEquals($usuario->getEmail(), "test@test.com");
        $this->assertEquals($usuario->getPassword(), "123456");
        $this->assertEquals($usuario->getTel1(), "111");
        $this->assertEquals($usuario->getTel2(), "222");
        
    	$this->assertTrue($srvUsuario->registrarUsuario($usuario));
    	
    	$usuario = new Usuario();
    	$usuario = $srvUsuario->obtenerUsuario($usuario->getNombre());
    	$this->assertEquals($usuario->getNombre(), "test");
        $this->assertEquals($usuario->getEmail(), "test@test.com");
        $this->assertEquals($usuario->getPassword(), "123456");
        $this->assertEquals($usuario->getTel1(), "111");
        $this->assertEquals($usuario->getTel2(), "222");
    }
    
	function testLogin() {
    	$usuario = new Usuario();
    	$srvUsuario = new ServiceUsuario();
    	
    	$this->assertTrue($srvUsuario->login("test", "123456"));
    	$this->assertFalse($srvUsuario->login("test", "00000"));
    	$this->assertFalse($srvUsuario->login("usuarionoexiste", "123456"));
    }
    
	/*function testEliminar() {
        $usuario = new Usuario();
    	$srvUsuario = new ServiceUsuario();
    	
    	$usuario = $srvUsuario->obtenerUsuario("test");
    	$this->assertEquals($usuario->getNombre(), "test");
        $this->assertEquals($usuario->getEmail(), "test@test.com");
        $this->assertEquals($usuario->getPassword(), "123456");
        $this->assertEquals($usuario->getTel1(), "111");
        $this->assertEquals($usuario->getTel2(), "222");
        
        $this->assertTrue($srvUsuario->eliminarUsuario($usuario));
        
        $usuario = $srvUsuario->obtenerUsuario("test");
        var_dump($usuario);
    }*/

}
