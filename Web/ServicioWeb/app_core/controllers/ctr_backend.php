<?php
require_once(__MDL_PATH."mdl_backend.php");
require_once(__LIB_PATH."message.php");
require_once(__LIB_PATH."html.php");

class CTR_backend
{
	var $mssg;
	var $html;
	
	public function __construct() 
	{
		$this->data = new MDL_backend();
		$this->mssg = new Message();
		$this->html = new HTML();
		
	}	
	function cargar_view2()
	{
		require_once(__VWS_PATH."back.php");
	}
	function cargar_view()
	{
		require_once(__VWS_PATH."backend.php");
	}
	function modificar_Ajax($cod,$titulo,$detalle)
	{
		$this->data->editar_inicio($cod,$titulo,$detalle);
	}
	function modificar_QS($id,$titulo2,$detalle2)
	{
		$this->data->editar_qs($id,$titulo2,$detalle2);

	}
	function editar_seccion()
	{
		$datos = array();
		$datos[0] = $_POST['cmb_seccion'];//id seccion
		$datos[1] =  md5($_FILES['archivo']['tmp_name']).".jpg";

		$this->data->editar_seccion($datos);
	}
	function editar_seccionInicio()
	{
		$datos = array();
		$datos[0] = $_POST['cmb_seccion'];//id seccion
		$datos[1] =  md5($_FILES['archivoInicio']['tmp_name']).".jpg";

		$this->data->editar_seccion($datos);
	}
	function editar_seccionQS()
	{
		$datos = array();
		$datos[0] = $_POST['cmb_seccion'];//id seccion
		$datos[1] =  md5($_FILES['archivoQS']['tmp_name']).".jpg";

		$this->data->editar_seccion($datos);
	}
	function modificar_contactos($id,$correo,$telefono, $otros)
	{
		$this->data->editar_contacto($id,$correo,$telefono,$otros);

	}
	
	/*public function get_users()
	{
		$caja = "<select class = 'usuarios' id = 'cmb_usuarios'>";
		
		foreach($this->data->obtenerUsuarios() as $value)
		{
			$caja.= "<option value='".$value[0]."'>".$values[1]."</option>";
		}
		$caja.="</select>";
		echo($caja);
	}*/
	
}