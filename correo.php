<?php
	$nombre = $_POST["nombre"];
	$correo = $_POST["correo"];
	$telefono = $_POST["telefono"];
	$mensaje = $_POST["mensaje"];

	if (empty($telefono)) {
		$telefono = "S/N";
	}

	include 'conexion.php';

	$sql = "INSERT INTO Contacto VALUES (0, '$nombre', '$correo', '$telefono', '$mensaje')";

	$row = $mysqli->query($sql);

	if ($row)
		$huboExito = true;
	else
		$huboError = true;

	include 'contacto.php';
?>