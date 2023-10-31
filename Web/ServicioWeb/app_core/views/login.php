<?php
 
    require_once(__LIB_PATH . "html.php");
    

    $login = new CTR_login();
    $html = new HTML();
?>
          
    <div id="login">
        
        <?php echo $html->html_form_tag("frm_login", "" ,"","post");  ?>
        <h1></h1>
        <?php echo $html->html_input_text("txt_usuario","txt_usuario","cajatexto",64,"","",
                                    "Nombre de Usuario",1,"","placeholder='USUARIO'",""); ?>
        <br>
        <?php echo $html->html_input_password("txt_contraseña","txt_contraseña","cajatexto",64,"",
                                    "Contraseña del Usuario",2,"","placeholder='CONTRASEÑA'",""); ?>
        <br>
        <?php echo $html->html_input_button("submit","btn_login","btn_login","boton","Ingresar",3,"",""); ?>
		<br>
		 <h2>¿No tiene cuenta?</h2>
		 <?php echo $html->html_input_button("submit","btn_registro","btn_registro","botones","Registrarse",4,"",""); ?>
		<br>

        <?php echo $html->html_form_end(); ?>
    
    </div>

 <?php

       if(isset($_POST['btn_login']))
	   {
         $login->btn_iniciarSesion();
       }
		 if(isset($_POST['btn_registro']))
	   {	
		$login->cargar_viewRegistro();
	   }
	   if(isset($_POST['btn_logout']))
	   {
         $login->btn_logout_click();
       }	
	if(isset($_POST['enviar']))
	   {
         $login->btn_registrar();
       }



 ?>

 