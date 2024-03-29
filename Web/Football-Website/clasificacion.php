<?php

	include 'FootballData.php';

$item=$_POST['ann'];
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">



    <title>La Liga</title>

    <!-- CSS -->
    <link href="resources/css/bootstrap.min.css" rel="stylesheet">
     <link href="resources/css/styles.css" rel="stylesheet">


  </head>

  <body class="inicio">
      <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand">La Liga</a>
          </div>
          <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <li class="active"><a href="index.php">Inicio</a></li>


             <li><a href="noticias.php">Noticias</a></li>
            </ul>

          </div>
        </div>
      </nav>

	<!-- Container -->
	<div class="container">

      <?php
            // Crear una instancia de la API
            $api = new FootballData();
            echo "<p><hr><p>";
      ?>

      <div class="row">
        <div class="col-lg-12">
          <h2>Clasificación</h2>
          <table class="table table-bordered">
          	<thead>
          		<tr class="darkgreenbox">
		            <th>Posición</th>
		            <th>Equipo</th>
		            <th>Gol Diferencia</th>
                <th>Puntos</th>
		        </tr>
		    </thead>

        <?php
            $standing = $api->buscarClasifiByCompeticion($item);
            $competicion = $standing->competition;
        ?>
        <h3><?php echo $competicion->name; ?></h3>
		    <?php foreach ($api->buscarClasifiByCompeticion($item)->standings as $standing) {


              if ($standing->type == 'TOTAL') {
                  foreach ($standing->table as $standingRow) {
        ?>
			 	<tbody>
			        <tr>
                      <td><?php echo $standingRow->position; ?></td>
                      <td><?php echo $standingRow->team->name; ?></td>
                      <td><?php echo $standingRow->goalDifference; ?></td>
                      <td><?php echo $standingRow->points; ?></td>
                    </tr>
                    <?php }}} ?>
                    <tr>
                    </tr>

				</tbody>

	      </table>
        </div>
        <div class="form-actions">
        	 <a class="btn" href="index.php">Volver</a>
		 </div>
   	  </div>
    </div>
  </body>
</html>
