<?php
session_name("MYAPP"); session_start();

//Inicio de la sesion ubicados antes que cualquier otra cosa

require_once("global.php"); //Archivo basico global de conf
require_once(__LIB_PATH."html.php");
require_once(__CTR_PATH."ctr_front.php");

$html = new HTML(); //Invocamos al html helper
$front = new CTR_front(); //Invocamos al controlador


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
          echo $html->html_css_header(__CSS_PATH."styles1.css","screen");
      ?>
    <title>Proyecto I</title>
	  
  </head>

  <body id="main_page">
  
    <div id='msg_box_container'></div>
	  
  	<div id="main_box">

		
      <?php
        //Incluimos la vista contenida dentro del controlador respectivo
               //Incluimos la vista contenida dentro del controlador respectivo
  		if(isset($_SESSION['MYAPP']))
		{
			$front->cargar_view();
		}
		$front->cargar_view();
      ?>

    </div>

  </body>
</html>