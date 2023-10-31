<?php
   require_once(__LIB_PATH . "html.php");


   $html = new HTML();
   $twitter = new CTR_twitter(); //variable del Controlador
   $login = new CTR_login(); //variable del Controlador

    //Evento click (PUBLICAR) se activa al hacer click en el boton via POST
    if(isset($_POST['btn_save'])){ 
        $twitter->btn_save_click();
    }


    //Evento click (SALIR) se activa al hacer click en el boton via POST
    if(isset($_POST['btn_logout'])){ 
        $login->btn_logout_click();
    }

   if(isset($_POST['btn_eliminar'])){ 
        $twitter->btn_eliminarP();
    }

 if(isset($_GET['btn_buscar'])){
	 echo '<script>console.log("Hola he recibido el get")</script>';
      $twitter->buscar_posts();
    }
?>

<div id="panel_app">

  <div id="user_box">
      <?php echo $html->html_img_tag(__RSC_PHO_HOST_PATH. $_SESSION['USERPHOTO'], 
        "photo_profile", "imguser", "photo", "width=50") . "<span>HOLA! "  . 
        $_SESSION['USERNAME'] . "</span>" ;?>
	  
	  
    <div id="logout">
        <?php echo $html->html_form_tag("frm_app", "","","post"); ?>
        <?php echo $html->html_input_button("submit","btn_logout","btn_logout","boton","X",3,"",""); ?>
        <?php echo $html->html_form_end(); ?>
    </div>
	  
	  <div id="edit_link">
	 
	 <?php echo $html->html_input_button("button","btn_editarP","btn_editarP","boton","EditarPerfil",3,"","onclick=''"); ?>
	  </div>
	</div>
	  
  <!--En el siguiente bloque imprimimos EL FORMULARIO HTML de envio de posts -->

  <div id="post_box">
      <?php echo $html->html_form_tag("frm_service", "","","post"); ?>
      <?php echo $html->html_input_text("txt_post","txt_post","cajatexto",64,"","","Escribe algo!",1,"","placeholder='¿Qué sucede?'","required"); ?>
	  
	  <?php echo $html->html_input_button("button","btn_buscar","btn_buscar","boton","Buscar",3,"","onclick='buscarTweets()'"); ?>
	  
      <?php echo $html->html_input_button("button","btn_save","btn_save","boton","Publicar",2,"","onclick='pusherAjax()'"); ?>

	  
	  
      <?php echo $html->html_form_end(); ?>
  </div>

  <div id="main_panel">
     
    <?php   
        //En el siguiente bloque imprimimos todos los posts de la BD
        $caja_post=""; //acumula el String con todo el texto de los posts
        $contposts=0; //Contador de posts
	    if(isset($_POST['key'])){
    	if($_POST['key']=='cargar'){
			echo $twitter->buscar_posts();
    	}
    	}else if (isset($_GET['btn_buscar'])){
			echo $twitter->cargar_tweet();
    	}else{
      	echo $twitter->buscar_posts();
		}
    ?>
  </div>

</div>



