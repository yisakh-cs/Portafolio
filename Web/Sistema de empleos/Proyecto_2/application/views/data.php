<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
    <h1>Welcome, You are successfully logged in.</h1>

    <?php
   //info almacena los dato del usuario de la session 
    $info=$this->session->all_userdata();
    
    //Si el tipo de info que seria donde almacena la info del logueado es empleado se redirecciona a su visa correspondiente sino a la vista de empresa
    if($info['tipo']=='empleado')
    {
        redirect('Main/inicio');
     
    }
    else
    {
       redirect('Main/empresa');
    }
    ?>

    <a href='<?php echo base_url()."index.php/Main/logout"; ?>'>Logout</a>

</body>
</html>  
