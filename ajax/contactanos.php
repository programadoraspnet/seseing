<?php
require_once "../modelos/Configuracion.php";

$config = new Configuracion();
$vc_nombre = isset($_POST["txtnombre"]) ? limpiarCadena($_POST["txtnombre"]) : "";
$vc_email = isset($_POST["txtemail"]) ? limpiarCadena($_POST["txtemail"]) : "";
$vc_telefono = isset($_POST["telefono"]) ? limpiarCadena($_POST["telefono"]) : "";
$vc_mensaje = isset($_POST["txtmensaje"]) ? limpiarCadena($_POST["txtmensaje"]) : "";
switch ($_GET["op"]) {
       case 'enviarCorreo':
              $config->notificar($vc_nombre, $vc_email, $vc_telefono, $vc_mensaje);
              echo $config;
       break;
}
