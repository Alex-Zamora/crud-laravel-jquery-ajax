$(document).ready(function(){

	$('#registrar').click(function(e){
		e.preventDefault();

		//se almacena todo lo que contiene el form en la variable form
		//se extrae el atributo action del form y se almacena en la variable route
		var form = $(this).parents('form');
        var route = form.attr('action');
        var token = $('input[name="_token"]').val();

        //obtenemos toda la data de los input del form y se almacenan en formData
		var formData = {
            name: $('#name').val(),
            description: $('#description').val(),
            category: $('#category').val(),
        }

		$.ajax({
			url: route,
			headers: {'X-CSRF-TOKEN': token},
			type: 'POST',
			dataType: 'json',
			data: formData,
			success: function() {
				//Shows a success message
				$('#msg-success').fadeIn(2000).fadeOut(3500);
				//Limpia los input
				$('#formPost')[0].reset();
			},
			error:function(msj){
				var errorMessages = "";

				$.each(msj.responseJSON.errors, function(key, value){
					errorMessages += "<li>"+value+"</li>"
					console.log(errorMessages);
				});

				$('#msg-errors').html("<ul>"+errorMessages+"</ul>").fadeIn();
			}
		});
	});
});