<?php
	$host = "127.0.0.1";
	$usuario = "root";
	$contrasenia = "";
	$baseDatos = "test";

	$mysqli = new mysqli($host, $usuario, $contrasenia, $baseDatos);

	if ($mysqli->connect_errno) {
		echo "<h1>NO SE PUDO CONECTAR A LA BASE DE DATOS";
		echo "<h3>Error No.: ".$mysqli->connect_errno."</h3>";
		echo "<h3>Error: ".$mysqli->connect_error."</h3>";
		exit;
	}
?>