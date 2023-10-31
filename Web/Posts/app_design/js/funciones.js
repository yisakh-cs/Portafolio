
function pusherAjax()
{
	$.ajax({
		type:"POST",
		url:'index.php',
		data:{btn_save:true, tweet:$('#txt_post').val(), key: 'cargar'}
	}).done(function(datos){
		$("#msg_box_container").html("Tweet Insertado exitosamente").fadeIn(1000).fadeOut(3000); //Cargamos los POSTS
		cargaTweet('activar');
		$('#txt_post').val('');
	}).fail(function(qXHR,textStatus,errorThrown)
		   {
		//En caso de que falle nos notificara
		$("#msj_box_container").html("Error al Guardar");
	});
}

function cargaTweet(parametro)
{
	$.ajax({
		type:"GET",
		url:'index.php',
		data:{cargarelTweet: parametro}
	}).done(function(datos){
		$("#main_box").html(datos);
	}).fail(function(jqXHR,textStatus,errorThrown)
		{
			$("#msj_box_container").html("Error al Guardar");
	});
}

function eliminarAJAX(parametros)
{
$.ajax({
    url:'index.php',
    type:'POST',
    data:{btn_eliminar:'',cod:parametros}

}).done(function(datos){
	cargaTweet('activar');
}).fail(function(qXHR, textStatus, errorThrown){
    $("msjbox").html("Error al guardar");
});

}

// voy a entrar a navegador y ver el proyecto esta bien? Si, solo que tengo como 40 ventanas
function buscarTweets(){
    $.ajax({
        type: 'GET',
        url: 'index.php',
        data: { btn_buscar:'busqueda', data:$('#txt_post').val()}
    }).done(function(datos){
        $("#main_box").html(datos);

    }).fail(function(jqXHR, textStatus, errorThrown){
        $("#msgbox").html(textStatus+": Recurso "+errorThrown);
    });
}


