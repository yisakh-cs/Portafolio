<?php
   require_once(__LIB_PATH . "html.php");


   $html = new HTML();
   $servicio = new CTR_servicio(); //variable del Controlador

   if(isset($_POST['btn_agregarServicio1'])){
           $servicio->insertarServicio();
           echo "hola";
       }
    //Evento click (PUBLICAR) se activa al hacer click en el boton via POST


?>
<div id="agregarServicio">
  <?php echo $html->html_form_tag("frm_agregarServicio", "" ,"","post2");  ?>
  <h1>Agregar Servicio</h1>
    <div id='contenidoAgreSer'>
      <?php echo $html->html_input_text("txt_nombreServicio","txt_nombreServicio","cajatexto",64,"","",
                                  "Nombre de servicio",1,"","placeholder='Nombre de Servicio'",""); ?>
      <br>
      <textarea name="txt_contenidoServicio" placeholder="Descripcion"class='cajatexto'id="txt_contenidoServicio" rows="8" cols="40"></textarea>
      <br>
      <?php echo $html->html_input_button('button', 'btn_agregarServicio1', 'btn_agregarServicio1', 'botonAdm', 'Agregar', '', '', "onclick='insertarServicio()'"); ?>
<br>
<br><br>
    </div>
  <?php echo $html->html_form_end(); ?>
</div>
