<?php

	include 'FootballData.php';
  $fechaInicial = $_POST['fechaI'];
  $fechaFinal = $_POST['fechaF'];

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

          <table class="table table-bordered">
          	<thead>
          		<tr class="darkgreenbox">
		            <th>Competición</th>
                <th>Local</th>
		            <th>Visitante</th>
		            <th>Resultado Local</th>
		            <th>Resultado Visitante</th>
                <th>Día del partido</th>
		            <th>Ganador</th>

		        </tr>
		    </thead>

		        <?php
                echo "<p><hr><p>";
                // Mostrar los partidos en un rango de 10 dias
                
                $response = $api->buscarPartidosForRangoFecha($fechaInicial, $fechaFinal);
            ?>
            <h3>Lista de partidos</h3>


                    <?php foreach ($response->matches as $match) { ?>

                    <tbody>
	                    <tr>
	                        <td><?php echo $match->homeTeam->name; ?></td>
	                        <td><?php echo $match->awayTeam->name; ?></td>
	                        <td><?php echo $match->score->fullTime->homeTeam; ?></td>

	                        <td><?php echo $match->score->fullTime->awayTeam; ?></td>
                          <td><?php echo $match->utcDate; ?></td>
	                        <td><?php echo $match->score->winner; ?></td>

	                    </tr>
                    </tbody>
                    <?php } ?>


        </div>
        <div class="form-actions">
        	 <a class="btn" href="index.php">Volver</a>
		 </div>
      </div>
    </div>
  </body>
</html>
