<?php
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept');
header('Content-Type: aplication/json; charset=utf-8');

$postdata = file_get_contents("php://input");
$request = json_encode($postdata);

$respuesta = Array();

$nombre = $request->nombre;
$email = $request->email;
$mensaje = $request->mensaje;

if($request != null){

	$to = "eles.landero@gmail.com";

	$subject = "Contacto Womoz México";

	$message = "<html><head>
				<meta charset='utf-8'/>
				<title>Contacto Womoz México</title></head>
				<body><p>Se ha recibido un mensaje de: <strong>".$nombre."</strong></p>
				<p>".$mensaje."</p></body></html>";

	$headers  = 'MIME-Version: 1.0' . "\r\n";
	$headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
	$headers .= 'From: '. $nombre. '<'.$email.'>' . "\r\n";

	if(mail($to, $subject, $message, $headers)){
		$respuesta['success'] = true;
		$respuesta['mensaje'] = "¡Gracias por contactarnos!";
		print_r(json_encode($respuesta));
	}else{
		$respuesta['success'] = false;
		$respuesta['mensaje'] = "Ocurrió un error al enviar tu mensaje.";
		print_r(json_encode($respuesta));
	}
				
}else{
	$respuesta['success'] = false;
	$respuesta['mensaje'] = "Ocurrió un error.";
	print_r(json_encode($respuesta));
}