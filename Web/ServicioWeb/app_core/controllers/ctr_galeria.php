<?php
require_once(__MDL_PATH."mdl_galeria.php");
require_once(__LIB_PATH."message.php");
require_once(__LIB_PATH."html.php");

class CTR_galeria
{
	var $mssg;
	var $html;
	
	public function __construct() //Constructor
	{
		
		$this->mssg = new Message();
		$this->html = new HTML();
		$this->galeria = new MDL_galeria();
		
	}
	
	function cargar_view()
	{
		//Incluimos literalmente la vista correspondiente
		require_once(__VWS_PATH."galeria.php");
	}	
	
	function cargarIMG()
	{
		return $this->galeria->obtenerImagenG();	  
	}

}
?>

<?php
