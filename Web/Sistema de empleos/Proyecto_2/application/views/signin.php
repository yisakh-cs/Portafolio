<!DOCTYPE html>
<html>
<head>
    <title>Registro Usuarios</title>
     <!-- Declaramos las llamadas a los estilos y a el link de bootstrapp para mejor utilizacion-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url()?>css/estilos.css">
    
    <?php
 // <!-- Llamamo a la funcion del controlador-->
    echo form_open('Main/signin_validation');

    echo validation_errors();
    ?>
</head>
<body>
    <h1 id = "Registrar">Registrarse</h1>
      <!-- Declaramos los inputs -->
    <label for="" class = "SignIn">Nombre Completo:</label>
    <input class="form-control" type="input" id = "nombre" name="nombre" /><br />
    
    <label for="" class = "SignIn">Nombre de usuario:</label>
    <input class="form-control" type="input" id = "Nusuario" name="Nusuario" /><br />
    
    <label for="" class = "SignIn">Cedula/Ced.Juridica:</label>
    <input class="form-control" type="input" id = "cedula" name="cedula" /><br />
    
    <label for="" class = "SignIn">Direccion:</label>
    <input class="form-control" type="input" id = "direccion" name="direccion" /><br />
    
    <label for="" class = "SignIn">Telefono:</label>
    <input class="form-control" type="input" id = "telefono" name="telefono" /><br />

    <label for="" class = "SignIn">Correo Electronico:</label>
    <input class="form-control" type="input" id = "email" name="email" /><br />
    
    <label for="" class = "SignIn">Categoria</label>
    <br>
      <select class="tipo" name="tipo" id="tipo" >
            <option value="empleado">Empleado</option>
          <option value="empresa">Empresa</option>
      </select>
    <br>
    <br>
    <label for="" class = "SignIn">Contraseña:</label>
    <input class="form-control" type="input" id = "Rpassword" name="password" /><br />
    
    <label for="" class = "SignIn">Confirmar Contraseña:</label>
    <input class="form-control" type="input" id = "cpassword" name="cpassword" /><br />

     <input class="form-control  btn btn-dark" type="submit" id = "signin" name="submit" value="Registrarse" />
   <!-- Declaramos el link que redirreciona al login-->
    <a href='<?php echo base_url()."index.php/Main/login"; ?>' id ="regreso">Regresar</a>
   

</body>
</html>
