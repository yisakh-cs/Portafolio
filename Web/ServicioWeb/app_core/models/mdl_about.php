<?php
   //requerimos de la conexion a la BD
   require_once(__CON_PATH . "conexion.php");

	class MDL_about
	{

		private $conexion;

		public function __construct()
		{
			$this->conexion = Conexion::getInstance();
		}

		public function obtenerAbout()
		{
			$this->conexion->consulta("SELECT tbl_historia.id, tbl_historia.titulo_historia,tbl_historia.parrafo FROM tbl_historia");
			$about=array(); //matriz
			$row=0;
			
			while($fila=$this->conexion->extraer_registro())
			{
				$about[$row][0] = $fila[0];//id
				$about[$row][1] = $fila[1];//historia
				$about[$row][2] = $fila[2];//parrafo
				
				$row++;
			}
			return $about;
		}
  }

		