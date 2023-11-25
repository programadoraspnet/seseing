<?php
require_once("../modelos/Inicio.php");
//implementacion esta funcion para utilizar las sessiones
session_start();
$inicio = new Inicio();
$id = isset($_POST["id"]) ? limpiarCadena($_POST["id"]) : "";
$vc_texto = isset($_POST["txt_texto"]) ? limpiarCadena($_POST["txt_texto"]) : "";
$vc_usuario = isset($_POST["txtusuario"]) ? limpiarCadena($_POST["txtusuario"]) : "";
$vc_clave = isset($_POST["txtclave"]) ? limpiarCadena($_POST["txtclave"]) : "";

$titulo1 = isset($_POST["txttitulo1"]) ? limpiarCadena($_POST["txttitulo1"]) : "";
$titulo2 = isset($_POST["txttitulo2"]) ? limpiarCadena($_POST["txttitulo2"]) : "";
$titulo3 = isset($_POST["txttitulo3"]) ? limpiarCadena($_POST["txttitulo3"]) : "";

$url = isset($_POST["url"]) ? limpiarCadena($_POST["url"]) : "";
switch ($_GET["op"]) {
	case 'guardaryeditar':
		$rspta = $inicio->mostrar();
		if (is_null($rspta["texto"])) {
			$rspta = $inicio->insertar($vc_texto);
			echo $rspta ? "registrado con exito" : "no se pudo registrar";
		} else {
			$rspta = $inicio->editar($vc_texto);
			echo $rspta ? "actualizado con exito" : "no se pudo actualizar";
		}
		break;
	case 'login':
		$rspta = $inicio->accederSistema($vc_usuario, $vc_clave);
		$fetch = $rspta->fetch_object();
		if (isset($fetch)) {
			$_SESSION['idusuario'] = $fetch->idusuario;
		}
		//Codificar el resultado utilizando json
		echo json_encode($fetch);
		break;
	case 'obtener':
		$rspta = $inicio->obtener_inicio_servicio($id);
		echo json_encode($rspta);
		break;
	case 'salir':
		//Limpiamos las variables de sesión   
		session_unset();
		//Destruìmos la sesión
		session_destroy();
		//Redireccionamos al login
		header("Location: ../vistas/login.html");
		break;
	case 'mostrar':
		$rspta = $inicio->mostrar();
		//Codificar el resultado utilizando json
		echo json_encode($rspta);
		break;
	case 'background':
		$rspta = $inicio->listar_fondo_inicio();
		//Codificar el resultado utilizando json
		echo json_encode($rspta);
		break;
	case 'borrarCliente':
		$rspta = $inicio->buscarImagenCliente($id);
		if (!is_null($rspta["idiniciocliente"])) {
			if (file_exists($rspta["url"])) {
				unlink($rspta["url"]);
			}
		}
		$rspta = $inicio->borrarimagenesCliente($id);
		echo $rspta ? "borrado con exito" : "no se pudo borrar";
		break;
	case 'borrarServicio':
		$rspta = $inicio->borrarInicioServicio($id);
		echo $rspta ? "borrado con exito" : "no se pudo borrar";
		break;
	case 'borrar':
		$rspta = $inicio->buscarImagen($id);
		if (!is_null($rspta["idinicioimagen"])) {
			if (file_exists($rspta["url"])) {
				unlink($rspta["url"]);
			}
		}
		$rspta = $inicio->borrarimagenes($id);
		echo $rspta ? "borrado con exito" : "no se pudo borrar";
		break;
	case 'subirFondoPrincipal':
		//Archivo temporal
		$fileTmpPath = $_FILES['fupPrincipal']['tmp_name'];
		//Nombre del archivo
		$fullName = $_FILES['fupPrincipal']['name'];
		//Tamaño del archivo
		$fileSize = $_FILES['fupPrincipal']['size'];
		$fileNameCmps = explode(".", $fullName);
		//Extension del archivo
		$fileExtension = strtolower(end($fileNameCmps));
		// Arreglo de extension permitidas para procesar
		$extensionespermitidas = array('jpg', 'png', 'jpeg', 'JPEG', 'JPG', 'PNG');
		//Validamos que la extension del archivo subido este dentro de los permitidos
		if (in_array($fileExtension, $extensionespermitidas)) {
			$paso = true;
			$file = $fileNameCmps[0];
			//Validamos archivos duplicados en la carpeta
			while ($paso) {
				if (file_exists("../public/fotos/" . $file . "." . $fileExtension)) {
					$file = $file . "_";
				} else {
					$paso = false;
				}
			}
			//Si el archivo esta correcto
			if (!$paso) {
				//Movemos el archivo a una carpeta fisica
				move_uploaded_file($fileTmpPath, "../public/fotos/" . $file . "." . $fileExtension);
				$inicio->eliminarFondoPrincipal();
				$rspta = $inicio->insertarFondoPrincipal("../public/fotos/" . $file . "." . $fileExtension, $file . "." . $fileExtension, $fileExtension);
			}
			echo "registrado con exito";
		} else {
			echo "no se pudo registrar";
		}
		break;

	case 'subirImagenCliente':
		//Archivo temporal
		$fileTmpPath = $_FILES['fu_cliente']['tmp_name'];
		//Nombre del archivo
		$fullName = $_FILES['fu_cliente']['name'];
		//Tamaño del archivo
		$fileSize = $_FILES['fu_cliente']['size'];
		$fileNameCmps = explode(".", $fullName);
		//Extension del archivo
		$fileExtension = strtolower(end($fileNameCmps));
		// Arreglo de extension permitidas para procesar
		$extensionespermitidas = array('jpg', 'png', 'jpeg', 'JPEG', 'JPG', 'PNG');
		//Validamos que la extension del archivo subido este dentro de los permitidos
		if (in_array($fileExtension, $extensionespermitidas)) {
			$paso = true;
			$file = $fileNameCmps[0];
			//Validamos archivos duplicados en la carpeta
			while ($paso) {
				if (file_exists("../public/fotos/" . $file . "." . $fileExtension)) {
					$file = $file . "_";
				} else {
					$paso = false;
				}
			}
			//Si el archivo esta correcto
			if (!$paso) {
				//Movemos el archivo a una carpeta fisica
				move_uploaded_file($fileTmpPath, "../public/fotos/" . $file . "." . $fileExtension);
				$rspta = $inicio->insertarImagenCliente("../public/fotos/" . $file . "." . $fileExtension, $file . "." . $fileExtension, $fileExtension);
			}
			echo "registrado con exito";
		} else {
			echo "no se pudo registrar";
		}
		break;
	case 'subirImagen':
		//Archivo temporal
		$fileTmpPath = $_FILES['fupImagen']['tmp_name'];
		//Nombre del archivo
		$fullName = $_FILES['fupImagen']['name'];
		//Tamaño del archivo
		$fileSize = $_FILES['fupImagen']['size'];
		$fileNameCmps = explode(".", $fullName);
		//Extension del archivo
		$fileExtension = strtolower(end($fileNameCmps));
		// Arreglo de extension permitidas para procesar
		$extensionespermitidas = array('jpg', 'png', 'jpeg', 'JPEG', 'JPG', 'PNG');
		//Validamos que la extension del archivo subido este dentro de los permitidos
		if (in_array($fileExtension, $extensionespermitidas)) {
			$paso = true;
			$file = $fileNameCmps[0];
			//Validamos archivos duplicados en la carpeta
			while ($paso) {
				if (file_exists("../public/fotos/" . $file . "." . $fileExtension)) {
					$file = $file . "_";
				} else {
					$paso = false;
				}
			}
			//Si el archivo esta correcto
			if (!$paso) {
				//Movemos el archivo a una carpeta fisica
				move_uploaded_file($fileTmpPath, "../public/fotos/" . $file . "." . $fileExtension);
				$rspta = $inicio->insertarImagen("../public/fotos/" . $file . "." . $fileExtension, $file . "." . $fileExtension, $fileExtension);
			}
			echo "registrado con exito";
		} else {
			echo "no se pudo registrar";
		}
		break;
	case 'eliminarServicio':
		$rspta = $inicio->borrar_imagen_servicio($id);
		unlink($url);
		echo "Borrado Imagen";
		break;
	case 'subirInicioSubServicio':
		$idServicio = empty($_POST["idservicioSub"]) ? "0" : $_POST["idservicioSub"];
		//Archivo temporal
		$fileTmpPath = $_FILES['fupSegundaria']['tmp_name'];
		//Nombre del archivo
		$fullName = $_FILES['fupSegundaria']['name'];
		//Tamaño del archivo
		$fileSize = $_FILES['fupSegundaria']['size'];
		$fileNameCmps = explode(".", $fullName);
		//Extension del archivo
		$fileExtension = strtolower(end($fileNameCmps));
		// Arreglo de extension permitidas para procesar
		$extensionespermitidas = array('jpg', 'png', 'jpeg', 'JPEG', 'JPG', 'PNG');
		//Validamos que la extension del archivo subido este dentro de los permitidos
		if (in_array($fileExtension, $extensionespermitidas)) {
			$paso = true;
			$file = $fileNameCmps[0];
			//Validamos archivos duplicados en la carpeta
			while ($paso) {
				if (file_exists("../public/fotos/" . $file . "." . $fileExtension)) {
					$file = $file . "_";
				} else {
					$paso = false;
				}
			}
			//Si el archivo esta correcto
			if (!$paso) {
				//Movemos el archivo a una carpeta fisica
				move_uploaded_file($fileTmpPath, "../public/fotos/" . $file . "." . $fileExtension);
				if (empty($id)) {
					$rspta = $inicio->insertar_sub_inicio_servicio($idServicio, "../public/fotos/" . $file . "." . $fileExtension, $file, $fileExtension);
				}
			}
			echo "registrado con exito";
		} else {
			if (empty($id)) {
				$rspta = $inicio->insertar_sub_inicio_servicio($idServicio, "../public/fotos/" . $file . "." . $fileExtension, $file, $fileExtension);
			}
			echo "no se pudo registrar";
		}
		break;
	case 'subirInicioServicio':
		$vc_titulo = empty($_POST["txt_inicio_titulo"]) ? "" : $_POST["txt_inicio_titulo"];
		$vc_mensaje = empty($_POST["txt_inicio_mensaje"]) ? "" : $_POST["txt_inicio_mensaje"];
		//Archivo temporal
		$fileTmpPath = $_FILES['fuImgServicio']['tmp_name'];
		//Nombre del archivo
		$fullName = $_FILES['fuImgServicio']['name'];
		//Tamaño del archivo
		$fileSize = $_FILES['fuImgServicio']['size'];
		$fileNameCmps = explode(".", $fullName);
		//Extension del archivo
		$fileExtension = strtolower(end($fileNameCmps));
		// Arreglo de extension permitidas para procesar
		$extensionespermitidas = array('jpg', 'png', 'jpeg', 'JPEG', 'JPG', 'PNG');
		//Validamos que la extension del archivo subido este dentro de los permitidos
		if (in_array($fileExtension, $extensionespermitidas)) {
			$paso = true;
			$file = $fileNameCmps[0];
			//Validamos archivos duplicados en la carpeta
			while ($paso) {
				if (file_exists("../public/fotos/" . $file . "." . $fileExtension)) {
					$file = $file . "_";
				} else {
					$paso = false;
				}
			}
			//Si el archivo esta correcto
			if (!$paso) {
				//Movemos el archivo a una carpeta fisica
				move_uploaded_file($fileTmpPath, "../public/fotos/" . $file . "." . $fileExtension);
				if (empty($id)) {
					$rspta = $inicio->insertar_inicio_servicio("../public/fotos/" . $file . "." . $fileExtension, $file, $fileExtension, $vc_titulo, $vc_mensaje, 1);
				} else {
					$rspta = $inicio->actualizar_servicio($id, "../public/fotos/" . $file . "." . $fileExtension, $file, $fileExtension, $vc_titulo, $vc_mensaje, 1);
				}
			}
			echo "registrado con exito";
		} else {
			if (empty($id)) {
				$rspta = $inicio->insertar_inicio_servicio("", "", "", $vc_titulo, $vc_mensaje, 1);
			} else {
				$rspta = $inicio->actualizar_servicio2($id, $vc_titulo, $vc_mensaje, 1);
			}
			echo "no se pudo registrar";
		}
		break;
	case 'addTitulos':
		$inicio->eliminarTitulos();
		$rspta = $inicio->insertarTitulos($titulo1, $titulo2, $titulo3);
		echo "registrado con exito";
		break;

	case 'listatitulo':
		$rspta = $inicio->listarTitulosInicio();
		//Codificar el resultado utilizando json
		echo json_encode($rspta);
		break;
	case 'listarserviciosInicio':

		$rspta = $inicio->listar_inicio_servicio();
		//Vamos a declarar un array
		$data = array();
		$contador = 0;
		while ($reg = $rspta->fetch_object()) {
			$data[] = array(
				"0" =>  $reg->url,
				"1" =>  $reg->titulo,
				"2" =>  $reg->mensaje,
				"3" =>  $reg->idinicioservicio,
			);
		}
		//Codificar el resultado utilizando json
		echo json_encode($data);
	break;
	case 'listarserviciosSubInicio':
		$idServicio = empty($_POST["idservicioSub"]) ? "0" : $_POST["idservicioSub"];
		$rspta = $inicio->listar_sub_servicio($idServicio);
		//Vamos a declarar un array
		$data = array();
		$contador = 0;
		while ($reg = $rspta->fetch_object()) {
			$data[] = array(
				"0" =>  $reg->iddetinicioservicio,
				"1" =>  $reg->url,
				"2" =>  $reg->name,
				"3" =>  $reg->extension,
			);
		}
		//Codificar el resultado utilizando json
		echo json_encode($data);
	break;

	case 'eliminarImagenSubServicio':
		$rspta = $inicio->borrar_imagen_Subservicio($id);
		echo "Borrado Imagen";
		break;
}