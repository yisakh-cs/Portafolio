<?php

require_once(__MDL_PATH."mdl_twitter.php"); //Requerimos del modelo
require_once(__LIB_PATH."message.php");
require_once(__LIB_PATH."html.php");
class CTR_twitter
{
	private $postdata;
	var $mssg;
	var $html;
	
	public function __construct() //Constructor
	{
		$this->postdata=new MDL_twitter();
		$this->mssg = new Message();
		$this->html = new HTML();
		
	}
	
	
	public function obtener_tweets()
	{
		return $this->postdata->get_tweets();
	}
	
	//Si se presiona el botón Publicar
	function btn_save_click()
	{
		$postinfo=array();
		//removemos espacios y etiquetas html, además sustituimos comillas simples
		//por dobles para prevenir SQL INJECTION
		$postinfo[0]=strip_tags(trim(str_replace("'","\"", $_POST['tweet'])));
		
		$this->postdata->insertar_post($postinfo);
		$this->mssg->show_message("","success","success_insert");
		
	}
	
	 function cargar_Post()
	{
        	$postinfo = $_GET['data'];
			echo '<script>console.log("'.$postinfo.'"")</script>';
            return $this->postdata->buscartweet($postinfo);
	}
	function btn_eliminarP()
	{
	$postinfo = $_POST['cod'];
	$this->postdata->eliminar_post($postinfo);
	}
	
	
	function cargar_view()
	{
		//Incluimos literalmente la vista correspondiente
		require_once(__VWS_PATH."twitter.php");
	}
	public function buscar_posts()
	{
		$caja_post = "";
		$contposts=0;
    	foreach ($this->cargar_Post() as $value) {
   
			if($value[3] == $_SESSION['USERID'])
			{
				$caja_post.= "<div class='post_block'>
                                  <span class='post_text' id='post_" . $value[0] . "'>
                                      <div class='published_date'>
                                          <span>Publicado el " . $value[2] . " por " . $value[4] ."</span>
                                      </div>
                                  </span>
   
   									<div id = 'responder'>
                                    " .$this->html->html_link_tag('Responder', 'btn_responder', 'btn_responder', '', '', 'resp', '') ." 

                                    </div>
                                    <div id = 'btnMod'>
                                    " .$this->html->html_input_button("submit", 'btn_modificar', 'btn_modificar', 'btn_modificar', 'Modificar', '','',"onclick=''") ."
                                    </div>
									
                                    <div id = 'btneli'>
                                     " .$this->html->html_input_button("button", 'btn_eliminar', 'btn_eliminar', 'btn_eliminar', 'Eliminar', '','',"onclick='eliminarAJAX(".$value[0].")'")."
                                    </div>
									<div id='contentpost".$contposts."'>
                                      " .$this->html->html_img_tag(__RSC_PHO_HOST_PATH . $value[5], "userphoto", "imgpost", "photo", "width=50") . "
                                      <div class='post_detail'>" . $value[1]  . "</div><br/>
                                  </div>
                             </div>";								
			}
			else
			{
				
				 	$caja_post.= "<div class='post_block'>
                                  <span class='post_text' id='post_" . $value[0] . "'>
                                      <div class='published_date'>
                                          <span>Publicado el " . $value[2] . " por " . $value[4] ."</span>
                                      </div>
                                  </span>		
								  <div id = 'responder'>
                                    " .$this->html->html_link_tag('Responder', 'btn_responder', 'btn_responder', '', '', 'resp', '') ." 

                                    </div>
									
									<div id='contentpost".$contposts."'>
                                      " . $this->html->html_img_tag(__RSC_PHO_HOST_PATH . $value[5], "userphoto", "imgpost", "photo", "width=50") . "
                                      <div class='post_detail'>" . $value[1]  . "</div><br/>
                                  </div>
                             </div>";
			 
				 				                                                 
         	}
			$contposts++;	
		}
		return $caja_post;

    }
	
	public function cargar_tweet()
	{
			$caja_post = "";
			$contposts=0;
		    foreach ($this->obtener_tweets() as $value) {
      	
			
			if($value[3] == $_SESSION['USERID'])
			{
				$caja_post.= "<div class='post_block'>
                                  <span class='post_text' id='post_" . $value[0] . "'>
                                      <div class='published_date'>
                                          <span>Publicado el " . $value[2] . " por " . $value[4] ."</span>
                                      </div>
                                  </span>
   
   									<div id = 'responder'>
                                    " .$this->html->html_link_tag('Responder', 'btn_responder', 'btn_responder', '', '', 'resp', '') ." 

                                    </div>
                                    <div id = 'btnMod'>
                                    " .$this->html->html_input_button("submit", 'btn_modificar', 'btn_modificar', 'btn_modificar', 'Modificar', '','',"onclick=''") ."
                                    </div>
									
                                    <div id = 'btneli'>
                                     " .$this->html->html_input_button("button", 'btn_eliminar', 'btn_eliminar', 'btn_eliminar', 'Eliminar', '','',"onclick='eliminarAJAX(".$value[0].")'")."
                                    </div>
									<div id='contentpost".$contposts."'>
                                      " . $this->html->html_img_tag(__RSC_PHO_HOST_PATH . $value[5], "userphoto", "imgpost", "photo", "width=50") . "
                                      <div class='post_detail'>" . $value[1]  . "</div><br/>
                                  </div>
                             </div>";								
			}
			else
			{
				
				 	$caja_post.= "<div class='post_block'>
                                  <span class='post_text' id='post_" . $value[0] . "'>
                                      <div class='published_date'>
                                          <span>Publicado el " . $value[2] . " por " . $value[4] ."</span>
                                      </div>
                                  </span>		
								  <div id = 'responder'>
                                    ".$this->html->html_link_tag('Responder', 'btn_responder', 'btn_responder', '', '', 'resp', '') ." 

                                    </div>
									
									<div id='contentpost".$contposts."'>
                                      " . $this->html->html_img_tag(__RSC_PHO_HOST_PATH . $value[5], "userphoto", "imgpost", "photo", "width=50") . "
                                      <div class='post_detail'>" . $value[1]  . "</div><br/>
                                  </div>
                             </div>";
			 
				 				                                                 
         	}
			$contposts++;	
		}
		return $caja_post;
	}
		

}
?>