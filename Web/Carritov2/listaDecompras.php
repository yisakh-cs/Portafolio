<?php
session_start();
//manejamos en sesion el nombre del usuario que se ha logeado
require_once('Connections/tienda.php');

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>TEACH ONLINE , En linea con tus propósitos|TEACH ONLINE , En linea con tus propósitos</title>
<link href="css/estilo2.css" type="text/css" rel="stylesheet" media="all" />
<link rel="stylesheet" href="css/slide.css" type="text/css" media="screen" />
<script src="jquery-1.7.1.min.js" type="text/javascript" charset="utf-8"></script>
<script src="js/jquery-1.3.2.min.js" type="text/javascript"></script>
	<!-- Sliding effect -->
	<script src="js/slide.js" type="text/javascript"></script>

	<style>
	table {
	  font-family: arial, sans-serif;
	  border-collapse: collapse;
	  width: 100%;
	}

	td, th {
	  border: 1px solid #dddddd;
	  text-align: left;
	  padding: 8px;
	}

	tr:nth-child(even) {
	  background-color: #dddddd;
	}
	</style>

</head>
<body>
<div id="toppanel">
	<div id="panel">
		<div class="content clearfix">
			<div class="left">
				<h1>Bienvendio a Teach Online</h1>
				<h2>Web especializada en cursos online</h2>
				<p class="grey">Gracias por visitarnos, si aun no es miembro puede registrarse en este panel.Y si ya es miembro puede entrar con sus datos correspondientes!</p>

			</div>
			<div class="left">
				<!-- Login Form -->
			 <?php
          if ( ! empty($_SESSION["usuario"]) ) {
            echo '<a href="cerrar_sesion.php">Cerrar Sesion</a> ';
          } else {
            echo '
            <form class="clearfix" action="index2.php" method="post">
          <h1>Miembros</h1>
          <label class="grey" for="log">Usuario:</label>
          <input class="field" type="text" name="log" id="log" value="" size="23" />
          <label class="grey" for="pwd">Contraeña:</label>
          <input class="field" type="password" name="pwd" id="pwd" size="23" />
                <label><input name="rememberme" id="rememberme" type="checkbox" checked="checked" value="forever" /> &nbsp;Recordarme</label>
              <div class="clear"></div>
          <input type="submit" name="submit" value="Entrar" class="bt_login" />
          <a class="lost-pwd" href="#">¿A perdido su contraseña?</a>
        </form>
            ';
          }
        ?>
			</div>

		</div>
</div> <!-- /login -->

	<!-- The tab on top -->
	<div class="tab">
		<ul class="login">
			<li class="left">&nbsp;</li>
			<li>Hola <?php if (!isset($nickname));?></li>
			<li class="sep">|</li>
			<li id="toggle">
        <a id="open" class="open" href="#"><?php if (isset($_SESSION["usuario"])) {
      echo "Entrar";}else {echo "Salir"; } ?></a>
        <a id="close" style="display: none;" class="close" href="#">Cerrar Panel</a>
      </li>
			<li class="right">&nbsp;</li>
		</ul>
	</div> <!-- / top -->

</div>
<div id="total">


   	<div id="contenido">
	    	<div id="cabecera">
            <div id="nav">
    	<ul>
        <li><a href="index2.php" class="main">Inicio</a></li>
        <li><img src="img/naviseparator.gif" alt="" width="40" height="13" /></li>
         <li><a href="nosotros.php" class="main">Nosotros</a></li>
         <li><img src="img/naviseparator.gif" alt="" width="40" height="13" /></li>
          <li><a href="categorias.php" class="main">Cursos</a></li>

          <li><img src="img/naviseparator.gif" alt="" width="40" height="13" /></li>
           <li><a href="contacto.php" class="main">Contacto</a></li>
           <li><img src="img/naviseparator.gif" alt="" width="40" height="13" /></li>
           <li><a href="carrito.php" class="main">Carrito</a></li>


        </ul>
	</div>
            	<div class="FL"><img src="img/carrito.jpg"/></div>
                <div class="FR"></div>
                <div class="categorias">
 <br>
    <p style=" text-align:center; margin-bottom:10px; clear:both;"><br /><a href="javascript:history.back(1)">ATRAS</a>
      <p><?php echo $_SESSION['idusuario'] ?></p>
      <br>
      <?php
      //llamar datos de tabla compra, y obtener el producto
      mysqli_select_db($tienda,$database_tienda);
       $id=$_SESSION['idusuario'];
  //  $consulta="SELECT * FROM compra  where idusuario=$id";
	$consulta="SELECT * FROM productos INNER JOIN compra ON productos.id_producto=compra.id_producto WHERE compra.idusuario=$id";
        $result=mysqli_query($tienda,$consulta);
        $filasn= mysqli_num_rows($result);


				$about=array(); //matriz
				$row=0;

while($rowsresult=mysqli_fetch_array($result)){
$about[$row][0]=$rowsresult[0];
$about[$row][1]=$rowsresult[1];
$about[$row][2]=$rowsresult[2];
$about[$row][3]=$rowsresult[3];
$about[$row][4]=$rowsresult[4];
$about[$row][5]=$rowsresult[5];
$about[$row][6]=$rowsresult[6];

$row++;
}

       ?>
			 </div>

		 </div>


    <table>
      <tr>
        <th>Nombre</th>
        <th>Fabricante</th>
        <th>Precio</th>
				<th>Descripcion</th>
      </tr>

<?php

while($filasn>0){
 ?>
<tr>

    <td width="27%"><?php echo $about[$filasn-1][2]; ?></td>
    <td width="18%"><?php echo $about[$filasn-1][3];?></td>
    <td width="37%"><?php echo$about[$filasn-1][4];?></td>
		  <td width="37%"><?php echo$about[$filasn-1][6];?></td>

  </tr>

<?php
$filasn--;
}

?>
</table>



	</div>

    <div id="pie">
    <p>Copyright 2020 - Tus Datos|Copyright 2020 - Tus Datos</p>
    </div>

</body>
</html>
