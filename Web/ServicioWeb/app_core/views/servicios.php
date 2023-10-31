<?php
   require_once(__LIB_PATH . "html.php");
   require_once(__CTR_PATH."ctr_banner.php");

   $html = new HTML();
   $servicios= new CTR_servicios(); 
   $banner = new CTR_banner(); 


?>
 <div id = 'banner_servicio'>
<?php $banner->cargar_imagen("servicios");?>
</div>
<div id=message1></div>
 <div id="main_servicios" class = "main_servicios">

   <?php
	 		$caja="";
			$cont=0;
     

			foreach ($servicios->obtener_mas() as $info ) {

						$caja.="<div class = 'infoServicio' id = 'Serv'>

    					<h2>".$info[1]."</h2>
              <p>".$info[2]."
              <span id='p".$info[0]."'>. . .</span>

              <span id='m".$info[0]."' style='display:none'>".$info[3]."</span>

            </p>
              <button onclick='vermas(".$info[0].")' id='b".$info[0]."' class='ver'>Read more</button>
            </div>";


						$cont++;

			}
			echo $caja;

 ?>

  </div>


<script>

function vermas(id) 
{
var puntos = document.getElementById('p'+id);
var moreText = document.getElementById('m'+id);
var btnText = document.getElementById('b'+id);

if (puntos.style.display === "none") {
  puntos.style.display = "inline";
  btnText.innerHTML = "Leer más";
  moreText.style.display = "none";
} else {
  puntos.style.display = "none";
  btnText.innerHTML = "Leer menos";
  moreText.style.display = "inline";
}
}
</script>


<footer> <!-- Barra inferior del sitio -->
	  Copyright &reg; <script type="text/javascript">document.write(new Date().getFullYear());</script> Laura Venegas  y Yisakh Castro - Todos los derechos reservados.
	</footer>
