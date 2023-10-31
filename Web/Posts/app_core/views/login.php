<?php
 
    require_once(__LIB_PATH . "html.php");
    
    //Declaramos el controlador de la vista actual el cual contiene las acciones a ejecutar
    $login = new CTR_login();
    $html = new HTML();
?>
          
    <div id="login">
        
        <?php echo $html->html_form_tag("frm_login", "" ,"","post");  ?>
        <h1></h1>
        <?php echo $html->html_input_text("txt_user","txt_user","cajatexto",64,"","",
                                    "Nombre de Usuario",1,"","placeholder='USUARIO'",""); ?>
        <br>
        <?php echo $html->html_input_password("txt_pssw","txt_pssw","cajatexto",64,"",
                                    "Contraseña del Usuario",2,"","placeholder='PASSWORD'",""); ?>
        <br>
        <?php echo $html->html_input_button("submit","btn_login","btn_login","boton","GO!",3,"",""); ?>
		<br>
		<br>
		<?php echo $html->html_input_button("submit","btn_sign","btn_sign","boton","Registrar",4,"",""); ?>
		
        <br>
        <?php echo $html->html_form_end(); ?>
    
    </div>

 <?php

       if(isset($_POST['btn_login'])){
         $login->btn_login_click();
       }
											
 ?>

 

