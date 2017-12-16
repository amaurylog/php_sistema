<?php 

	// Incluir la conexión a la Base de Datos
	
	require '../config/Conexion.php';

	/**
	* 
	*/
	class Categoria
	{
		// Implementa el constructor
		function __construct()
		{
			# code...
		}

		// Método para insertar registros
		public function insertar($nombre, $descripcion)
		{
			$sql = "INSERT INTO categoria(nombre, descripcion, condicion) 
					VALUES ('$nombre', '$descripcion', '1')";

			return ejecutarConsulta($sql);
		}

		// Método para Editar Registros
		public function editar($idcategoria,$nombre, $descripcion)
		{
			$sql = "UPDATE categoria SET 
					nombre = '$nombre',
					descripcion = '$descripcion' 
					WHERE idcategoria = '$idcategoria'";

			return ejecutarConsulta($sql);
		}

		// Método para desactivar Registros
		public function desactivar($idcategoria)
		{
			$sql = "UPDATE categoria SET 
					condicion = '0' 
					WHERE idcategoria = '$idcategoria'";

			return ejecutarConsulta($sql);
		}

		// Método para activar Registros
		public function activar($idcategoria)
		{
			$sql = "UPDATE categoria SET 
					condicion = '1' 
					WHERE idcategoria = '$idcategoria'";

			return ejecutarConsulta($sql);
		}

		// Método para mostrar datos de un registro a modificar
		public function mostrar($idcategoria)
		{
			$sql = "SELECT * FROM categoria WHERE idcategoria = '$idcategoria'";

			return ejecutarConsultaSimpleFila($sql);
		}

		// Método para listar los registros
		public function listar()
		{
			$sql = "SELECT * FROM categoria";

			return ejecutarConsulta($sql);
		}
	}

 ?>