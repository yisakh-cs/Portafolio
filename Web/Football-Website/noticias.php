<?php 
  include 'FootballData.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  
  <title>Noticias deportiva</title>
  
  <!-- CSS -->
  <link href="resources/css/bootstrap.min.css" rel="stylesheet">
  <link href="resources/css/blog.css" rel="stylesheet">
  

</head>

<body>
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

            </ul>
            
          </div>
        </div>
      </nav>

    <!-- Page Content -->
    <div class="container">

        <?php
            // Crear una instancia de la API
           $api = new FootballData();
           echo "<p><hr><p>";
       ?>
        <div class="row">

            <div class="col-lg-12">
          <h2>Lista de noticias</h2>
          <table class="table table-bordered">
            <thead>
              <tr class="darkgreenbox">
                <th>Nombre articulo</th>
                <th>Autor</th>
                <th>Descripcion</th>
                <th>Publicado</th>
                <th>Url</th>
            </tr>
        </thead>
                
        
        <tbody>
               <?php $articulo = $api->mostrarNoticias(); 
                 foreach ($articulo as $articulos){ 
                      
        ?>
        <tbody>
              <tr>
                      <td><?php echo $articulos->source->name; ?></td>
                      <td><?php echo $articulos->author; ?></td>
                      <td><?php echo $articulos->description; ?></td>
                      <td><?php echo $articulos->publishedAt; ?></td>
                      <td><li><a href=<?php echo $articulos->url; ?>>Url</a></li></td>
                      
              </tr>
                    <?php } ?>
              <tr>
              </tr>

        </tbody>
      
        </table>
        </div>

        </div>

      <div class="form-actions">
           <a class="btn" href="index.php">Volver</a>
     </div>
      </div>
</body>
</html>
