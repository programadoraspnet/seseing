<?php
require_once "../modelos/Producto.php";

$producto = new Producto();
$id = isset($_POST["id"]) ? limpiarCadena($_POST["id"]) : "";
$idcilindro = isset($_POST["idcilindro"]) ? limpiarCadena($_POST["idcilindro"]) : "";
$idimagencilindro = isset($_POST["idimagencilindro"]) ? limpiarCadena($_POST["idimagencilindro"]) : "";
$idcilindroCaracteristica = isset($_POST["idcilindroCaracteristica"]) ? limpiarCadena($_POST["idcilindroCaracteristica"]) : "";
$vc_texto = isset($_POST["txtDescripcion"]) ? limpiarCadena($_POST["txtDescripcion"]) : "";
$vc_caracteristica= isset($_POST["txtCaracteristica"]) ? limpiarCadena($_POST["txtCaracteristica"]) : "";
switch ($_GET["op"]) {
    case 'guardarCaracteristica':
        $rspta = $producto->insertar_caracteristicas_producto($vc_caracteristica,$idcilindroCaracteristica);
        echo $rspta ? "registrado con exito" : "no se pudo registrar";
     break;
    case 'guardaryeditar':
        if (empty($id)) {
            $rspta = $producto->insertar_producto_cabecera($vc_texto);
            echo $rspta ? "registrado con exito" : "no se pudo registrar";
        } else {
            $rspta = $producto->editar_producto_cabecera($id, $vc_texto);
            echo $rspta ? "actualizado con exito" : "no se pudo actualizar";
        }
        break;
    case 'mostrar':
        $rspta = $producto->mostrar_producto_cabecera($id);
        //Codificar el resultado utilizando json
        echo json_encode($rspta);
        break;

    case 'listar':
        $rspta = $producto->listar_producto_cabecera();
        $contador = 0;
        while ($reg = $rspta->fetch_object()) {
            echo "<tr>";
            echo "<td>" . ($contador = $contador + 1) . "</td>";
            echo "<td>" . ($reg->vc_descripcion) . "</td>";
            echo "<td><button class='btn btn-primary' onclick='accion_producto.mostrar(" . $reg->idcilindro . ")'>Editar</button></td>";
            echo "<td><button class='btn btn-danger' onclick='accion_producto.eliminar(" . $reg->idcilindro . ")'>Eliminar</button></td>";
            echo "<td><button class='btn btn-primary' onclick='accion_producto.listaImagenes(" . $reg->idcilindro . ")'>Imagenes</button></td>";
            echo "<td><button class='btn btn-primary' onclick='accion_producto.listaCaracteristicas(" . $reg->idcilindro . ")'>Caracteristicas</button></td>";
            echo "</tr>";
        }

        if ($contador == 0) {
            echo "<tr>";
            echo "<td colspan='6' class='text-center'>No se encontraron datos</td>";
            echo "</tr>";
        }
        break;
    case 'guardarImagen':
        //Archivo temporal
        $fileTmpPath = $_FILES['fupI']['tmp_name'];
        //Nombre del archivo
        $fullName = $_FILES['fupI']['name'];
        //Tamaño del archivo
        $fileSize = $_FILES['fupI']['size'];
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
                $rspta = $producto->insertar_imagen_producto("../public/fotos/" . $file . "." . $fileExtension, $file . "." . $fileExtension, $fileExtension, $idcilindro);
            }
            echo "registrado con exito";
        } else {
            echo "no se pudo registrar";
        }
        break;
    case 'listarImagen':
        $rspta = $producto->listar_imagen_producto($idcilindro);
        $contador = 0;
        while ($reg = $rspta->fetch_object()) {
            echo "<tr>";
            echo "<td>" . ($contador = $contador + 1) . "</td>";
            echo "<td style='text-align: left;'><img src='" . ($reg->url) . "' style='height: 15%;width: 15%;text-align: left;'/></td>";
            echo "<td><button class='btn btn-danger' onclick='accion_producto.eliminarImagen(" . $reg->idimagencilindro . ")'>Eliminar</button></td>";
            echo "</tr>";
        }
        if ($contador == 0) {
            echo "<tr>";
            echo "<td colspan='3' class='text-center'>No se encontraron datos</td>";
            echo "</tr>";
        }
        break;
    case 'listarCaracteristica':
        $rspta = $producto->listar_caracteristica_producto($idcilindro);
        $contador = 0;
        while ($reg = $rspta->fetch_object()) {
            echo "<tr>";
            echo "<td>" . ($contador = $contador + 1) . "</td>";
            echo "<td style='text-align: left;'>".($reg->vc_descripcion)."</td>";
            echo "<td><button class='btn btn-danger' onclick='accion_producto.eliminarCaracteristica(" . $reg->idcaracteristicacilindro . ")'>Eliminar</button></td>";
            echo "</tr>";
        }
        if ($contador == 0) {
            echo "<tr>";
            echo "<td colspan='3' class='text-center'>No se encontraron datos</td>";
            echo "</tr>";
        }
        break;
    case 'eliminar':
        $rspta = $producto->eliminar_producto_cabecera($id);
        echo $rspta ? "eliminado con exito" : "no se pudo eliminado";
        break;
    case 'eliminarImagenCilindro':
        $rspta = $producto->eliminar_imagen_producto($idimagencilindro);
        echo $rspta ? "eliminado con exito" : "no se pudo eliminado";
        break;
        case 'eliminarCaracteristicaCilindro':
            $rspta = $producto->eliminar_caracteristicas_producto($idcilindroCaracteristica);
            echo $rspta ? "eliminado con exito" : "no se pudo eliminado";
            break;
}
