<?php
//Incluímos inicialmente la conexión a la base de datos
require "../config/Conexion.php";

//Incluímos inicialmente la configuracion para el envio de correos
require '../PHPMailer/src/Exception.php';
require '../PHPMailer/src/PHPMailer.php';
require '../PHPMailer/src/SMTP.php';

# use "use" after include or require
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

class Configuracion
{
	//Implementamos nuestro constructor
	public function __construct()
	{
	}

	public function notificar($nombre, $correo, $telefono, $mensaje)
	{
		$mail = new PHPMailer;
		$mail->isSMTP();
		// $mail->SMTPDebug = 0;
		$mail->Host = 'mail.seseing.com';
		$mail->Port = 25;
		$mail->CharSet = "utf-8";
		$mail->SMTPAuth = True;
		// $mail->SMTPSecure = 'tls';
		$mail->Username = 'soporte@seseing.com';
		$mail->Password = 'gml2022@';

		$mail->setFrom('soporte@seseing.com', 'Notificacion Pagina Web');

		$message  = "<html><body>";
		$message .= "<table width='100%' cellpadding='0' cellspacing='0' border='0'>";
		$message .= "<tr><td>";
		$message .= "<table align='left' width='100%' border='0' cellpadding='0' cellspacing='0' style='max-width:650px; background-color:#fff; font-family:Verdana, Geneva, sans-serif;'>";
		$message .= "<tbody>
       <tr>
       <td colspan='4' style='padding:5px;'>
       <p style='font-size:15px;'>Datos del mensaje :</p>
       <p style='font-size:15px;'>Nombre :" . $nombre . "</p>
       <p style='font-size:15px;'>Email :" . $correo . "</p>
       <p style='font-size:15px;'>Movil :" . $telefono . "</p>
       <p style='font-size:15px;'>Mensaje :</p>
       <p style='font-size:15px;'>" . $mensaje . "</p>
       </td>
       </tr>
		</tbody>";
		$message .= "</table>";
		$message .= "</td></tr>";
		$message .= "</table>";
		$message .= "</body></html>";

		$mail->AddAddress("mundonetsise@gmail.com");
		// $mail->addAddress("luis.enciso@seseing.com"); 
		// $mail->AddAddress('ventas@seseing.com');
		$mail->Subject = "Notificacion Pagina Web";
		$mail->IsHTML(true);
		$mail->Body = $message;
		$mail->send();
	}
}
