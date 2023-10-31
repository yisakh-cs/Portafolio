
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
    <h1 id = "EditarPerfiles">Editar Oferta</h1>
                        
                            <?php $inf=$this->session->all_userdata();?>
                            <?php echo form_open("Ofertas/editarOfertasEmpresa");?>

                            <label for="" class = "Curriculum">Categoria:</label><br/>
                            <select name="categoria" id= "categoria" class="btn btn-default dropdown-toggle">
                            <?php

                                $category = $this->login_model->get_category();

                            foreach ($category as $key): ?>
                                <option value="<?php echo $key['id']?>"><?php echo $key['categoria'];?></option>
                            <?php endforeach; ?>
                            </select>
                        
                            <input class="form-control" type="input" id = "idUsuario" name="idUsuario" value = "<?php echo $inf['id'] ?>">
                            <input class="form-control" type="input" id = "idOfertas" name="idOfertas" value="<?php echo $item['id']; ?>">
                            <label for="" class = "Curriculum">Puesto:</label>
                            <input class="form-control" type="input" id = "puesto" name="puesto" value="<?php echo $item['nombrePuesto']; ?>"><br/>
                            <label for="" class = "Curriculum">Descripcion:</label>
                            <input class="form-control" type="input" id = "descripcion" name="descripcion" value="<?php echo $item['descripcion']; ?>" ><br/>
                            
                            <label for="" class = "Curriculum">Fecha de Oferta:</label><br/>
                            <input type="date" name="dateOferta" id = "dateOferta" class="fecha" value="<?php echo $item['fechaOferta']; ?>"><br/>
                            <label for="" class = "Curriculum">Duracion Contrato:</label>
                            <input class="form-control" type="input" id = "contrato" name="contrato" value="<?php echo $item['duracionContrato']; ?>"><br/>
                            <label for="" class = "Curriculum">Horario:</label>
                            <input class="form-control" type="input" id = "horario" name="horario" value="<?php echo $item['horario']; ?>"><br/>
                            <label for="" class = "Curriculum">Salario:</label>
                            <input class="form-control" type="input" id = "salario" name="salario" value="<?php echo $item['salario']; ?>"><br/>
                            <label for="" class = "Curriculum">Ubicacion:</label>
                            <input class="form-control" type="input" id = "canton" name="canton" placeholder="Pais/Provincia/Canton/Distrito" value="<?php echo $item['ubicacion']; ?>"><br/>
                            <input class="form-control" type="input" id = "estado" name="estado" value="<?php echo $item['estado']; ?>"><br/>
                         <br>

                         <input class="form-control  btn btn-success" type="submit" id = "Enviar" name="submit" value="Enviar Curriculum" />
                         <?php echo form_close(); ?>
</div>
</body>