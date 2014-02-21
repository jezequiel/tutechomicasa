<?php

// URL actual
$url = 'http';
if (isset($_SERVER["HTTPS"]) && $_SERVER["HTTPS"] == "on") {
    $url .= "s";
}
$url .= "://";
if ($_SERVER["SERVER_PORT"] != "80") {
    $url .= $_SERVER["SERVER_NAME"] . ":" . $_SERVER["SERVER_PORT"];
} else {
    $url .= $_SERVER["SERVER_NAME"];
}

// Root path
if (!defined('ROOT_PATH')) {
    define('ROOT_PATH', $_SERVER['DOCUMENT_ROOT'] . '/tutechomicasaSVN/');
}

// Vista
define('VISTA', basename($_SERVER['PHP_SELF'], '.php'));

// Load Excepciones
include_once ROOT_PATH."backend/exceptions/ClassNotFoundException.php";
include_once ROOT_PATH."backend/exceptions/DAOException.php";
include_once ROOT_PATH."backend/exceptions/ServiceException.php";

// Load BusinessEntities
include_once ROOT_PATH."backend/businessEntities/Multimedia.php"; 
include_once ROOT_PATH."backend/businessEntities/Usuario.php"; 
include_once ROOT_PATH."backend/businessEntities/Imagen.php";
include_once ROOT_PATH."backend/businessEntities/Ocupacion.php"; 
include_once ROOT_PATH."backend/businessEntities/Precio.php"; 
include_once ROOT_PATH."backend/businessEntities/Propiedad.php"; 
include_once ROOT_PATH."backend/businessEntities/TipoArchivo.php"; 
include_once ROOT_PATH."backend/businessEntities/TipoComodidad.php";
include_once ROOT_PATH."backend/businessEntities/TipoPropiedad.php";
include_once ROOT_PATH."backend/businessEntities/Usuario.php";
include_once ROOT_PATH."backend/businessEntities/Video.php";
include_once ROOT_PATH."backend/businessEntities/Zona.php";  

// Autoload Service + DAO
function __autoload($nombre_clase) {
	if (file_exists(ROOT_PATH."/backend/dao/".$nombre_clase.'.php')) { 
		include ROOT_PATH."/backend/dao/".$nombre_clase.'.php';
	} elseif (file_exists(ROOT_PATH."backend/service/".$nombre_clase.'.php')) { 
		include ROOT_PATH."backend/service/".$nombre_clase.'.php';
	} else {
		// throw new ClassNotFoundException($nombre_clase);
	}    
}