<?php
   //requerimos de la conexion a la BD
   require_once(__CON_PATH . "conexion.php");

	class MDL_servicios
	{

		private $conexion;

		public function __construct()
		{
			$this->conexion = Conexion::getInstance();
		}

					
		public function Serviciosid($dato)
		{
        	$this->conexion->consulta("SELECT tbl_servicios.id, tbl_servicios.nombre, tbl_servicios.resumen, tbl_servicios.contenido FROM tbl_servicios WHERE tbl_servicios.id = '".$dato."'");
			
			$posts=array(); //matriz
			$num_fila=0;
			
			while($fila=$this->conexion->extraer_registro())
			{
				$posts[$num_fila][0] = $fila[0];//id
				$posts[$num_fila][1] = $fila[1];//Titulo
				$posts[$num_fila][2] = $fila[2]; //Resumen
				$posts[$num_fila][3] = $fila[3];//parrafo
				
				$num_fila++;
			}
			return $posts;
		}
		
		public function servicioInsertar($nombre,$resumen,$contenido)
		{
      			 $this->conexion->consulta("INSERT INTO tbl_servicios(nombre,resumen,contenido)
                 VALUES('$nombre','$resumen','$contenido')");
    	}
  }

		