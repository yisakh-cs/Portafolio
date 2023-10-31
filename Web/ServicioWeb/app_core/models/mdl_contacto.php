<?php
   //requerimos de la conexion a la BD
   require_once(__CON_PATH . "conexion.php");

	class MDL_contacto
	{

		private $conexion;

		public function __construct()
		{
			$this->conexion = Conexion::getInstance();
		}

		public function insertar_comentarios($nombre,$correo,$comentario)
		{
			 $this->conexion->consulta("INSERT INTO tbl_contacto(nombre,correo,comentario)
       VALUES('".$nombre."','".$correo."','".$comentario."')");
		}
		
		public function obtenerContacto()
		{
			$this->conexion->consulta("SELECT tbl_social.id,tbl_social.correo,tbl_social.telefono,tbl_social.otros FROM tbl_social");
			$posts=array(); //matriz
			$num_fila=0;
			
			while($fila=$this->conexion->extraer_registro())
			{
				$posts[$num_fila][0] = $fila[0];//id
				$posts[$num_fila][1] = $fila[1];//correo
				$posts[$num_fila][2] = $fila[2];//telefono
				$posts[$num_fila][3] = $fila[3];//otros
				
				$num_fila++;
			}
			return $posts;
		}
		
		public function obtenerComentarios()
		{
			$this->conexion->consulta("SELECT tbl_contacto.id,tbl_contacto.nombre,tbl_contacto.correo, tbl_contacto.comentario FROM tbl_contacto");
			$contactos=array(); 
			$row=0;
			
			while($fila=$this->conexion->extraer_registro())
			{
				$contactos[$row][0] = $fila[0];//id
				$contactos[$row][1] = $fila[1];//nombre
				$contactos[$row][2] = $fila[2];//correo
				$contactos[$row][3] = $fila[3];//comentario
				
				$row++;
			}
			return $contactos;
		}
  }

		