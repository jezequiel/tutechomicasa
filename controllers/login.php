<?php
require_once('../header.inc.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$serviceUsuario = new ServiceUsuario();
	if ($serviceUsuario->login($_POST['Email'], $_POST['Pass'])) {
		echo "login!";
	} else {
		echo "no hay login :(";
	}
/*
	require_once __DIR__.'/../business/Usuario.php';
	$usuario = new Usuario();
	if ($usuario->login($_POST['Email'], $_POST['Pass'])) {
		echo $usuario->array["Nombre"];
		echo $usuario->array["Email"];
		// Iniciar session y guardar el usuario
		if (array_key_exists('Recordar', $_POST)) {
			setcookie ("user_ttcm_", $usuario->array["Id"]."_".$usuario->array["Email"]."_".$usuario->array["Pass"], time()+(60*60*24*365));
		}
		// header ("location: paneldecontrol.php");
		echo "Login!!";
	}else {
		echo "No coinciden los datos";
	}
	*/
}

require_once __DIR__."/../controllers/main.php";