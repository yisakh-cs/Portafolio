<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?= base_url()?>css/estilos.css">
</head>

 <table id = "table" class="table table-striped">

  <thead class="thead-dark"><tr><th scope="col">Grado de Estudio</th><th scope="col">Experiencia</th><th scope="col">Descripcion</th></th><th scope="col">Idioma</th><th scope="col"></th></tr></thead>
  <tbody>

<?php

    ?>
        <!-- Declara los campos de la tabla llenados con los valores de la consulta del modelo -->
             <tr><td scope="row"><?php echo $item['gradoEstudio']; ?></td>
             <td sscope="row"><?php echo $item['experiencia']; ?></td>
             <td scope="row"><?php echo $item['idioma']; ?></td>
             <td scope="row"><?php echo $item['aspectosGenerales']; ?></td>

         </td>
             </tr>
