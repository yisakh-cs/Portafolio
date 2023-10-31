<?php if(!empty($this->session))
{
  if($this->session->flashdata("success"))
  {
    echo "<div class='alert alert-success' role='alert'>". $this->session->flashdata("success")."</div>";
  }
}
//Llenamos el info con todos los datos del usuario
$info=$this->session->all_userdata();
?>

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

            <h2>Work Only System</h2>
            <h1 id ="texto">Bienvenido, busca tu posible proximo empleo</h1>
     <!-- Declaramos el menu desplazador con iconos-->
          <ul class="nav nav-tabs">
            <li class="active"><a id = "homes" data-toggle="tab" href="#home"> <img src="https://lh3.googleusercontent.com/proxy/5fjXLlp--H1hGCT3UtDQcSzvwvugwCiamzsckQUs5VBplq-mcik9wbbJ5FBvc1KaUO55fGHFUgYbfhEpr32fZ0Fym3CjWg=w1200-h630-p-k-no-nu">Inicio</a></li>

            <li><a id = "perfilU" data-toggle="tab" href="#perfil"> <img src="http://exescursosonline.com/wp-content/uploads/2013/12/maestro.png">Perfil Usuario</a></li>

            <li><a id = "empleo" data-toggle="tab" href="#Bempleo"> <img src="https://cdn2.iconfinder.com/data/icons/3_Minicons-Free-_Pack/45/Zoom.png">Buscar Empleo</a></li>

            <li><a id = "curriculum" data-toggle="tab" href="#Ucurriculum"> <img src="https://lh6.googleusercontent.com/proxy/bXRhfKJuu3denXlPmvAMNUgKx9FCizYeUbk_qaZC4KDlkn3bx_WNTNQNTHFmd710FHmBCi18_yXzlr7EnzuSLf5E5Pu59K16CMpBDShHkcKU4yT4rqIRkgxpZ0vsKOwoLvSUCQ2XYueD5Sj-Rkzt7wCpTQ8hER3VU16fUdX_LmybqLLpFN-39meNMw93F_8wOcWdcoDxMFnh_Ai-QA4xHQR-uraMog=w1200-h630-p-k-no-nu">Curriculum</a></li>

            <li><a id = "logout"  href='<?php echo base_url()."index.php/Main/logout"; ?>'><img src="https://i.ibb.co/sQHKhR9/favicon.png">Cerrar Sesion</a></li>
            <!-- Cargamos la imagen -->
            <li id = "imgP"><?php echo "<img  id = 'imgGet' height='65' src='" . base_url() . '/uploads/user_' . $info['id'] . ".jpg'";?>
            <!-- Cargamos el nombre del usuario -->
            <label id ="nombreGet"><?php echo $info['nombre'] ?></label></li>
          </ul>
 <!-- Los divs que abren los distintos menus -->
    <div class="tab-content">
        <div id="home" class="tab-pane fade in active">
            <!-- Div que contiene una breve reseña de la aplicacion -->
            <div id="mensajeAutores">
            <p id ="msj">Bienvenido al sistema de empleo.
            Este Sistema fue desarrollado por los estudiantes de la Universidad Nacional Yisakh Castro Sanchez y Laura Venegas Barquero. No tiene fines de lucro unicamente educativos. Esperamos aproveche la experiencia al maximo </p>
            </div>
        </div>

        <!-- Div que contiene el editar perfil-->
        <div id="perfil" class="tab-pane fade">
           <?php echo form_open("Main/editarPerfil/".$info['id']);?>

                <h1 id = "EditarPerfiles">Editar Perfil</h1>
             <br>
             <!-- Declaramos los input llenados con los valores extraidos de la session-->
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
             <!-- Combo box llenado con el dato del tipo de usuario que le corresponde  ala persona logueada-->
              <select class="tipo" name="tipo" id="tipo" >
                    <option value = "<?php echo $info['tipo'] ?>"><?php echo $info['tipo'] ?></option>

              </select>
            <br>
            <br>
            <label for="" class = "SignIn">Contraseña:</label>
            <input class="form-control" type="input" id = "rpassword" name="rpassword" value = "<?php echo $info['password'] ?>" /><br />

            <label for="" class = "SignIn">Confirmar Contraseña:</label>
            <input class="form-control" type="input" id = "cpassword" name="cpassword" value = "<?php echo $info['password'] ?>"/><br />

             <!-- Cargar imagenes -->
            <a id="Edit"  href="<?php echo base_url()."index.php/Upload/index/user_".$info['id']; ?>">Editar Foto</a><br />
            <?php $this->session->set_userdata('referred_from', current_url()); ?>

             <input class="form-control  btn btn-success" type="submit" id = "editarperfil" name="submit" value="Editar Perfil" />
            <?php echo form_close(); ?>
        </div>

        <!-- Div para empleo, listar ofertas-->
        <div id="Bempleo" class="tab-pane fade">
              <h1 id ="texto">Filtro de empleos por categoria y empresa</h1>
            <div id = "contenedorBusqueda">

            <input class="form-control" type="text" id = "empresa" name="empresa" placeholder="Escribe algo para buscar"  /><br />

            </div>
             <!-- Script que filtra por cualquier valor ne la tabla por medio de eficiencia lo encontramos más factible-->
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
             <!-- Crear tabla con los datos de las ofertas y los link correspondientes a funciones -->
                  <table id = "table" class="table table-striped">

                  <thead class="thead-dark"><tr><th scope="col">Puesto</th><th scope="col">Empresa</th><th scope="col">Descripcion</th></th><th scope="col">Categoria</th><th scope="col">Fecha</th><th scope="col">Vacantes</th>
                  <th scope="col">Salario</th><th scope="col">Horario</th><th scope="col">Requisitos</th><th scope="col">Postulacion</th></tr></thead>
                  <tbody>

                 <?php
                 $inf=$this->session->all_userdata();
                 $post= $this->login_model->get_ofertas($inf['id']);
                      //Obtiene todas las ofertas desde el model donde pide que sean activas y que las toma de acuerdo al id 
                 foreach ($post as $item):

                  endforeach;

                  foreach ($post as $item):
                       ;
                        ?>
                        <!-- Declara los campos de la tabla llenados con los valores de la consulta del modelo -->
                             <tr><td scope="row"><?php echo $item['nombrePuesto']; ?></td>
                             <td sscope="row"><?php echo $item['nombre']; ?></td> 
                             <td scope="row"><?php echo $item['descripcion']; ?></td>
                             <td scope="row"><?php echo $item['categoria']; ?></td>
                             <td scope="row"><?php echo $item['fechaOferta']; ?></td>
                             <td scope="row"><?php echo $item['vacantes']; ?></td>
                             <td scope="row"><?php echo $item['salario']; ?></td>
                             <td scope="row"><?php echo $item['horario']; ?></td>
                             <td scope="row"><a target="_blank" href="<?php echo site_url('Ofertas/requisitos/'. $item['id']); ?>" >Requisitos</a>
                             <!-- Link para postularse, envia el curriculum a una tabla -->
                             <td scope="row"><a href="<?php echo site_url('Ofertas/postulacion/' . $item['idUsuario']); ?>">Postularse</a>

                         </td>
                             </tr>

                 <?php endforeach; ?>


                  </tbody>
                 </table>

                        </div>
 <!-- Div que se encarga del registro del curriculum del candidato-->
        <div id="Ucurriculum" class="tab-pane fade">
              <h2>Curriculum Personal</h2>
             <div class="container">
                  <h1 id ="texto">Registre toda la informacion para facilitar su posible contratacion</h1>
                  <!-- Declaracion del menu -->
                  <ul class="nav nav-pills">
                    <li class=""><a data-toggle="pill" href="#Curriculum"> Curriculum</a></li>
                    <li><a  data-toggle="pill" href="#expAnt">Experiencias Anteriores</a></li>
                    <li><a  data-toggle="pill" href="#FormAcademicas">Formaciones Academicas</a></li>
                    <li><a  data-toggle="pill" href="#reportCurriculum">Reporte Curriculum</a></li>
                  </ul>

                  <div class="tab-content">
                    <div id="Curriculum" class="tab-pane fade in active">
                        <?php echo form_open("Main/AgregarCurriculum");?>
                        <input class="form-control" readonly="readonly"  type="input" id = "id" name="id" value = "<?php echo $info['id'] ?>">
                        <label for="" class = "Curriculum">Meritos/Observaciones:</label>
                        <input class="form-control" type="input" id = "descripcion" name="descripcion"><br/>
                        <input class="form-control  btn btn-success" type="submit" id = "Enviar" name="submit" value="Enviar Curriculum" />
                        <?php echo form_close(); ?>
                    </div>
                       <!-- Permite tomar el valor del id curriculum correspondiente al usuario logueado -->
                    <?php $curri = $this->login_model->set_curri($info['id']); ?>
                    <div id="expAnt" class="tab-pane fade">
                    <!-- Habre el form open para llamar la funcion del controlador que permite agregar experiencia-->
                    <?php echo form_open("Main/agregarExperiencia");?>
                        
                         <!-- Llenamos el input con el id de curriculum de acuerdo al usuario y lo ocultamos desde css para que el usuario no pueda verlo-->
                     <input class="form-control" type="input" id = "idC" name="idC" value="<?php echo $curri['id']; ?>"><br/>
                        
                     <label for="" class = "Curriculum">Puesto:</label>
                     <input class="form-control" type="input" id = "puesto" name="puesto"><br/>
                     <label for="" class = "Curriculum">Empresa:</label>
                     <input class="form-control" type="input" id = "empresas" name="empresas"><br/>
                        <label for="" class = "Curriculum">Fecha Inicio:</label>
                     <br>
                     <input type="date" name="dateInicio" id = "dateInicio" class="fecha" value="">
                     <br>
                        <label for="" class = "Curriculum">Fecha Final:</label>
                     <br>
                     <input type="date" name="dateFinal" id = "dateFinal"  class="fecha" value="">
                     <br>
                     <label for="" class = "Curriculum">Observaciones:</label>
                     <input class="form-control" type="input" id = "observaciones" name="observaciones"><br/>
                        
                     <input class="form-control  btn btn-success" type="submit" id = "Enviar" name="submit" value="Enviar Curriculum" />
                    <!-- Cerramos el form -->
                    <?php echo form_close(); ?>
                    </div>
                    <div id="FormAcademicas" class="tab-pane fade">
                    <!-- Ejecutamos el form open que permite ejecutar la funcion del controlador de agregar formacion-->
                     <?php echo form_open("Main/agregarFormacion");?>
                    <!-- Llenamos el input con el id de curriculum de acuerdo al usuario y lo ocultamos desde css para que el usuario no pueda verlo-->
                     <input class="form-control" type="input" id = "idC" name="idC" value="<?php echo $curri['id']; ?>"><br/>
                     <label for="" class = "Curriculum">Titulo:</label>
                     <input class="form-control" type="input" id = "titulo" name="titulo"><br/>
                     <label for="" class = "Curriculum">Especialidad:</label>
                     <input class="form-control" type="input" id = "especialidad" name="especialidad"><br/>
                     <label for="" class = "Curriculum">Institucion:</label>
                     <input class="form-control" type="input" id = "institucion" name="institucion"><br/>

                        <label for="" class = "Curriculum">Fecha:</label>
                     <br>
                     <input type="date" name="dateTrabajo" id = "dateTrabajo" value="">
                     <br>
                     <input class="form-control  btn btn-success" type="submit" id = "Enviar" name="submit" value="Enviar Curriculum" />
                    <?php echo form_close(); ?>
                    </div>
                    <div id="reportCurriculum" class="tab-pane fade">
                        <a id="ReporteUnico" href="<?php echo site_url('Reportes/pdf/'. $curri['id']); ?>" target="_blank">Click para Generar Reporte</a>
                    </div>
                  </div>
                </div>
        </div>
<!-- Llenamos el input con el id de curriculum de acuerdo al usuario y lo ocultamos desde css para que el usuario no pueda verlo-->
        <div id="logoutS" class="tab-pane fade">
        </div>

   </div>
</div>
</body>
</html>
