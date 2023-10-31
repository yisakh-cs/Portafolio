<?php
require_once(__CON_PATH."conexion.php");

class MDL_login
{
	var $conexion;
	var $conn_status;
	var $nombreUsuario;
	var $id;
	var $foto;
	
	function __construct()
	{
		$this->conexion= Conexion::getInstance(); 
	}
	
	function get_nombreUsuario()
	{
		return $this->nombreUsuario;
	}
	
	function get_id()
	{
		return $this->id;
	}
	
	function get_foto()
	{
		return $this->foto;
	}
	
	public function login($usuario,$contraseña)
	{
		$this->conexion->consulta("SELECT tbl_usuarios.id, tbl_usuarios.usuario,tbl_usuarios.clave, tbl_usuarios.nombre, tbl_usuarios.correo, tbl_usuarios.foto FROM tbl_usuarios WHERE usuario = '".$usuario."'AND clave=md5('".$contraseña."')");
		
		$row = $this->conexion->extraer_registro();
		
		//Si existe un registro nos reconocera
		if($row)
		{
			$this->conn_status=true;
			$this->id=$row[0]; //id
			$this->nombreUsuario=$row[1]; //nombre de usuario
			$this->clave=$row[2]; //clave
			$this->nombre=$row[3]; //nombre
			$this->correo=$row[4]; //correo
			$this->foto=$row[5]; //foto
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
	
	public function signup($usuario,$clave,$nombre,$correo,$foto)
	{		
		$this->conn_status=true;
		$contraseña=MD5($clave);
	    $this->conexion->consulta("INSERT INTO tbl_usuarios(usuario,clave,nombre,correo,foto)
	    VALUES('".$usuario."','".$contraseña."','".$nombre."','".$correo."','".$foto."')");
	}
	public function insertar_user($usuario,$clave,$nombre,$correo,$img)
	{
		$contraseña=MD5($clave);
    	$this->conexion->consulta("INSERT INTO tbl_usuarios(usuario,clave,nombre,correo,foto)
    	VALUES('".$usuario."','".$contraseña."','".$nombre."','".$correo."','".$img."')");

	}
	
	

}
?>

