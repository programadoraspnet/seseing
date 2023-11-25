<?php
//Incluímos inicialmente la conexión a la base de datos
require "../config/Conexion.php";

class Inicio
{
	//Implementamos nuestro constructor
	public function __construct()
	{
	}

		//Implementamos un método para insertar registros
		public function insertar_sub_inicio_servicio($idinicioservicio,$url,$name,$extension)
		{
			$sql = "INSERT INTO tb_detalle_inicio_servicio(idinicioservicio,url,name,extension,in_estado)
			VALUES('$idinicioservicio','$url','$name','$extension','1')";
			return ejecutarConsulta($sql);
		}
	
		//Implementamos un método para insertar registros
		public function eliminar_sub_servicio($id,$idinicioservicio,$url,$name,$extension)
		{
			$sql = "delete from tb_detalle_inicio_servicio
			WHERE iddetinicioservicio='$id'";
			return ejecutarConsulta($sql);
		}

		//Implementamos un método para insertar registros
		public function listar_sub_servicio($id)
		{
			$sql = "select * from tb_detalle_inicio_servicio
			WHERE idinicioservicio='$id'";
			return ejecutarConsulta($sql);
		}

	//Implementamos un método para insertar registros
	public function insertar_inicio_servicio($url, $name, $extension, $titulo, $mensaje, $in_estado)
	{
		$sql = "INSERT INTO tb_inicio_servicio(url,name,extension,titulo,mensaje,in_estado)
		VALUES('$url','$name','$extension','$titulo','$mensaje','$in_estado')";
		return ejecutarConsulta($sql);
	}

	//Implementamos un método para insertar registros
	public function actualizar_servicio($id,$url, $name, $extension, $titulo, $mensaje, $in_estado)
	{
		$sql = "UPDATE tb_inicio_servicio set titulo='$titulo',mensaje='$mensaje',url='$url',name='$name',extension='$extension'
		WHERE idinicioservicio='$id'";
		return ejecutarConsulta($sql);
	}

	//Implementamos un método para insertar registros
	public function actualizar_servicio2($id, $titulo, $mensaje, $in_estado)
	{
		$sql = "UPDATE tb_inicio_servicio set titulo='$titulo',mensaje='$mensaje'
		WHERE idinicioservicio='$id'";
		return ejecutarConsulta($sql);
	}

		//Implementamos un método para insertar registros
		public function borrar_imagen_Subservicio($id)
		{
			$sql = "delete from tb_detalle_inicio_servicio
			WHERE iddetinicioservicio='$id'";
			return ejecutarConsulta($sql);
		}

	//Implementamos un método para insertar registros
	public function borrar_imagen_servicio($id)
	{
		$sql = "UPDATE tb_inicio_servicio set url='',name='',extension='',titulo='',mensaje=''
		WHERE idinicioservicio='$id'";
		return ejecutarConsulta($sql);
	}

	public function listar_inicio_servicio()
	{
		$sql = "select * from tb_inicio_servicio where in_estado=1";
		return ejecutarConsulta($sql);
	}

	public function obtener_inicio_servicio($id)
	{
		$sql = "select * from tb_inicio_servicio where idinicioservicio='$id'";
		return ejecutarConsultaSimpleFila($sql);
	}

	public function listar_fondo_inicio()
	{
		$sql = "select * from tb_fondo_principal";
		return ejecutarConsultaSimpleFila($sql);
	}

	public function borrarInicioServicio($idx)
	{
		$sql = "delete from tb_inicio_servicio where idinicioservicio='$idx'";
		return ejecutarConsulta($sql);
	}


	//Implementamos un método para insertar registros
	public function insertar($vc_texto)
	{
		$sql = "INSERT INTO tb_inicio(texto)
		VALUES('$vc_texto')";
		return ejecutarConsulta($sql);
	}

	//Implementamos un método para editar registros
	public function editar($vc_texto)
	{
		$sql = "UPDATE tb_inicio SET texto='$vc_texto'";
		return ejecutarConsulta($sql);
	}

	//Implementar un método para mostrar los datos de un registro a modificar
	public function mostrar()
	{
		$sql = "SELECT * FROM tb_inicio LIMIT 1;";
		return ejecutarConsultaSimpleFila($sql);
	}

	//Implementar un método para mostrar los datos de un registro a modificar
	public function listarimagenes()
	{
		$sql = "SELECT * FROM tb_inicio_imagenes;";
		return ejecutarConsulta($sql);
	}

	public function buscarImagen($id)
	{
		$sql = "SELECT * FROM tb_inicio_imagenes where idinicioimagen='$id';";
		return ejecutarConsultaSimpleFila($sql);
	}

	//Implementar un método para mostrar los datos de un registro a modificar
	public function borrarimagenes($id)
	{
		$sql = "delete FROM tb_inicio_imagenes where idinicioimagen='$id';";
		return ejecutarConsulta($sql);
	}

	//Implementamos un método para insertar registros
	public function insertarImagen($url, $name, $extension)
	{
		$sql = "INSERT INTO tb_inicio_imagenes(url,name,extension)
		VALUES('$url','$name','$extension')";
		return ejecutarConsulta($sql);
	}

	//Implementar un método para mostrar los datos de un registro a modificar
	public function listarimagenesCliente()
	{
		$sql = "SELECT * FROM tb_inicio_cliente order by idiniciocliente;";
		return ejecutarConsulta($sql);
	}

	public function buscarImagenCliente($id)
	{
		$sql = "SELECT * FROM tb_inicio_cliente where idiniciocliente='$id';";
		return ejecutarConsultaSimpleFila($sql);
	}

	public function accederSistema($usuario, $clave)
	{
		$sql = "SELECT * FROM tb_usuario where usuario='$usuario' and clave='$clave';";
		return ejecutarConsulta($sql);
	}

	//Implementar un método para mostrar los datos de un registro a modificar
	public function borrarimagenesCliente($id)
	{
		$sql = "delete FROM tb_inicio_cliente where idiniciocliente='$id';";
		return ejecutarConsulta($sql);
	}

	//Implementamos un método para insertar registros
	public function insertarImagenCliente($url, $name, $extension)
	{
		$sql = "INSERT INTO tb_inicio_cliente(url,name,extension)
		VALUES('$url','$name','$extension')";
		return ejecutarConsulta($sql);
	}

	public function insertarFondoPrincipal($url, $name, $extension)
	{
		$sql = "INSERT INTO tb_fondo_principal(url,name,extension)
		VALUES('$url','$name','$extension')";
		return ejecutarConsulta($sql);
	}

	public function eliminarFondoPrincipal()
	{
		$sql = "delete from tb_fondo_principal";
		return ejecutarConsulta($sql);
	}


	//Implementamos un método para insertar registros
	public function insertarTitulos($titulo1, $titulo2, $titulo3)
	{
		$sql = "INSERT INTO tb_inicio_titulo(titulo1,titulo2,titulo3)
			VALUES('$titulo1','$titulo2','$titulo3')";
		return ejecutarConsulta($sql);
	}
	public function eliminarTitulos()
	{
		$sql = "delete from tb_inicio_titulo";
		return ejecutarConsulta($sql);
	}
	public function listarTitulosInicio()
	{
		$sql = "SELECT * FROM tb_inicio_titulo";
		return ejecutarConsultaSimpleFila($sql);
	}
}
