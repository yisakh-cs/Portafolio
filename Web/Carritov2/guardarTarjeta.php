<?php 
session_start();
require_once('Connections/tienda.php'); 

$nombre = $_POST['owner'];
$cvv = $_POST['cvv'];
$numero = $_POST['cardNumber'];
$expiration = $_POST['expiration-date'];
            
    mysqli_query($tienda, "INSERT INTO tarjetas (nombre,cvv, numeroTarjeta, expiration ) VALUES ('$nombre','$cvv','$numero','$expiration')");
         


      //Parte para agregar en la tabla de compra
		$usuario = $_SESSION["usuario"];

        $compras = $_SESSION['compras'];
        $mensaje="";
        $total=0;
        $consulta= mysqli_query($tienda, "SELECT idusuario FROM usuario where nickname = '$usuario'");
			     $result= mysqli_num_rows($consulta);
        for($i=0;$i<=count($compras)-1;$i++){
            if($compras[$i]!=NULL){
                 $nombre = $compras[$i]['nombre'];

			     $consulta2= mysqli_query($tienda, "SELECT id_producto FROM productos where nombre = '$nombre'");
			     $result2= mysqli_num_rows($consulta2);
			     mysqli_query($tienda, "INSERT INTO compra (id_producto, idusuario, medioPago ) VALUES ('$result2','$result', 'tarjeta')");
			    } 

		}

 header("location:resumenc_compra.php");

?>