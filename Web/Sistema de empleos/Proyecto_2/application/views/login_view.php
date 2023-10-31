<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Iniciar Sesion</title>
    
     <!-- Llamamos los estilos a utilizar-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url()?>css/estilos.css">
    <link href="https://fonts.googleapis.com/css?family=Merriweather&display=swap" rel="stylesheet">
    <?php
    //<!-- Llamamos el form_opne que ejecuta la funcion de ctr para el login-->
    echo form_open('Main/login_action');

    echo validation_errors();
          
    ?>
</head>
<body>
    <h1 class = "bg-dark text-white">Login</h1>
    
    <div id ="login">
    <!-- Declaramos los input para usuario y contraseña-->
    <label for="" class = "Login">Correo:</label>
    <input class="form-control" type="input" id = "correo" name="correo" /><br />
    <label for="" class = "Login">Contraseña</label>
    <input class="form-control" type="password" id = "password" name="password" /><br />

    <input class="form-control  btn btn-dark" type="submit" id = "LoginSesion" name="submit" value="Iniciar Sesion" />
     <!-- Declaramos el link para redireccionarme a el registro-->
    <a href='<?php echo base_url()."index.php/Main/signin"; ?>' id ="registro">Registrarse</a>
        
    </div>
    
</body>
</html>
