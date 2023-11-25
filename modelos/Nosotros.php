<?php
//Incluímos inicialmente la conexión a la base de datos
require "../config/Conexion.php";

class Nosotros
{
	//Implementamos nuestro constructor
	public function __construct()
	{
	}
	//Implementamos un método para insertar registros
	public function insertar($url, $name, $extension, $texto)
	{
		$sql = "INSERT INTO tb_nosotros(url,name,extension,texto)
		VALUES('$url','$name','$extension','$texto')";
		return ejecutarConsulta($sql);
	}

	public function insertarMisionVision($url, $name, $extension, $mision,$vision)
	{
		$sql = "INSERT INTO tb_nosotros2(url,name,extension,mision,vision)
		VALUES('$url','$name','$extension','$mision','$vision')";
		return ejecutarConsulta($sql);
	}

	//Implementamos un método para editar registros
	public function editar($url, $name, $extension, $texto)
	{
		$sql = "UPDATE tb_nosotros SET texto='$texto',url='',name='',extension=''";
		if ($url != "") {
			$sql = "UPDATE tb_nosotros SET texto='$texto',url='$url',name='$name',extension='$extension'";
		}
		return ejecutarConsulta($sql);
	}

	public function editarMisionVision($url, $name, $extension, $mision,$vision)
	{
		$sql = "UPDATE tb_nosotros2 SET mision='$mision',vision='$vision'";
		if ($url != "") {
			$sql = "UPDATE tb_nosotros2 SET mision='$mision',vision='$vision',url='$url',name='$name',extension='$extension'";
		}
		return ejecutarConsulta($sql);
	}

	//Implementar un método para mostrar los datos de un registro a modificar
	public function mostrar()
	{
		$sql = "SELECT * FROM tb_nosotros LIMIT 1;";
		return ejecutarConsultaSimpleFila($sql);
	}

	public function mostrarMisionVision()
	{
		$sql = "SELECT * FROM tb_nosotros2 LIMIT 1;";
		return ejecutarConsultaSimpleFila($sql);
	}
}
