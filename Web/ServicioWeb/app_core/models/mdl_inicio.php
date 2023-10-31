<?php

   //requerimos de la conexion a la BD
   require_once(__CON_PATH . "conexion.php");

	class MDL_inicio
	{

		private $conexion;

		public function __construct()
		{
			$this->conexion = Conexion::getInstance(); 
		}

		function obtenerContenido()
		{
            $this->conexion->consulta("SELECT tbl_inicio.id,tbl_inicio.titulo_inicio,tbl_inicio.parrafo FROM tbl_inicio");
            $inicio=array(); 
            $num_fila=0;
            while($fila = $this->conexion->extraer_registro())
			{
				  $inicio[$num_fila][0] = $fila[0]; //id
                  $inicio[$num_fila][1] = $fila[1]; //Titulo
                  $inicio[$num_fila][2] = $fila[2]; //Descripcion del parrafo

                    $num_fila++;
			}
            return $inicio;
        }
				
	}
?>