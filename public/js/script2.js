$(document).ready(function(){
    carga();	
});

function carga()
{
    var tablaDatos = $("#datos");
	var route = "http://localhost:8000/genere";

	$("#datos").empty();
	$.get(route, function(res){
		$(res).each(function(key,value){
                    
			tablaDatos.append("<tr><td>"+value.genere+"</td><td><button class='btn btn-primary' value="+value.id+" onClick='mostrar(this)' data-toggle='modal' data-target='#myModal'>Editar</button><button class='btn btn-danger'>Eliminar</button></td></tr>");
		});
	});
}

function mostrar(btn)
{
    var route = "http://localhost:8000/genere/"+btn.value+"/edit";
    $.get(route, function(res){
        console.log(res.genere);
        $("#genere").val(res.genere);
        $("#id").val(res.id);
                
    });
    
}
$("#actualizar").click(function(){
	var value = $("#id").val();
	var dato = $("#genere").val();
	var route = "http://localhost:8000/genere/"+value+"";
	var token = $("#token").val();

	$.ajax({
		url: route,
		headers: {'X-CSRF-TOKEN': token},
		type: 'PUT',
		dataType: 'json',
		data: {genere: dato},
		success: function(){
			carga();
			$("#myModal").modal('toggle');
			$("#msj-success").fadeIn();
		}
	});
});


