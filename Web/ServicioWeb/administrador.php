<?php
session_name("MYAPP"); session_start();

require_once("global.php"); 
require_once(__LIB_PATH."html.php");
require_once(__CTR_PATH."ctr_login.php");
require_once(__CTR_PATH."ctr_backend.php");

$html = new HTML(); 
$login = new CTR_login(); 
$backend = new CTR_backend(); 
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
	  	  echo $html->html_js_header(__JS_PATH. "funcionesAdmi2.js");
          echo $html->html_css_header(__CSS_PATH."styles.css","screen");
      ?>
    <title>Administrador</title>
	  
  </head>

  <body id="main_page"> 
	  
  	<div id="main_box">

		
      <?php
	if(isset($_SESSION['MYAPP'])){
			 if($_SESSION['MYAPP']!="YES"){
              $login->cargar_view();
         }
		else{
          $backend->cargar_view();	 
          }
	}
		else
		{
			$login->cargar_view();
		}
		
      ?>

    </div>

  </body>
</html>