<?php
   require_once(__CON_PATH . "conexion.php");

class MDL_banner
{

	private $conexion;

	public function __construct()
		{
			$this->conexion = Conexion::getInstance();
		}
	
	public function obtenerBanner($seccion)
	{
		$this->conexion->consulta("SELECT tbl_banner.id, tbl_banner.seccion,tbl_banner.imagen FROM tbl_banner WHERE tbl_banner.seccion = '".$seccion."'");
		$banners=array(); //matriz
		$row=0;
			
		while($fila=$this->conexion->extraer_registro())
		{
			$banners[0] = $fila[0];//id
			$banners[1] = $fila[1];//seccion
			$banners[2] = $fila[2];//imagen
				
			$row++;
		}
		return $banners;
	}
}