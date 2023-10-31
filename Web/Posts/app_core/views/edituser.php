<?php

    require_once(__LIB_PATH . "html.php");

    //Declaramos el controlador de la vista actual el cual contiene las acciones a ejecutar
    $edituser = new CTR_edituser();
    $html = new HTML();
?>

    <div id="from_edituser">

        <?php echo $html->html_form_tag("frm_edituser", "" ,"","post");  ?>
        <h1></h1>
        <?php echo $html->html_input_text("txt_user","txt_user","cajatexto",64,"","",
                                    "Nombre de Usuario",1,"","placeholder='USUARIO'","required"); ?>
        <br>
        <?php echo $html->html_input_password("txt_pssw","txt_pssw","cajatexto",64,"",
                                    "Contraseña del Usuario",2,"","placeholder='PASSWORD'","required"); ?>
        <br>
        <?php echo $html->html_input_text("txt_foto","txt_foto","cajatexto",64,"","",
                                    "Foto de Usuario",1,"","placeholder='FOTO'","required"); ?>
        <br>
        <?php echo $html->html_input_button("submit","btn_editar","btn_editar","boton","EDITAR",3,"",""); ?>
        <?php echo $html->html_input_button("submit","btn_eliminar","btn_eliminar","boton","ELIMINAR",3,"",""); ?>
        <?php echo $html->html_input_button("buttom","btn_cancelar","btn_cancelar","boton","CANCELAR",3,"",""); ?>
        <br>
        <?php echo $html->html_form_end(); ?>

    </div>

 <?php
      //Eventos click de los botones de acción
       if(isset($_POST['btn_cancelar'])){
         $edituser->btn_login_click();
       }

       if(isset($_POST['btn_editar'])){
       // $edituser->; // este que me lo mande a la funcion update
      }

      if(isset($_POST['btn_eliminar'])){
      //  $edituser->; //este que me lo mande a la funcion eliminar
      }


 ?>
