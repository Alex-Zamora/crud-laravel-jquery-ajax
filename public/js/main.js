$(document).ready(function(){
	cargarTabla();
	// $("#datos").click(function(){
	//     alert($("#datos").html());
	// });	
});

function cargarTabla(){

	var tableDatos = $("#datos");
	var route = "http://localhost:8000/posts-list";

	$('#datos').empty(); //Limpiar datos de tabla
	$.get(route, function(res){
		//iteramos todos los posts
		$(res).each(function(key, value){
			//Inserta elementos dentro de la tabla #datos
			tableDatos.append("<tr><td>"+value.name+"</td><td>"+value.description+"</td><td>"+value.category+"</td><td><button value="+value.id+" onclick='Mostrar(this);' class='btn btn-primary' data-toggle='modal' data-target='#myModal'>Editar</button></td><td><button class='btn btn-danger' id='eliminar' value="+value.id+" onclick='Eliminar(this)'>Eliminar</button></td></tr>");
		});
	});
}

function Eliminar(btn){
	//colocamos el id del elemento en la ruta
	var route = "http://localhost:8000/posts/"+btn.value+"";
    var token = $('input[name="_token"]').val();
    
    $.ajax({
    	url: route,
    	headers: {'X-CSRF-TOKEN': token},
		type: 'DELETE',
		dataType: 'json',
		success: function(){
			cargarTabla();
			$('#msg-delete').append('post eliminado correctamente').fadeIn(2000).fadeOut(3500);
		}
    });
}


function Mostrar(btn){
	var route = "http://localhost:8000/posts/"+btn.value+"/edit"

	$.get(route, function(res){
		$('#name').val(res.name);
		$('#description').val(res.description);
		$('#category').val(res.category);
		$('#id').val(res.id);
	});
};

$('#actualizar').click(function(){
	var value = $('#id').val();
	var route = "http://localhost:8000/posts/"+value+"";
	var formData = {
        name: $('#name').val(),
        description: $('#description').val(),
        category: $('#category').val(),
    }
    var token = $('input[name="_token"]').val();

    $.ajax({
    	url: route,
    	headers: {'X-CSRF-TOKEN': token},
		type: 'PUT',
		dataType: 'json',
		data: formData,
		success: function(){
			cargarTabla();
			$('#myModal').modal('toggle');
			$('#msg-success').fadeIn(2000).fadeOut(3500);
		}
    });

});