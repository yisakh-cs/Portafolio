<?php

require_once(__MDL_PATH."mdl_servicios.php");
require_once(__CTR_PATH."ctr_banner.php");
require_once(__LIB_PATH."html.php");

$banner = new CTR_banner();

class CTR_servicios
{
	var $html;
	
	public function __construct() //Constructor
	{
		$this->data=new MDL_servicios();
		$this->html = new HTML();
		
	}
	
	function cargar_view()
	{
		require_once(__VWS_PATH."servicios.php");
	}
	function obtener_mas()
	{
		return $this->data->Vermas_servicios();
	}
	
	function view_s($dato)
	{	
		return $this->data->Serviciosid($dato);	
	}
	function insertarServicio()
	{
			$nombre=$_POST['nombre'];
			$resumen=$_POST['resumen'];
			$contenido=$_POST['contenido'];
			$this->postdata->servicioInsertar($nombre,$resumen,$contenido);
			$this->mssg->show_message("","success","success_insert");

	}
}
?>