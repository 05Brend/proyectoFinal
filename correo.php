<?php
	$nombre = $_POST["nombre"];
	$correo = $_POST["correo"];
	$telefono = $_POST["telefono"];
	$mensaje = $_POST["mensaje"];

	if (empty($telefono)) {
		$telefono = "S/N";
	}

	include 'componentes/phpmailer/PHPMailerAutoload.php';
	include 'conexion.php';

	$sql = "INSERT INTO Contacto VALUES (0, '$nombre', '$correo', '$telefono', '$mensaje')";

	$row = $mysqli->query($sql);

	if ($row)
		$huboExito = true;
	else
		$huboError = true;

	if ($huboExito) {
		$mail = new PHPMailer();
	    $mail->SMTPSecure = 'tls';
	    $mail->Username = "bren_dav_05@hotmail.com";
	    $mail->Password = "Brendadavalos";
	    $mail->AddAddress("aqui va el correo destino, aquien se lo vas a mandar?");
	    $mail->FromName = "Contacto LiQBeER";
	    $mail->Subject = "Contacto";
	    $mail->Body = "El usuario $nombre te ha contactado con correo '$correo' y número '$telefono' dejando el siguiente mensaje: $mensaje";
	    $mail->Host = "smtp.live.com";
	    $mail->Port = 587;
	    $mail->IsSMTP();
	    $mail->SMTPAuth = true;
	    $mail->From = $mail->Username;
	    $mail->Send();
	}

	include 'contacto.php';
?>
