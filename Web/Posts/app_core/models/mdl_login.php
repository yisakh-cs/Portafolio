<?php

//Requerimos de la conexion a la BD
require_once(__CON_PATH."conexion.php");

class MDL_login
{
	var $conexion;
	var $conn_status;
	var $username;
	var $userid;
	var $userphoto;

	function __construct()
	{
		$this->conexion= Conexion::getInstance(); //Patrón de diseño Singleton
	}

	function get_username()
	{
		return $this->username;
	}

	function get_userid()
	{
		return $this->userid;
	}

	function get_userphoto()
	{
		return $this->userphoto;
	}

	public function login($user,$pssw)
	{
		$this->conexion->consulta("SELECT tbl_users.id, tbl_users.usuario,tbl_users.foto FROM tbl_users WHERE usuario = '".$user."'AND clave=md5('".$pssw."')");

		$fila = $this->conexion->extraer_registro();

		//Si hay almenos un registro nos autenticamos
		//Si hay mas de un dato en la fila obtenida
		//quiere decir que se completo la consulta con datos reales

		if($fila)
		{
			$this->conn_status=true;
			$this->userid=$fila[0]; //id
			$this->username=$fila[1]; //nombre de usuario
			$this->userphoto=$fila[2]; //foto (nombre de la foto)
		}
		else
		{
			$this->conn_status=false;
		}
	}

	public function logout()
	{
		unset($this->conexion); //Vaciamos la conexion
		$this->conn_status=false; //estado de conexion falso
		unset($_SESSION['MYAPP']); //Vaciamos la sesion actual
	}

	public function signup($user,$pass,$foto)
	{
		$this->conn_status=true;
		$passw=MD5($pass);
	    $this->conexion->consulta("INSERT INTO tbl_users(usuario,clave,foto)
	    VALUES('".$user."','".$passw."','".$foto."')");
	}
	public function editar_perfil($user,$pass,$foto)
	{
		$passw=MD5($pass);
		$this->conexion->consulta("	UPDATE tbl_users SET usuario ='".$user."',clave ='".$passw."', foto ='".$foto."' WHERE tbl_users.id ='.$_SESSION['USERID'].'");
		}
		public function eliminar_user()
		{
				$this->conexion->consulta("DELETE FROM tbl_users WHERE  id='. $_SESSION['USERID'] . '" );
		}
}
?>
