<?php

//require_once(__MDL_PATH."mdl_front.php"); //Requerimos del modelo
require_once(__LIB_PATH."message.php");
require_once(__LIB_PATH."html.php");


class CTR_menu
{
	private $postdata;
	var $mssg;
	var $html;
	
	public function __construct() //Constructor
	{
		//$this->postdata=new MDL_front();
		$this->mssg = new Message();
		$this->html = new HTML();
		
	}
	
	
	function cargar_view()
	{
		//Incluimos literalmente la vista correspondiente
		require_once(__VWS_PATH."menu.php");
	}
		

}
?>