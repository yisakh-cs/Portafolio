
window.addEventListener('load', miFuncionLoad, false);

function miFuncionLoad ()
{
    var telefono = document.getElementById('txt_telefono');
    telefono.addEventListener('keyup', validarNumero, false);
  
}
function validarNumero()
{
    if(isNaN(document.getElementById(this.id).value))
        this.value = "";      
    else
     if(document.getElementById("txt_nrc").value.length >7)
            {
                alert("Supero los caracteres posibles para el NRC solo se permiten 8");
                this.value ="";
            }
    else
        if(document.getElementById("txt_nrc").value<1000 || document.getElementById("txt_nrc").value>6999)
        {
            alert("El NRC debe estar entre 1000 y 6999");
        }      
}
function editarSecciones()
{
	var pa = document.getElementById('comentarios');
	pa.style.visibility = 'hidden';
	var s = document.getElementById('EditarSecciones2');
	var c = document.getElementById('contenidos');
	s.style.visibility = 'visible';
	c.style.visibility = 'visible';
	var x = document.getElementById('EditarUsuarios');
	x.style.visibility = 'hidden';
	var g = document.getElementById('div_1');
	g.style.visibility = 'visible';
	var y = document.getElementById('div_2');
	y.style.visibility = 'visible';
	var t = document.getElementById('div_3');
	t.style.visibility = 'visible';
	var n = document.getElementById('div_4');
	n.style.visibility = 'visible';
	
}
function editarUsuario()
{	
	var s = document.getElementById('EditarSecciones2');
	s.style.visibility = 'hidden';
	
	var c = document.getElementById('contenidos');
	c.style.visibility = 'hidden';
	
	var p = document.getElementById('comentarios');
	p.style.visibility = 'hidden';
	
	var x = document.getElementById('EditarUsuarios');
	x.style.visibility = 'visible';
	
	var g = document.getElementById('div_1');
	g.style.visibility = 'hidden';
	
	var y = document.getElementById('div_2');
	y.style.visibility = 'hidden';
	
	var t = document.getElementById('div_3');
	t.style.visibility = 'hidden';
	
	var n = document.getElementById('div_4');
	n.style.visibility = 'hidden';
	
	var cer = document.getElementById('agregarServicio');
	cer.style.visibility = 'visible';
}
function comentarios()
{

	var n = document.getElementById('div_4');
	n.style.visibility = 'hidden';
	
	var p = document.getElementById('comentarios');
	p.style.visibility = 'visible';
	
	var s = document.getElementById('EditarSecciones2');
	var c = document.getElementById('contenidos');
	s.style.visibility = 'hidden';
	c.style.visibility = 'hidden';
	
	var x = document.getElementById('EditarUsuarios');
	x.style.visibility = 'hidden';
	
	var g = document.getElementById('div_1');
	g.style.visibility = 'hidden';
	
	var y = document.getElementById('div_2');
	y.style.visibility = 'hidden';
	
	var t = document.getElementById('div_3');
	t.style.visibility = 'hidden';	

}

function modificarAJAX(parametro)
{
		$.ajax({
		type:"POST",
		url:'administrador.php',
		data:{btn_modificar:'', cod: parametro, titulo:$('#txt_titulo').val(), detalle:$('#txt_detalle').val()}
	}).done(function(datos){
			//cargarEdicion();
		$("#message").html("Actualizacion enviada exitosamente..!").fadeIn(1000).fadeOut(3000);
	}).fail(function(qXHR,textStatus,errorThrown)
		   {
		$("#message").html("Error al actualizar. Vuelve a intentarlo");
	});	
}
function mostrarServicios()
{
	
}
function cargarEdicion()
{
	$.ajax({
		type:"GET",
		url:'administrador.php',
		data:{cargarlaEdicion: parametro}
	}).done(function(datos){
		$("#div_1").html(datos);
	}).fail(function(jqXHR,textStatus,errorThrown)
		{
			$("#message").html("Error al Guardar");
	});
}

function modificarqsAJAX(parametro)
{
		$.ajax({
		type:"POST",
		url:'administrador.php',
		data:{btn_modificarqs:'', id: parametro, titulo2:$('#txt_titulo2').val(), detalle2:$('#txt_detalle2').val()}
	}).done(function(datos)
	{
		$("#message").html("Actualizacion enviada exitosamente..!").fadeIn(1000).fadeOut(3000);
	}).fail(function(qXHR,textStatus,errorThrown)
		   {
		$("#message").html("Error al actualizar. Vuelve a intentarlo");
	});	
}

function modificarcontactoAJAX(parametro)
{
		$.ajax({
		type:"POST",
		url:'administrador.php',
		data:{btn_modificarC:'', id: parametro, correo:$('#txt_dirrecion').val(), telefono:$('#txt_telefono').val(),otros:$('#txt_otros').val()}
	}).done(function(datos){
		$("#message").html("Actualizacion enviada exitosamente..!").fadeIn(1000).fadeOut(3000);
	}).fail(function(qXHR,textStatus,errorThrown)
		   {
		$("#message").html("Error al actualizar. Vuelve a intentarlo");
	});	
}

function insertarServicio(){

    $.ajax({
        type:"POST",
        url:'administrador.php',
        data:{btn_agregarServicio:"", nombre:$('#txt_titulo1').val(),resumen:$('#txt_resumen1').val(), contenido:$('#txt_contenido1')}
    }).done(function(datos){
        $("msg_box").html("Insertado exitosamente").fadeIn(1000).fadeOut(3000);
        cargar2("");
    }).fail(function(qXHR,textStatus, errorThrown){
        $("msg_box").html("Error al guardar")
    });
}
function cargar2(parametro){
    $.ajax({
        type: 'POST',
        url: 'administrador.php',
        data: { cargar: parametro }
    }).done(function( datos){
        $("#main_box").html(datos);

    }).fail(function(jqXHR, textStatus, errorThrown){
        $("#msgbox").html(textStatus+": Recurso "+errorThrown);
    });
}
