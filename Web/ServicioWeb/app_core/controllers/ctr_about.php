<?php

require_once(__MDL_PATH."mdl_about.php");
require_once(__LIB_PATH."html.php");

class CTR_about
{
	var $html;
	
	public function __construct() //Constructor
	{
		$this->data=new MDL_about();
		$this->html = new HTML();
		
	}
	
	function cargar_view()
	{
		//Incluimos literalmente la vista correspondiente
		require_once(__VWS_PATH."about.php");
	}
	public function obtener_Datos()
	{
		return $this->data->obtenerAbout();
	}	

}
?>