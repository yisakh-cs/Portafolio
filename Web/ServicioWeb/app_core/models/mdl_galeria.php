<?php
   require_once(__CON_PATH . "conexion.php");

	class MDL_galeria
	{

		private $conexion;

		public function __construct()
		{
			$this->conexion = Conexion::getInstance();
		}
		public function obtenerImagenG()
		{
			$this->conexion->consulta("SELECT tbl_galeria.id, tbl_galeria.descripcion,tbl_galeria.imagen FROM tbl_galeria");
			$imagen=array(); 
			$row=0;
			
			while($fila=$this->conexion->extraer_registro())
			{
				$imagen[$row][0] = $fila[0];//id
				$imagen[$row][1] = $fila[1];//descripcion
				$imagen[$row][2] = $fila[2];//imagen
				
				$row++;
			}
		return $imagen;
	}
		
  }


