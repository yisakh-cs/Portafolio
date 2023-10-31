<?php
	require_once(__LIB_PATH . "html.php");
	$html = new HTML();
    require_once(__CTR_PATH."ctr_banner.php");

	$contacto = new CTR_contacto(); //variable del Controlador
	$banner = new CTR_banner(); 
?>
<div id="banner_contac"> 
	 <?php $banner->cargar_imagen("contacto");?>
  </div>

<div id="seccion_contact"> 	
<form method="post" class="formulario">
	<div id=message></div>
	<header class="principal">
     <h1>Contacto</h1>
 </header>
       <input id="txt_nombre" name="nombre" placeholder="Nombre completo" required>
       <input id="txt_email" name="email" type="email" placeholder="Correo Electronico" required>
       <textarea id="txt_mensaje" name="mensaje" placeholder="Escribe tu mensaje" required></textarea>
	   <?php echo $html->html_input_button("button","btnEnviar","btnEnviar","boton","Enviar",1,"","onclick='insertarComentarioAjax()'"); ?>
</form>
<form class="formulario">
	<?php $caja="";
		$cont=0;

			foreach ($contacto->obtener_social() as $info ) {

						$caja.="<div id = 'infoContact''>
						<span>Direccion de correo: " .$info[1]."</span>
						<br>
						<br>
						<span>Telefono: " .$info[2]."</span>
						<br>
						<br>
						<span>Tambien puede comunicarse a: " .$info[3]."</span>
						</div>";

						$cont++;
			}
			echo $caja;

 ?>
</form>
	<footer> <!-- Barra inferior del sitio -->
	  Copyright &reg; <script type="text/javascript">document.write(new Date().getFullYear());</script> Laura Venegas  y Yisakh Castro - Todos los derechos reservados.
	</footer>
	</div>
	

