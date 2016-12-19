$(document).ready(function(){
    alert("aloha"); return false;
	var tablaDatos = $("#datos");
	var route = "http://localhost:8000/genere";

	$("#datos").empty();
	$.get(route, function(res){
		$(res).each(function(key,value){
			tablaDatos.append("<tr><td>"+value.genere+"</td><td><button class='btn btn-primary'>Editar</button><button class='btn btn-danger'>Eliminar</button></td></tr>");
		});
	});
});

