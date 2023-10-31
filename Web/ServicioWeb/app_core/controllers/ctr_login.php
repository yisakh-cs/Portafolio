<?php

require_once(__MDL_PATH."mdl_login.php"); 
require_once(__LIB_PATH."message.php");

class CTR_login
{
	private $login;
	var $mssg;
	
	public function __construct()
	{
		$this->login=new MDL_login();
		$this->mssg = new Message();
	}
	
	//Si se presiona el boton Entrar en el login
	function btn_iniciarSesion()
	{
		
		$usuario = trim($_POST['txt_usuario']);
		$contraseña = trim($_POST['txt_contraseña']);
		
		$this->login->login($usuario, $contraseña);
		
		//Si existe el usuario
		if($this->login->conn_status)
		{
			$_SESSION['MYAPP']="YES";
			$_SESSION['id']=$this->login->get_id();
			$_SESSION['nombreUsuario'] = $this->login->get_nombreUsuario();
			$_SESSION['foto']=$this->login->get_foto();
			echo "<script>$('#login').css('display','none');location.href='';</script>";
		}
		else
		{
			$_SESSION['MYAPP'] = "NO";
			$this->mssg->show_message("","warning","fail_auth");
		}
	}

	function btn_logout()
	{
		if(isset($_POST['btn_logout']))
		{
			$this->login->logout();
			echo"<script>location.href='';</script>";
		}
	}
	
	function cargar_view() 
	{
		require_once(__VWS_PATH."login.php");
	}
	function btn_registrar()
{
  $user= $_POST['txt_usuario'];
  $nom= $_POST['txt_nombre'];
  $clave= $_POST['txt_contraseña'];
  $correo= $_POST['txt_correo'];

		 //Parte para la insercion de archivo
		$nombre_img = $_FILES['url_foto']['tmp_name'];
	  	$tipo = $_FILES['url_foto']['type'];
	  	$tamano = $_FILES['url_foto']['size'];
		$nombre_encrip = md5($nombre_img).".jpg";
		$this->login->insertar_user($user,$clave,$nom,$correo,$nombre_encrip);
        $directorio = $_SERVER['DOCUMENT_ROOT'].'/ProyectoI/app_core/resources/images/';
        $subido = move_uploaded_file($_FILES['url_foto']['tmp_name'],$directorio.$nombre_encrip.'.jpg');
	 
      unset($_POST{'enviar'});
}
	function cargar_viewRegistro()
	{
		require_once(__VWS_PATH."registrousuario.php");
	}

}
?>