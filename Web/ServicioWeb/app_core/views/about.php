<?php
   require_once(__LIB_PATH . "html.php");
   require_once(__CTR_PATH."ctr_banner.php");
   $about = new CTR_about(); //variable del Controlador
   $banner = new CTR_banner(); 
   $html = new HTML();
?>

<div id="panel_app">
	
  <div id="seccion_qsBanner"> 
	    <?php $banner->cargar_imagen("QS");?>
  </div>

<div id= "about">
  <?php
  $caja="";
  $cont=0;
  foreach ($about->obtener_Datos() as $info)
  {
  $caja="<div class='informacionAbout'>
    <h2>".$info[1]."</h2>
    <span class='parrafoAbout'>".$info[2]."</span>
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



