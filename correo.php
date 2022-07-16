<?php
	$destino="davidcamposq02@gmail.com";
	$nombre = $_POST["nombre"];
	$correo = $_POST["correo"];
	$contenido = "Nombre: ". $nombre."\nCorreo: " .$correo;
	mail($destino,"Cliente",$contenido);
	header("Location:index.html");
?>