<?php
 
    require_once(__LIB_PATH . "html.php");
    
	$user = new CTR_login();
    $html = new HTML();
?>
          
    <div id="registro">
        
        <form method="post" id= "frm_registro" enctype="multipart/form-data">
        <h1>Registrar Usuario</h1>
		<br>
        <?php echo $html->html_input_text("txt_nombre","txt_nombre","cajatexto",64,"","",
                                    "Nombre ",1,"","placeholder='Nombre'","required"); ?>
        <br>
        <?php echo $html->html_input_text("txt_usuario","txt_usuario","cajatexto",64,"","",
                                   "Nombre de Usuario",2,"","placeholder='Usuario'","required"); ?>
        <br>
        <?php echo $html->html_input_password("txt_contraseña","txt_contraseña","cajatexto",64,"",
                                    "Contraseña del Usuario",3,"","placeholder='Contraseña'","required"); ?>	
		<br>
        <?php echo $html->html_input_text("txt_correo","txt_correo","cajatexto",64,"","",
                                   "Correo Electronico",4,"","placeholder='Correo Electronico'","required"); ?>
        <br>
		
		<?php echo $html->html_input_file("url_foto", "", "url_foto", "","","",5,"","required");
		?>
		<br>
		 <button type="submit" name="enviar">Enviar</button>
		<br>
        </form>
    
    </div>

 <?php

	   if(isset($_POST['enviar']))
	   { 
         $user->btn_registrar();
       }

 ?>