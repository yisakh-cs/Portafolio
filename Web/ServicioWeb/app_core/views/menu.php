<?php
   require_once(__LIB_PATH . "html.php");


   $html = new HTML();
   $menu = new CTR_menu(); //variable del Controlador

 ?>
<div id="menu">
	
	<?php echo $html->html_form_tag("frm_menu", "" ,"","post");  ?>
        <?php echo $html->html_input_button("submit","btn_inicio","btn_Inicio","boton","Libreria Berlin",1,"",""); ?>
	    <?php echo $html->html_input_button("submit","btn_QS","btn_QS","boton","¿Quienes Somos?",2,"",""); ?>
		<?php echo $html->html_input_button("submit","btn_servicio","btn_servicio","boton","Servicios",3,"",""); ?>
		<?php echo $html->html_input_button("submit","btn_galeria","btn_galeria","boton","Galeria",4,"",""); ?>
		<?php echo $html->html_input_button("submit","btn_contacto","btn_contacto","boton","Contacto",5,"",""); ?>
	<?php echo $html->html_form_end(); ?>
</div>
   