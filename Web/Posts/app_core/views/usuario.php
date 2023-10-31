<?php

    require_once(__LIB_PATH . "html.php");

    //Declaramos el controlador de la vista actual el cual contiene las acciones a ejecutar
    $user = new CTR_login();
    $html = new HTML();
?>

    <div id="usuario">

        <?php echo $html->html_form_tag("frm_signin", "" ,"","post");  ?>
        <h1></h1>
        <?php echo $html->html_input_text("txt_user","txt_user","cajatexto",64,"","",
                                    "Nombre de Usuario",1,"","placeholder='Nombre_usuario'","required"); ?>
        <br>
        <?php echo $html->html_input_password("txt_pssw","txt_pssw","cajatexto",64,"",
                                    "Contraseña del Usuario",2,"","placeholder='Cono'","required"); ?>
        <br>
    <select id="cmb">
      <option src=".../app_core/resources/photos/1.jpg">1</option>
      <option src=".../app_core/resources/photos/2.jpg">2</option>
      <option src=".../app_core/resources/photos/3.jpg">3</option>
        <option src=".../app_core/resources/photos/unknow.jpg">4</option>
    </select>

        <br>
        <?php echo $html->html_input_button("submit","btn_signin","btn_signin","boton","Registarse",4,"",""); ?>
        <br>
        <?php echo $html->html_form_end(); ?>

    </div>

 <?php
      //Eventos click de los botones de acción
       if(isset($_POST['btn_signin'])){
         
         $user->btn_sign();
       }
 ?>
