<?php

require_once(__MDL_PATH."mdl_inicio.php");
require_once(__LIB_PATH."html.php");

class CTR_inicio
{
	var $html;
	
	public function __construct() //Constructor
	{
		$this->data=new MDL_inicio();
		$this->html = new HTML();
		
	}
	
	function cargar_view()
	{
		require_once(__VWS_PATH."inicio.php");
	}
	public function obtener_Datos()
	{
		return $this->data->obtenerContenido();
	}	
	function cargar_viewRegistro()
	{
		require_once(__VWS_PATH."registrousuario.php");
	}
}
?>