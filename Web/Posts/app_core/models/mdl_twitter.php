<?php
	
   //requerimos de la conexion a la BD
   require_once(__CON_PATH . "conexion.php");

	class MDL_twitter{ 
	
		private $conexion;
		 	 
		public function __construct(){
			$this->conexion = Conexion::getInstance(); //Patrón de diseño Singleton	   
		} 	
		
		function buscartweet($dato){


            $this->conexion->consulta("SELECT tbl_posts.id, tbl_posts.post,tbl_posts.date,
                                              tbl_posts.user_id,tbl_users.usuario ,tbl_users.foto 
                                       FROM tbl_posts, tbl_users
                                       WHERE tbl_posts.user_id = tbl_users.id AND tbl_posts.post LIKE '$dato%' 
                                       ORDER BY tbl_posts.id DESC");
            $posts=array(); //matriz
            $num_fila=0;


            while ($fila = $this->conexion->extraer_registro()) {
                  $posts[$num_fila][0] = $fila[0]; //id
                  $posts[$num_fila][1] = $fila[1]; //detalle del post
                  $posts[$num_fila][2] = $fila[2]; //fecha
                  $posts[$num_fila][3] = $fila[3]; //id del usuario
                  $posts[$num_fila][4] = $fila[4]; //nombre del usuario
                  $posts[$num_fila][5] = $fila[5]; //foto del usuario
                  $num_fila++;
            }

            return $posts;

        }
		//Función para obtener registros
	    public function get_tweets(){ 

			$this->conexion->consulta("SELECT tbl_posts.id, tbl_posts.post,tbl_posts.date,
											  tbl_posts.user_id,tbl_users.usuario ,tbl_users.foto 
									   FROM tbl_posts, tbl_users
									   WHERE tbl_posts.user_id = tbl_users.id
									   ORDER BY tbl_posts.id DESC");

			$posts=array(); //matriz
			$num_fila=0;

			while ($fila = $this->conexion->extraer_registro()) {
		          $posts[$num_fila][0] = $fila[0]; //id
		          $posts[$num_fila][1] = $fila[1]; //detalle del post
		          $posts[$num_fila][2] = $fila[2]; //fecha
		          $posts[$num_fila][3] = $fila[3]; //id del usuario
		          $posts[$num_fila][4] = $fila[4]; //nombre del usuario
		          $posts[$num_fila][5] = $fila[5]; //foto del usuario
		          $num_fila++;
			}

			return $posts;
		}
		

				
		public function eliminar_post($datospost)
		{
        $this->conexion->consulta("DELETE FROM tbl_posts WHERE  id='$datospost'" );
		}
		//Función para insertar registros

	    public function insertar_post($datospost = array()){ 
	    	
			$this->conexion->consulta("INSERT INTO tbl_posts (post, date, user_id) 
									   VALUES ('" . $datospost[0] . "','" . 
									   		   date('Y-m-d H:i:s') . "'," . $_SESSION['USERID'] . ")");
	    }


	}
?>

