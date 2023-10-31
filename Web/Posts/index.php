<?php
session_name("MYAPP"); session_start();

//Inicio de la sesion ubicados antes que cualquier otra cosa

require_once("global.php"); //Archivo basico global de conf
require_once(__LIB_PATH."html.php");
require_once(__CTR_PATH."ctr_twitter.php");
require_once(__CTR_PATH."ctr_login.php");

$html = new HTML(); //Invocamos al html helper
$twitter = new CTR_twitter(); //Invocamos al controlador
$login = new CTR_login(); //Invocamos al controlador

?>

<!DOCTYPE HTML>
<html>

  <head>

    <meta name="title" content="Twitter " />
    <meta name="description" content="Twitter example" />
    <meta name="robots" content="index, follow" />
    <meta name="keywords" content="Social Network, HTML5, PHP, MySQL, jquery" />
    <meta name="language" content="es" />
    <link rel="shortcut icon" href="favicon.ico"/>
	  
      <?php
          echo $html->html_js_header(__JS_PATH."jquery.js");
          echo $html->html_js_header(__JS_PATH. "funciones.js");
          echo $html->html_css_header(__CSS_PATH."styles3.css","screen");
      ?>
    <title>My Twitter</title>
	  
  </head>

  <body id="main_page">
  
    <div id='msg_box_container'></div>
	  
  	<div id="main_box">

		
      <?php
        //Incluimos la vista contenida dentro del controlador respectivo
               //Incluimos la vista contenida dentro del controlador respectivo
  		if(isset($_SESSION['MYAPP'])){
			if(isset($_POST['btn_sign']))
			{
				$login->cargar_vista_usuario();
			}
			else
			{
			 if($_SESSION['MYAPP']!="YES"){
              $login->cargar_view();
         }else{
          $twitter->cargar_view();
          }	
			}	 
       }else{
          $login->cargar_view();
      }		
          
      ?>

    </div>

  </body>
</html>


