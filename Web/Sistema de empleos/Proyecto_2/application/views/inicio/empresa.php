<?php if(!empty($this->session))
{
  if($this->session->flashdata("success"))
  {
    echo "<div class='alert alert-success' role='alert'>". $this->session->flashdata("success")."</div>";
  }
}

$info=$this->session->all_userdata();
?>
<?php echo validation_errors(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Work only system</title>


     <!-- Llamamos los estilos a utilizar-->
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

            <h2>Work Only System</h2>
            <h1 id ="texto">Bienvenido, busca tu proximo empleado para tu empresa</h1>
          <ul class="nav nav-tabs">
            <li class="active"><a id = "homes" data-toggle="tab" href="#home"> <img src="http://avanceon.qa/wp-content/uploads/2015/02/Grey-Blue-office.png">Inicio</a></li>

            <li><a id = "perfilU" data-toggle="tab" href="#perfil"> <img src="https://vignette.wikia.nocookie.net/ssbb/images/f/f5/S%C3%ADmbolo_Miiverse.png/revision/latest/scale-to-width-down/60?cb=20181023135642&path-prefix=es">Perfil Empresa</a></li>

            <li><a id = "ofertasE" data-toggle="tab" href="#ofertasEmpresa"> <img src="https://storage.googleapis.com/mobisystems/product/1201/thumbs/trasperant_free_1460986138_60.PNG">Crear Ofertas</a></li>

            <!-- <li><a id = "curriculum" data-toggle="tab" href="#Ucurriculum"> <img src="https://lh6.googleusercontent.com/proxy/bXRhfKJuu3denXlPmvAMNUgKx9FCizYeUbk_qaZC4KDlkn3bx_WNTNQNTHFmd710FHmBCi18_yXzlr7EnzuSLf5E5Pu59K16CMpBDShHkcKU4yT4rqIRkgxpZ0vsKOwoLvSUCQ2XYueD5Sj-Rkzt7wCpTQ8hER3VU16fUdX_LmybqLLpFN-39meNMw93F_8wOcWdcoDxMFnh_Ai-QA4xHQR-uraMog=w1200-h630-p-k-no-nu">Ver l</a></li>-->

            <li><a id = "logout"  href='<?php echo base_url()."index.php/Main/logout"; ?>'><img src="https://i.ibb.co/sQHKhR9/favicon.png">Cerrar Sesion</a></li>

            <li id = "imgP"><?php echo "<img  id = 'imgGet' height='65' src='" . base_url() . '/uploads/user_' . $info['usuario'] . ".jpg'";?>
            <label id ="nombreGet"><?php echo $info['nombre'] ?></label></li>
          </ul>

    <div class="tab-content">
        <div id="home" class="tab-pane fade in active">

            <div id="mensajeAutores">
            <p id ="msj">Bienvenido al sistema de empleo.
            Este Sistema fue desarrollado por los estudiantes de la Universidad Nacional Yisakh Castro Sanchez y Laura Venegas Barquero. No tiene fines de lucro unicamente educativos. Esperamos aproveche la experiencia al maximo </p>
            </div>

        </div>


        <div id="perfil" class="tab-pane fade">
           <?php echo form_open("Main/editarPerfilEmpresa/".$info['id']);?>

                <h1 id = "EditarPerfiles">Editar Perfil</h1>
             <br>
           
            <label for="" class = "SignIn">Nombre Completo:</label>
            <input class="form-control" type="input" id = "nombre" name="nombre" value = "<?php echo $info['nombre'] ?>"/><br />

            <label for="" class = "SignIn">Nombre de usuario:</label>
            <input class="form-control" readonly="readonly"  type="input" id = "Nusuario" name="Nusuario" value = "<?php echo $info['usuario'] ?>" /><br />

            <label for="" class = "SignIn">Cedula/Ced.Juridica:</label>
            <input class="form-control" readonly="readonly" type="input" id = "cedula" name="cedula" value = "<?php echo $info['cedula'] ?>"/><br />

            <label for="" class = "SignIn">Direccion:</label>
            <input class="form-control" type="input" id = "direccion" name="direccion" value = "<?php echo $info['direccion'] ?>"/><br />

            <label for="" class = "SignIn">Telefono:</label>
            <input class="form-control" type="input" id = "telefono" name="telefono" value = "<?php echo $info['telefono'] ?>" /><br />

            <label for="" class = "SignIn">Correo Electronico:</label>
            <input class="form-control" readonly="readonly" type="input" id = "email" name="email" value = "<?php echo $info['email'] ?>"/><br />

            <label for="" class = "SignIn">Categoria</label>
            <br>
              <select class="tipo" name="tipo" id="tipo" >
                    <option value = "<?php echo $info['tipo'] ?>"><?php echo $info['tipo'] ?></option>

              </select>
            <br>
            <br>
            <label for="" class = "SignIn">Contraseña:</label>
            <input class="form-control" type="input" id = "rpassword" name="rpassword" value = "<?php echo $info['password'] ?>" /><br />

            <label for="" class = "SignIn">Confirmar Contraseña:</label>
            <input class="form-control" type="input" id = "cpassword" name="cpassword" value = "<?php echo $info['password'] ?>"/><br />

            <a id="Edit"  href="<?php echo base_url()."index.php/Upload/index/user_".$info['usuario']; ?>">Editar Foto</a><br />
            <?php $this->session->set_userdata('referred_from', current_url()); ?>
            
             <input class="form-control  btn btn-success" type="submit" id = "editarperfil" name="submit" value="Editar Perfil" />
             <div> <a id="ReporteEmpresa" href="<?php echo site_url('Reportes/pdf1/'. $info['id']); ?>" target="_blank">Click para Generar Reporte</a></div>
            <?php echo form_close(); ?>
        </div>


        <div id="ofertasEmpresa" class="tab-pane fade">
             <div class="container">
                  <h1 id ="texto">Registre toda la informacion para facilitar su proceso de busqueda de empleados</h1>
                  <ul class="nav nav-pills">
                    <li class=""><a data-toggle="pill" href="#ofertaLaboral">Oferta Laboral </a></li>
                    <li><a  data-toggle="pill" href="#CrearOferta">Crear Oferta</a></li>
                    <li><a  data-toggle="pill" href="#reportOfertas">Reporte Ofertas</a></li>
                    <li><a  data-toggle="pill" href="#reportPostulantes">Reporte Postulantes</a></li>
                  </ul>

                  <div class="tab-content">
                    <div id="ofertaLaboral" class="tab-pane fade in active">
                        <h1 id ="texto">Filtro de ofertas</h1>
                        <div id = "contenedors">

                        <input class="form-control" type="text" id = "empresa" name="empresa" placeholder="Escribe algo para buscar"  /><br />

                        </div>
                            <script>
                                $(document).ready(function(){
                                  $("#empresa").on("keyup", function() {
                                    var value = $(this).val().toLowerCase();
                                    $("#table tr").filter(function() {
                                      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                                    });
                                  });
                                });
                            </script>
                              <table id = "table" class="table table-striped">

                               <thead class="thead-dark"><tr><th scope="col">Puesto</th><th scope="col">Descripcion</th><th scope="col">Fecha Oferta</th></th><th scope="col">Duracion Contrato</th><th scope="col">Horario</th><th scope="col">Salario</th>
                               <th scope="col">Ubicacion</th><th scope="col">Categoria</th><th scope="col">Vacantes</th><th scope="col">Estado</th><th scope="col">Requisitos</th><th scope="col">Agregar Requisitos</th><th scope="col">Editar</th></tr></thead>
                               <tbody>

                             <?php
                             $inf=$this->session->all_userdata();
                             $post= $this->login_model->get_ofertasEmpresa($inf['id']);
                             foreach ($post as $item):

                              endforeach;

                              foreach ($post as $item):
                                   ;
                                    ?>

                             <tr><td scope="row"><?php echo $item['nombrePuesto']; ?></td>
                             <td sscope="row"><?php echo $item['descripcion']; ?></td> 
                             <td scope="row"><?php echo $item['fechaOferta']; ?></td>
                             <td scope="row"><?php echo $item['duracionContrato']; ?></td>
                             <td scope="row"><?php echo $item['horario']; ?></td>
                             <td scope="row"><?php echo $item['salario']; ?></td>
                             <td scope="row"><?php echo $item['ubicacion']; ?></td>
                             <td scope="row"><?php echo $item['categoria']; ?></td>
                             <td scope="row"><?php echo $item['vacantes']; ?></td>
                             <td scope="row"><?php echo $item['estado']; ?></td>
                             <td scope="row"><a target="_blank" href="<?php echo site_url('Ofertas/requisitos/'. $item['id']); ?>" >Ver Requisitos</a>
                             <td scope="row"><a href="<?php echo site_url('Ofertas/addRequisitos/'. $item['id']); ?>">Agregar Requisitos</a> 
                             <td scope="row"><a href="<?php echo site_url('Ofertas/editOfertas/'. $item['id']); ?>">Editar</a>
                             <!-- Link para postularse, envia el curriculum a una tabla -->

                                     </td>
                                         </tr>

                             <?php endforeach; ?>


                              </tbody>
                             </table>
                        
                    </div>
                    <div id="CrearOferta" class="tab-pane fade">
                        <h1 id = "EditarPerfiles">Crear Oferta</h1>
                        
                            <?php $inf=$this->session->all_userdata();?>
                            <?php echo form_open("Ofertas/agregarOfertasEmpresa");?>

                            <label for="" class = "Curriculum">Categoria:</label><br/>
                            <select name="categoria" id= "categoria" class="btn btn-default dropdown-toggle">
                            <?php

                                $category = $this->login_model->get_category();

                            foreach ($category as $key): ?>
                                <option value="<?php echo $key['id']?>"><?php echo $key['categoria'];?></option>
                            <?php endforeach; ?>
                            </select>
                        
                        
                            <input class="form-control" type="input" id = "idUsuario" name="idUsuario" value = "<?php echo $inf['id'] ?>">
                            <label for="" class = "Curriculum">Puesto:</label>
                            <input class="form-control" type="input" id = "puesto" name="puesto"><br/>
                            <label for="" class = "Curriculum">Descripcion:</label>
                            <input class="form-control" type="input" id = "descripcion" name="descripcion" ><br/>
                            
                            <label for="" class = "Curriculum">Fecha de Oferta:</label><br/>
                            <input type="date" name="dateOferta" id = "dateOferta" class="fecha" value=""><br/>
                            <label for="" class = "Curriculum">Duracion Contrato:</label>
                            <input class="form-control" type="input" id = "contrato" name="contrato"><br/>
                            <label for="" class = "Curriculum">Horario:</label>
                            <input class="form-control" type="input" id = "horario" name="horario"><br/>
                            <label for="" class = "Curriculum">Salario:</label>
                            <input class="form-control" type="input" id = "salario" name="salario"><br/>
                            <label for="" class = "Curriculum">Ubicacion:</label>
                            <input class="form-control" type="input" id = "canton" name="canton" placeholder="Pais/Provincia/Canton/Distrito"><br/>
                            <input class="form-control" type="input" id = "estado" name="estado" value = "A"><br/>
                         <br>

                         <input class="form-control  btn btn-success" type="submit" id = "Enviar" name="submit" value="Enviar Curriculum" />
                         <?php echo form_close(); ?>

                    </div>
            
                    
                  </div>
                </div>
        </div>


        <div id="logoutS" class="tab-pane fade">
     
        </div>

   </div>
</div>
</body>
</html>
