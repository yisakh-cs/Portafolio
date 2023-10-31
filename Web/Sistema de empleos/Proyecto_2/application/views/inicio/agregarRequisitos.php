
 <!-- Validamos los errores-->
<?php echo validation_errors(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Work only system</title>


     <!-- Llamamos los estilos a utilizar y funciones de bootstrp js-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url()?>css/estilos.css">
    <link href="https://fonts.googleapis.com/css?family=Merriweather&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

</head>
<body>

<div class="container">    
                                                    <!-- Declaramos los input -->
                            <br/><br/>
                                                            <h2>Agregar Requisitos</h2>
        <?php echo form_open("Ofertas/AgregarRequerimientosEmpresa");?>
                            <input class="form-control" type="input" id = "idOferta" name="idOferta" value= "<?php echo $item['id']; ?>"><br/>
                            <label for="" class = "Curriculum">Grado de Escolaridad:</label>
                            <input class="form-control" type="input" id = "gradoEstudio" name="gradoEstudio" ><br/>
                            <label for="" class = "Curriculum">Experiencia:</label>
                            <input class="form-control" type="input" id = "experiencia" name="experiencia" ><br/>
                            
                            <label for="" class = "Curriculum">Idioma:</label><br/>
                             <input class="form-control" type="input" id = "idioma" name="idioma"><br/>
                            <label for="" class = "Curriculum">Aspectos Generales:</label>
                            <input class="form-control" type="input" id = "AspectGeneral" name="AspectGeneral"><br/>
                            <input class="form-control  btn btn-success" type="submit" id = "AgregarRequisitos" name="submit" value="Agregar Requisitos" />
        <?php echo form_close(); ?>

</div>
</body>