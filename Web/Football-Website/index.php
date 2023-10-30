

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Ramón Bailén Sánchez">

    <title>La Liga</title>

    <!-- CSS -->
    <link href="resources/css/bootstrap.min.css" rel="stylesheet">
    <link href="resources/css/styles.css" rel="stylesheet">

    <link href="resources/css/blog.css" rel="stylesheet">

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
              <li class="active"><a href="inicio.php">Inicio</a></li>

              <li><a href="noticias.php">Noticias</a></li>
            </ul>

          </div>

        </div>

      </nav>

     <!-- Jumbotron -->
      <div class="jumbotron">
      	<div class="container">
	      	<div class="text-center">
		        <h1>Liga de Fútbol</h1>
		        <p class="lead">Bienvenido a la página oficial de la mejor información de fútbol del mundo.</p>
		        <img alt="Logo de la Liga de Fútbol" src="resources/img/logo.png">
	      	</div>
      	</div>
      </div>

	<!-- Container -->
	<div class="container">
      <!-- Example row of columns -->
      <div class="row">
        <div class="col-lg-4">
          <h2>Clasificación por Equipos</h2>
            <form class="" action="clasificacion.php" method="post">
          <table class="table table-bordered">
          	<thead>
          		<tr class="darkgreenbox">


          			<th>Consultar clasificacion por año</th>
                <td><input type="text" name="ann" ></td>
              		        </tr>
		    </thead>

	      </table>
          <p><button name="btn_ann" class="btn btn-primary" type="submit">Ver información &raquo;</button></p>
            </form>
        </div>

        <div class="col-lg-4">
          <h2>Lista de equipo por competición de un año</h2>
            <form class="" action="equipos.php" method="post">
                <table class="table table-bordered">
                	<thead>
                		<tr class="darkgreenbox">

                			<th>Año</th>
                      <td><input type="text" name="equipos_ann" ></td>
                    		        </tr>
      		    </thead>

      	      </table>
                <p><button name="btn_ann2" class="btn btn-primary" type="submit">Ver información &raquo;</button></p>
            </form>
        </div>
        <div class="col-lg-4">
          <h2>Partidos por un rango de 10 días</h2>
          <form class="" action="partidos.php" method="post">


          <table class="table table-bordered">
          	<thead>
          		<tr class="darkgreenbox">
		            <th>fecha Inicio</th>
                  <td><input type="date" name="fechaI" ></td>
		            <th>Fecha final</th>
                  <td><input type="date" name="fechaF" ></td>
		        </tr>
		    </thead>

	      </table>
            <p><button name="btn_ann3" class="btn btn-primary" type="submit">Ver información &raquo;</button></p>

              </form>
       </div>

      </div>


    </div>
    <div class="portrait" id="portrait">


          <iframe src="https://www.scorebat.com/embed/" frameborder="0" width="600" height="760" allowfullscreen allow='autoplay; fullscreen' style="width:600px;height:760px;overflow:hidden;display:block;" class="_scorebatEmbeddedPlayer_"></iframe>
          <script>(function(d, s, id) {
          var js, fjs = d.getElementsByTagName(s)[0];
          if (d.getElementById(id)) return;
          js = d.createElement(s); js.id = id;
          js.src = 'https://www.scorebat.com/embed/embed.js?v=arrv';
          fjs.parentNode.insertBefore(js, fjs);
          }(document, 'script', 'scorebat-jssdk'));</script>

    </div>
  </body>
</html>
