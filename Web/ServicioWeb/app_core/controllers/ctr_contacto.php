<?php

require_once(__MDL_PATH."mdl_contacto.php"); //Requerimos del modelo
require_once(__LIB_PATH."html.php");


class CTR_contacto
{
	var $html;

	public function __construct() //Constructor
	{
		$this->comentdata=new MDL_contacto();
		$this->html = new HTML();
		$this->social=new MDL_contacto();
	}

	function btn_send_click()
	{
		$nombre=trim($_POST['nombre']);
		$correo=trim($_POST['email']);
		$comentario=trim($_POST['mensaje']);

		$this->comentdata->insertar_comentarios($nombre,$correo,$comentario);

	}
	function cargar_view()
	{
		require_once(__VWS_PATH."contacto.php");
	}
	//Obtener informacion sobre administradores
	public  function obtener_social()
	{
		return $this->comentdata->obtenerContacto();
	}
	public  function obtener_comentario()
	{
		return $this->comentdata->obtenerComentarios();
	}

}
?>
