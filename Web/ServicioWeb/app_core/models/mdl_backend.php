<?php

   //requerimos de la conexion a la BD
   require_once(__CON_PATH . "conexion.php");

	class MDL_backend
	{

		private $conexion;

		public function __construct()
		{
			$this->conexion = Conexion::getInstance(); 
		}

			public function editar_contacto($id,$correo, $telefono, $otros)
		{
      		$this->conexion->consulta("UPDATE tbl_social SET tbl_social.correo ='$correo', tbl_social.telefono = '$telefono', tbl_social.otros = '$otros' WHERE tbl_social.id = '$id'");
  	    }
		
		
		public function editar_inicio($cod,$titulo, $detalle)
		{
      		$this->conexion->consulta("UPDATE tbl_inicio SET tbl_inicio.titulo_inicio = '$titulo', tbl_inicio.parrafo ='$detalle' WHERE tbl_inicio.id = '$cod'");
  	    }
		public function editar_seccion($datos = array())
		{
			$this->conexion->consulta("UPDATE tbl_banner SET tbl_banner.imagen = '".$datos[1]."'
								WHERE tbl_banner.id = '".$datos[0]."' ");

		}
		public function editar_qs($id,$titulo2, $detalle2)
		{
      		$this->conexion->consulta("UPDATE tbl_historia SET tbl_historia.titulo_historia = '$titulo2', tbl_historia.parrafo ='$detalle2' WHERE tbl_historia.id = '$id'");
  	    }		
		
		/*public function obtenerUsuarios()
		{
			$this->conexion->consulta("SELECT tbl_usuarios.usuario, tbl_usuarios.clave, tbl_usuarios.nombre, tbl_usuarios.correo, tbl_usuarios.foto FROM tbl_usuarios");
			$usuarios = array();
			$row = 0;
			
			while($filas = $this->conexion->extraer_registros())
			{
				$usuarios[row][0] = $filas[0]; //usuario
				$usuarios[row][1] = $filas[1]; //clave
				$usuarios[row][2] = $filas[2]; //nombre
				$usuarios[row][3] = $filas[3]; //correo
				$usuarios[row][4] = $filas[4]; //foto
				
				$row++;
			}
			return $usuarios;
		}*/
					
	}
?>