<?php
require_once "../modelos/Nosotros.php";
$nosotro = new Nosotros();
$vc_nosotro = isset($_POST["txtnosotro"]) ? limpiarCadena($_POST["txtnosotro"]) : "";
$vc_vision = isset($_POST["txtVision"]) ? limpiarCadena($_POST["txtVision"]) : "";
$vc_mision = isset($_POST["txtMision"]) ? limpiarCadena($_POST["txtMision"]) : "";

switch ($_GET["op"]) {
    case 'guardaryeditarNosotros':
  //Archivo temporal
  $fileTmpPath = $_FILES['fuVisionMision']['tmp_name'];
  //Nombre del archivo
  $fullName = $_FILES['fuVisionMision']['name'];
  //Tamaño del archivo
  $fileSize = $_FILES['fuVisionMision']['size'];
  $fileNameCmps = explode(".", $fullName);
  //Extension del archivo
  $fileExtension = strtolower(end($fileNameCmps));
  // Arreglo de extension permitidas para procesar
  $extensionespermitidas = array('jpg', 'png', 'jpeg', 'JPEG', 'JPG', 'PNG');
  if (empty($fileTmpPath)) {
      $rspta = $nosotro->mostrarMisionVision();
      if (!is_null($rspta["mision"])) {
          $rspta = $nosotro->editarMisionVision("","","",$vc_mision,$vc_vision);
      }else{
          $rspta = $nosotro->insertarMisionVision("","","",$vc_mision,$vc_vision);
      }
      echo $rspta ? "registrado con exito" : "no se pudo registrar";
  } else {
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
              $rspta = $nosotro->mostrarMisionVision();
              if (!is_null($rspta["mision"])) {
                  $rspta = $nosotro->editarMisionVision("../public/fotos/" . $file . "." . $fileExtension, $file . "." . $fileExtension, $fileExtension,$vc_mision,$vc_vision);
              }else{
                  $rspta = $nosotro->insertarMisionVision("../public/fotos/" . $file . "." . $fileExtension, $file . "." . $fileExtension, $fileExtension,$vc_mision,$vc_vision);
              }
          }
          echo "registrado con exito";
      } else {
          echo "no se pudo registrar";
      }
  }
        break;
    case 'guardaryeditar':
        //Archivo temporal
        $fileTmpPath = $_FILES['fp_nosotros']['tmp_name'];
        //Nombre del archivo
        $fullName = $_FILES['fp_nosotros']['name'];
        //Tamaño del archivo
        $fileSize = $_FILES['fp_nosotros']['size'];
        $fileNameCmps = explode(".", $fullName);
        //Extension del archivo
        $fileExtension = strtolower(end($fileNameCmps));
        // Arreglo de extension permitidas para procesar
        $extensionespermitidas = array('jpg', 'png', 'jpeg', 'JPEG', 'JPG', 'PNG');
        if (empty($fileTmpPath)) {
            $rspta = $nosotro->mostrar();
            if (!is_null($rspta["texto"])) {
                $rspta = $nosotro->editar("","","",$vc_nosotro);
            }else{
                $rspta = $nosotro->insertar("","","",$vc_nosotro);
            }
            echo $rspta ? "registrado con exito" : "no se pudo registrar";
        } else {
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
                    $rspta = $nosotro->mostrar();
                    if (!is_null($rspta["texto"])) {
                        $rspta = $nosotro->editar("../public/fotos/" . $file . "." . $fileExtension, $file . "." . $fileExtension, $fileExtension,$vc_nosotro);
                    }else{
                        $rspta = $nosotro->insertar("../public/fotos/" . $file . "." . $fileExtension, $file . "." . $fileExtension, $fileExtension,$vc_nosotro);
                    }
                }
                echo "registrado con exito";
            } else {
                echo "no se pudo registrar";
            }
        }
        break;
}
