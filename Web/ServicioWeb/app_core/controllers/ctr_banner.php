<?php

require_once(__MDL_PATH."mdl_banner.php");
require_once(__LIB_PATH."message.php");
require_once(__LIB_PATH."html.php");

class CTR_banner
{
	
	var $mssg;
	var $html;
	
	public function __construct() //Constructor
	{
		$this->ban=new MDL_banner();
		$this->mssg = new Message();
		$this->html = new HTML();
		
	}
	
	function cargar_imagen($seccion)
	{
		$valores = $this->ban->obtenerBanner($seccion);
		?>
        <div id = 'Banner' class= 'Banner'>
			<img  src="app_design/img/<?php echo $valores[2];?>">
		</div>
		<?php  
	}
		function cargar_imagenEditar($seccion)
	{
		$valores = $this->ban->obtenerBanner($seccion);
		?>
        <div id = 'Banner' class= 'Banner'>
			<img src="app_design/img/<?php echo $valores[2];?>" style="width:25%; height=25%; margin:-5px 5px; position:absolute"; >
		</div>
		<?php  
	}
}
?>