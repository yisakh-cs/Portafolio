<?php

//require_once(__MDL_PATH."mdl_front.php"); //Requerimos del modelo
require_once(__LIB_PATH."message.php");
require_once(__LIB_PATH."html.php");

class CTR_front
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
	
	
/*	
	function btn_save_click()
	{
		$postinfo=array();
		//removemos espacios y etiquetas html, además sustituimos comillas simples
		//por dobles para prevenir SQL INJECTION
		$postinfo[0]=strip_tags(trim(str_replace("'","\"", $_POST['tweet'])));
		
		$this->postdata->insertar_post($postinfo);
		$this->mssg->show_message("","success","success_insert");
		
	}
	*/
	
	function cargar_view()
	{
		//Incluimos literalmente la vista correspondiente
		require_once(__VWS_PATH."front.php");
	}
		

}
?>