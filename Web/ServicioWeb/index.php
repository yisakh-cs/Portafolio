<?php


require_once("global.php"); //Archivo basico global de conf
require_once(__LIB_PATH."html.php");
require_once(__CTR_PATH."ctr_inicio.php");
require_once(__CTR_PATH."ctr_contacto.php");
require_once(__CTR_PATH."ctr_galeria.php");
require_once(__CTR_PATH."ctr_menu.php");
require_once(__CTR_PATH."ctr_about.php");
require_once(__CTR_PATH."ctr_servicios.php");

$html = new HTML(); //Invocamos al html helper
$inicio = new CTR_inicio(); //Invocamos al controlador
$contacto = new CTR_contacto(); 
$menu = new CTR_menu(); 
$galeria = new CTR_galeria(); 
$about = new CTR_about(); 
$servicios = new CTR_servicios(); 
?>

<!DOCTYPE HTML>
<html>

  <head>

    <meta name="title" content="Web " />
    <meta name="description" content="ProyectoI example" />
    <meta name="robots" content="index, follow" />
    <meta name="keywords" content="WebSite, HTML5, PHP, MySQL, jquery" />
    <meta name="language" content="es" />
    <link rel="shortcut icon" href="favicon.ico"/>
	  
      <?php
          echo $html->html_js_header(__JS_PATH."jquery.js");
	  	  echo $html->html_js_header(__JS_PATH. "funciones1.js");
          echo $html->html_css_header(__CSS_PATH."stylesv11.css","screen");
	  echo $html->html_css_header(__CSS_PATH."stiloG.css","screen");
	  
      ?>
    <title>Libreria Berlin</title>
	  
  </head>

  <body id="main_page">
  
    <div id='msg_box_container'></div>
	  
  	<div id="main_box">

		
      <?php
			if(isset($_POST['btnEnviar']))
			{ 
				$contacto->btn_send_click();
    		}
		if(isset($_POST['btn_inicio']))
		{
			$menu->cargar_view();
			$inicio->cargar_view();
		}
		else
			if(isset($_POST['btn_QS']))
			{
				$menu->cargar_view();
				$about->cargar_view();
			}
		else
			if (isset($_POST['btn_galeria']))
			{
				$menu->cargar_view();
				$galeria->cargar_view();
			}
		else
			if(isset($_POST['btn_contacto']))
			{
				$menu->cargar_view();
				$contacto->cargar_view();
			}
		else
			if(isset($_POST['btn_servicio']))
			{
				$menu->cargar_view();
				$servicios->cargar_view();
			}
		
		else
		{
			$menu->cargar_view();
			$inicio->cargar_view();
		}
	
      ?>

    </div>

  </body>
</html>