<?php
	include_once 'autoloader.php';
	$data = null;
	if (!array_key_exists("urladd", $_GET)) { return; }
	if (isset($_COOKIE["user_ttcm_"])) {
		if ($_COOKIE["user_ttcm_"]!=""){
			$data = explode("_", $_COOKIE["user_ttcm_"]); // $data[0] - user_id
			$enlace_externo = new Enlace_Externo();
			$enlace_externo->setId_Proyecto(1);
			$enlace_externo->setDescripcion("Una URL del Proyecto X");
			$enlace_externo->setURL($_GET["urladd"]);
			$enlace_externo->save();
			header("Location: proyectos.php");
		}
	}
?>

<html>
	<head></head>
	<body>
	</body>
</html>