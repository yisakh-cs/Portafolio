
<?php
    require_once(__LIB_PATH . "html.php");
    require_once(__CTR_PATH."ctr_banner.php");
	$html = new HTML();

   $inicio = new CTR_inicio(); //variable del Controlador
   $banner = new CTR_banner();

?>

<div id="panel_app">
<div id= "seccion_box">
	    <?php $banner->cargar_imagen("inicio");?>
</div>	
	
<div id="inicios">
<?php
  $caja="";
  $cont=0;
  foreach ($inicio->obtener_Datos() as $info)
  {
  $caja="<div class='ban'>
    <h2>".$info[1]."</h2>
    <span class='parrafo'>".$info[2]."</span>
    </div>";
     $cont++;
  }
  echo $caja;
?>
	
</div>
	<footer> <!-- Barra inferior del sitio -->
	  Copyright &reg; <script type="text/javascript">document.write(new Date().getFullYear());</script> Laura Venegas  y Yisakh Castro - Todos los derechos reservados.
	</footer>
</div>






