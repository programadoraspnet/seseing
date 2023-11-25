<?php
//Incluímos inicialmente la conexión a la base de datos
require "../config/Conexion.php";

class Producto
{
	//Implementamos nuestro constructor
	public function __construct()
	{
	}
	public function mostrar_producto_cabecera($id){
		$sql="select * from tb_cilindro where idcilindro='$id'";
        return ejecutarConsultaSimpleFila($sql);
	}
    public function listar_producto_cabecera(){
        $sql="select * from tb_cilindro where in_estado=1";
        return ejecutarConsulta($sql);
    }

	public function listar_imagen_producto($idcilindro){
		$sql="select * from tb_cilindro_imagen WHERE idcilindro='$idcilindro'";
		return ejecutarConsulta($sql);
	}

	public function listar_caracteristica_producto($idcilindro){
		$sql="select * from tb_caracteristicas_cilindro WHERE idcilindro='$idcilindro'";
		return ejecutarConsulta($sql);
	}

	public function eliminar_producto_cabecera($id){
        $sql="delete from tb_cilindro WHERE idcilindro='$id'";
        return ejecutarConsulta($sql);
    }
	//Implementamos un método para insertar registros
	public function insertar_producto_cabecera($vc_descripcion)
	{
		$sql = "INSERT INTO tb_cilindro(vc_descripcion,in_estado)
		VALUES('$vc_descripcion','1')";
		return ejecutarConsulta($sql);
	}

	//Implementamos un método para insertar registros
	public function editar_producto_cabecera($id,$vc_descripcion)
	{
		$sql = "UPDATE tb_cilindro set vc_descripcion='$vc_descripcion'
		WHERE idcilindro='$id'";
		return ejecutarConsulta($sql);
	}


	public function insertar_imagen_producto($url,$name,$extension,$idcilindro){
		$sql="insert into tb_cilindro_imagen(url,name,extension,idcilindro)values('$url','$name','$extension','$idcilindro')";
		return ejecutarConsulta($sql);
	}

	public function eliminar_imagen_producto($idimagencilindro){
		$sql="delete from tb_cilindro_imagen where idimagencilindro='$idimagencilindro'";
		return ejecutarConsulta($sql);
	}

	public function insertar_caracteristicas_producto($vc_descripcion,$idcilindro){
		$sql="insert into tb_caracteristicas_cilindro(vc_descripcion,idcilindro)values('$vc_descripcion','$idcilindro')";
		return ejecutarConsulta($sql);
	}


	public function eliminar_caracteristicas_producto($idcaracteristicacilindro){
		$sql="delete from tb_caracteristicas_cilindro WHERE idcaracteristicacilindro='$idcaracteristicacilindro'";
		return ejecutarConsulta($sql);
	}
}