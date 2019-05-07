<?php

	$remitente = $_POST['email'];
	$destinatario = 'valeriasolem26@hotmail.com'; 
	$asunto = 'Consulta - '; // acá se puede modificar el asunto del mail
	if ($_POST){
		$asunto .= $_POST["asunto"];
		$cuerpo = "Nombre y apellido: " . $_POST["nombre"] . "\r\n"; 
		$cuerpo .= "Email: " . $_POST["email"] . "\r\n";
		$cuerpo .= "Telefono: " . $_POST["telefono"] . "\r\n";
		$cuerpo .= "Mensaje: " . $_POST["mensaje"] . "\r\n";
		
		$headers  = "MIME-Version: 1.0\n";
		$headers .= "Content-type: text/plain; charset=utf-8\n";
		$headers .= "X-Priority: 3\n";
		$headers .= "X-MSMail-Priority: Normal\n";
		$headers .= "X-Mailer: php\n";
		$headers .= "From: \"".$_POST['nombre']."\" <".$remitente.">\n";

		if(mail($destinatario, $asunto, $cuerpo, $headers)){
			header("location: mensajeEnviado.html");
		}else{
			header("location: errorContacto.html");		
		}   
	}

	
?>