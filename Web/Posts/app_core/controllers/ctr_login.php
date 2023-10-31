<?php

//Archivo contralador que contiene la llamada de las acciones de la vista (LOGIN,LOGOUT)

require_once(__MDL_PATH."mdl_login.php"); //requerimos del modelo
require_once(__LIB_PATH."message.php");

class CTR_login
{
	private $login_exec;
	var $mssg;

	public function __construct()
	{
		$this->login_exec=new MDL_Login();
		$this->mssg = new Message();
	}

	//Si se presiona el boton Entrar en el login
	function btn_login_click()
	{

		//trim() para remover caracteres de espacio
		$username = trim($_POST['txt_user']);
		$password = trim($_POST['txt_pssw']);

		$this->login_exec->login($username, $password);

		//Si nos autenticamos correctamente
		if($this->login_exec->conn_status)
		{
			$_SESSION['MYAPP']="YES";
			$_SESSION['USERID']=$this->login_exec->get_userid();
			$_SESSION['USERNAME'] = $this->login_exec->get_username();
			$_SESSION['USERPHOTO']=$this->login_exec->get_userphoto();
			//redireccionamos al index
			//header("Location:"); //Forma alternativa de redireccionar con PHP
			//Forma alternativa de redireccionar con JS
			echo "<script>$('#login').css('display','none');location.href='';</script>";
		}
		else
		{
			$_SESSION['MYAPP'] = "NO";
			$this->mssg->show_message("","warning","fail_auth");
		}
	}
	//No sabia que escuchaba LOL
	//Si se presiona el boton de salir(logout)
	function btn_logout_click()
	{
		if(isset($_POST['btn_logout']))
		{
			$this->login_exec->logout();
			//redireccionamos la index
			//header("location:"); //Forma alternativa de redireccionar con JS
			echo "<script>location.href='';<script>"; //Forma alternativa de redireccionar
		}
	}

	function cargar_view() //Siempre va en el controlador.
	{
		//Incluimos literalmente la vista correspondiente
		require_once(__VWS_PATH."login.php");
	}

	function cargar_vista_usuario()
  {
		require_once(__VWS_PATH."usuario.php");
  }
 	function cargar_vista_editarusuario()
  {
		require_once(__VWS_PATH."edituser.php");
  }

	function btn_sign()
	{
 	$username=trim($_POST['txt_user']);
 	$password=trim($_POST['txt_pssw']);
	$foto = base64_encode('cmb');//nombre de elemto para imagen

 	$this->login_exec->signup($username,$password,$foto);
 	$this->mssg->show_message("","success","success_insert");
}
function btn_modificar()
	{
		$username = $_POST['txt_user'];
		$clave = $_POST['txt_pssw'];
		$foto = $_POST['cmb'];
		$this->postdata->editar_perfil($username,$clave,$foto);
	}
function btn_eliminar_click(){
	 $this->postdata->eliminar_user();


}
}
?>
