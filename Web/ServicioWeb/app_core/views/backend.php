<?php
require_once(__LIB_PATH . "html.php");
require_once(__CTR_PATH."ctr_login.php");
require_once(__CTR_PATH."ctr_inicio.php");
require_once(__CTR_PATH."ctr_contacto.php");
require_once(__CTR_PATH."ctr_galeria.php");
require_once(__CTR_PATH."ctr_menu.php");
require_once(__CTR_PATH."ctr_about.php");
require_once(__CTR_PATH."ctr_servicios.php");
require_once(__CTR_PATH."ctr_banner.php");
require_once(__CTR_PATH."ctr_backend.php");

   $html = new HTML();
   $login = new CTR_login();
   $inicio = new CTR_inicio(); 
   $contacto = new CTR_contacto();
   $banner = new CTR_banner();
   $qs = new CTR_about();
   $servicios = new CTR_servicios();
   $backend = new CTR_backend();


		if(isset($_POST['btn_logout']))
		{ 
        $login->btn_logout();
    	}

	if(isset($_POST['btn_modificarqs']))
			{ 
			$nombre_imagen = $_FILES['archivoQS']['tmp_name'];

			$tamanio_img=  $_FILES['archivoQS']['size'];

			$tipo_archivo =$_FILES['archivoQS']['type'];


			if($tamanio_img<=10000000){
    			if($tipo_archivo=="image/jpeg" || $tipo_archivo=="image/png"){
      				$nombre_encriptadp =  md5($nombre_imagen).".jpg";
  
					$backend->editar_seccionQS();
					
      				$carpeta_destino =$_SERVER['DOCUMENT_ROOT'].'/ProyectoI/app_design/img/';
			
	   				$subido=move_uploaded_file($_FILES['archivoQS']['tmp_name'],$carpeta_destino.$nombre_encriptadp);

				}else{
   				//echo $message->show_message("formato no deseado solo se pueden subir imagenes de tipo/jpg/png","warning","");
				}
			}else{
    			echo "tamaño de archivo demasiado grande!!";
			}
			header("location:administrador.php");
			$id = $_POST['id'];
			$titulo2 = $_POST['titulo2'];
			$detalle2 = $_POST['detalle2'];
			$backend->modificar_QS($id,$titulo2,$detalle2);
    	}
	if(isset($_POST['btn_modificar']))
		{
			$nombre_imagen = $_FILES['archivoInicio']['tmp_name'];

			$tamanio_img=  $_FILES['archivoInicio']['size'];

			$tipo_archivo =$_FILES['archivoInicio']['type'];


			if($tamanio_img<=10000000){
    			if($tipo_archivo=="image/jpeg" || $tipo_archivo=="image/png"){
      				$nombre_encriptadp =  md5($nombre_imagen).".jpg";
  
					$backend->editar_seccionInicio();
					
      				$carpeta_destino =$_SERVER['DOCUMENT_ROOT'].'/ProyectoI/app_design/img/';
			
	   				$subido=move_uploaded_file($_FILES['archivoInicio']['tmp_name'],$carpeta_destino.$nombre_encriptadp);

				}else{
   				//echo $message->show_message("formato no deseado solo se pueden subir imagenes de tipo/jpg/png","warning","");
				}
			}else{
    			echo "tamaño de archivo demasiado grande!!";
			}
			header("location:administrador.php");
				$cod = $_POST['cod'];
			$titulo = $_POST['titulo'];
			$detalle = $_POST['detalle'];
			$backend->modificar_Ajax($cod,$titulo,$detalle);
	}
	if(isset($_POST['btn_modificarC']))
	{
			$nombre_imagen = $_FILES['archivo']['tmp_name'];

			$tamanio_img=  $_FILES['archivo']['size'];

			$tipo_archivo = $_FILES['archivo']['type'];


			if($tamanio_img<=10000000){
    			if($tipo_archivo=="image/jpeg" || $tipo_archivo=="image/png"){
      				$nombre_encriptadp =  md5($nombre_imagen).".jpg";
  
					$backend->editar_seccion();
					
      				$carpeta_destino = $_SERVER['DOCUMENT_ROOT'].'/ProyectoI/app_design/img/';
			
	   				$subido=move_uploaded_file($_FILES['archivo']['tmp_name'],$carpeta_destino.$nombre_encriptadp);
				}else{
   				//echo $message->show_message("formato no deseado solo se pueden subir imagenes de tipo/jpg/png","warning","");
				}
			}else{
    			echo "tamaño de archivo demasiado grande!!";
			}
			header("location:administrador.php");
			$id = $_POST['id'];
			$telefono = $_POST['telefono'];
			$correo = $_POST['correo'];
			$otros = $_POST['otros'];
			$backend->modificar_contactos($id,$correo,$telefono,$otros);	
	}

?>

<html>
     <body>
<div id=message></div>
	<header>
	    <?php echo $html->html_form_tag("frm_backend", "" ,"","post");  ?>
		<?php echo $html->html_img_tag(__RSC_PHO_HOST_PATH. $_SESSION['foto'], "photo_profile", "imguser", "photo", "width=50") . "<span id = 'nombre'>Bienvenido "  . $_SESSION['nombreUsuario'] . "</span>" ;?>
		<?php echo $html->html_input_button("submit","btn_logout","btn_logout","boton","Cerrar Sesion",1,"",""); ?>
		<?php echo $html->html_form_end(); ?>
	</header>

		 
<div id = "menuAdm">
	<form action="administrador.php" method="POST" enctype="multipart/form-data" id="frm_secciones">
		
	<div id="botones">
	<input type="button" class='botones' id="boton" name="btn_editarSeccion" title='Editar Seccion' value="Editar Seccion" onclick="editarSecciones()">
	<input type="button" class='botones' id="EditarUsuario" name="btn_EditarUsuario" title='Editar Usuario' value="Editar Usuario" onclick="editarUsuario()" >
	<input type="button" class='botones' id="boton" name="btn_comentarios" title='Comentarios' value="Comentarios" onclick="comentarios()">
	<input type="button" class='botones' id="boton" name="btn_insertarServicios" title='Servicios' value="Servicio" onclick="mostrarServicios()">	
	</div>
		
		
	<div id = 'contenidos'>
	
  		<div id= 'EditarSecciones2'>
             <select id="cmb_seccion" name="cmb_seccion"> 
             	<option value="">Seleccione una Sección</option>
             	<option value="1">Inicio</option>
             	<option value="2">¿Quienes Somos?</option>
				<option value="3">Servicio</option>
				<option value="4">Contacto</option>
				 <option value="5">Galeria</option>
             </select>
		</div>
	</div>
  	<div id = 'EditarUsuarios'>
        
			<?php echo $html->html_form_tag("frm_editar", "" ,"","post");  ?>
			<div id = "titulo">Editar Usuario</div>
			<br>
        	<?php echo $html->html_input_text("txt_nombre","txt_nombre","texto",64,"","",
                                    "Nombre ",1,"","placeholder='Nombre'",""); ?>
        	<br>
        	<?php echo $html->html_input_text("txt_usuario","txt_usuario","texto",64,"","",
                                   "Nombre de Usuario",2,"","placeholder='Usuario'",""); ?>
        	<br>
        	<?php echo $html->html_input_password("txt_contraseña","txt_contraseña","texto",64,"",
                                    "Contraseña del Usuario",3,"","placeholder='Contraseña'",""); ?>	
			<br>
        	<?php echo $html->html_input_text("txt_correo","txt_correo","texto",64,"","",
                                   "Correo Electronico",4,"","placeholder='Correo Electronico'",""); ?>
        	<br>

		<?php echo $html->html_input_button("submit","btn_modifica1","btn_modificar1","botoncito","Modificar",5,"",""); ?>
        <br>
	</div>
	
	 <script language="javascript" type="text/javascript">
	$(document).ready(function(){
        $(".div").hide();
        $("#cmb_seccion").change(function(){
        $(".div").hide();
		$("#div_" + $(this).val()).show();  
        });
     });
	</script>
	
	<div id = 'div_1' class ='div'>
		<input type='file'  name='archivoInicio' id='archivoInicio'>
	<br>
	<?php
	 		$caja="";
			$cont=0;
     
	foreach ($inicio->obtener_Datos() as $info )
	{
		$caja.="".$html->html_input_text("txt_titulo","txt_titulo","titulo","","",$info[1],
                                    "Titulo",6,"","","")."
	<br>
	<textarea id='txt_detalle' class ='detalle' name='detalle' required> $info[2] </textarea>
	
	<br>
	".$html->html_input_button('submit','btn_modificar','btn_modificar','botoncito','Modificar',7,'',"onclick='modificarAJAX(".$info[0].")'")."
	<div id='bannerIMG'> 
	 ".$banner->cargar_imagenEditar('inicio')."
	</div>";
		$cont++;
	}
		echo $caja;
		?>
	
	</div>
	
	<div id = 'div_2' class ='div'>
	<input type='file'  name='archivoQS' id='archivoQS'>
	<br>
		<?php
	 		$caja="";
			$cont=0;
     
	foreach ($qs->obtener_Datos() as $info )
	{
		$caja.="".$html->html_input_text("txt_titulo","txt_titulo2","titulo","","",$info[1],
                                    "Titulo",9,"","","")."
	<br>
	<textarea id='txt_detalle2' class ='detalle' name='detalle' required> $info[2]</textarea>
	
	<br>
	".$html->html_input_button('submit','btn_modificarqs','btn_modificarqs','botoncito','Modificar',10,'',"onclick='modificarqsAJAX(".$info[0].")'")."
	<div id='bannerIMG'> 
	 ".$banner->cargar_imagenEditar('QS')."
	</div>";
		$cont++;
	}
		echo $caja;
		?>
	</div>
	<div id = 'div_3' class = 'div'> 	
		<?php
	 		$caja="";
			$cont=0;
     
	foreach ($servicios->obtener_mas() as $info )
	{
		$caja.="<div class = 'infoServicio' id = 'Serv'>
		".$html->html_input_text('txt_titulo1','txt_titulo1','titulo','','',$info[1],
                                    'Titulo',12,'','','')."
	<br>
	".$html->html_input_text('txt_resumen1','txt_resume1n','resumen','','',$info[2],
                                    'Resumen ',13,'',"placeholder='Resumen'",'')."
	<br>
	<textarea id='txt_detalle1' class ='detalle1' name='detalle' placeholder='Detalle' required>$info[3]</textarea>
	<br>
	".$html->html_input_button('submit','btn_modificarS','btn_modificarS','botoncito','Modificar',14,'','')."
	
	<div id='bannerIMG'> 
	 ".$banner->cargar_imagenEditar('servicios')."
	</div>;
		
	</div>";
		$cont++;
	}
	echo $caja;
		?>	

	</div>
		
	<div id = 'div_4' class ='div'>
	<input type='file'  name='archivo' id='archivo'>
	<br>
	<?php
	 		$caja="";
			$cont=0;
     
	foreach ($contacto->obtener_social() as $info )
	{
		$caja.="".$html->html_input_text("txt_otros","txt_otros","titulo","","",$info[3],
                                    "Otros ",16,"","placeholder='Otros'","")."
	
	".$html->html_input_text("txt_telefono","txt_telefono","titulo","","",$info[2],
                                    "telefono ",17,"","","")."
	
	".$html->html_input_text('txt_direccion','txt_dirrecion','titulo','','',$info[1],
                                    'Direccion',18,'','','')."

	".$html->html_input_button('submit','btn_modificarC','btn_modificarC','botoncito2','Modificar',19,'',"onclick='modificarcontactoAJAX(".$info[0].")'")."
	
	<div id='bannerIMG'> 
	 ".$banner->cargar_imagenEditar('contacto')."
	</div>";
		$cont++;
	}
	echo $caja;	?>
	
</div>
	
	<div id = 'agregarServicio'>
		
		</div>
	<div id = "comentarios">

   <?php
	 		$caja="";
			$cont=0;
     

			foreach ($contacto->obtener_comentario() as $info ) {

						$caja.="<div class = 'infoComentarios' id = 'Coment'>

    					<h2 id = 'nombre2'>".$info[1]."</h2>
						<h3 id = 'correo'>".$info[2]."</h3>
              <p id = 'comentario2'>".$info[3]."</p>

              

            </div>";


						$cont++;

			}
			echo $caja;

 ?>

  </div>
	</form>
		 </div>

		 	 
	<footer> <!-- Barra inferior del sitio -->
	  Copyright &reg; <script type="text/javascript">document.write(new Date().getFullYear());</script> Laura Venegas  y Yisakh Castro - Todos los derechos reservados.
	</footer>

     </body>
</html>



 <?php


 ?>
