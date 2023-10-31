function insertarComentarioAjax()
{
	if(esVacio("txt_nombre") || esVacio("txt_email") || esVacio("txt_mensaje"))
		{		
			$("#message").html("Error, todos los campos son obligatorios");
		}
	else
		{
		$.ajax({
		type:"POST",
		url:'index.php',
		data:{btnEnviar:true, nombre:$('#txt_nombre').val(), email:$('#txt_email').val(), mensaje:$('#txt_mensaje').val()}
	}).done(function(datos){
		$('#txt_nombre').val('');
		$('#txt_email').val('');
		$('#txt_mensaje').val('');
		$("#message").html("Comentario enviado exitosamente..!").fadeIn(1000).fadeOut(3000);
	}).fail(function(qXHR,textStatus,errorThrown)
		   {
		//En caso de que falle nos notificara
		$("#message").html("Error al enviar el comentario. Vuelve a intentarlo");
	});	
		}
}

function esVacio(idcampo)
{
    var campo = document.getElementById(idcampo);
    
    if(campo.value == "" || campo.lenght == 0)
        {
            return true;
        }
    return false;
}
