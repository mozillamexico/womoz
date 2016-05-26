$(document).ready(function(){
	console.log('ready');
	$("#enviarMensaje").submit(function(event){

		event.preventDefault();

		var param = {
			"nombre": $("#nombre").val(),
			"email": $("#email").val(),
			"mensaje": $("#mensaje").val()
		};

		param = JSON.stringify(param);

		$.ajax({
			data: param,
			url: 'http//:zomow.mozilla-mexico.org/contacto/contacto.php',
			type: 'POST',
			dataType: 'json',
			success: function(respuesta){
				if(respuesta.success == true){

					$("#enviarMensaje")[0].reset();
					$("#respuesta").fadeIn("slow");
					$("#respuesta").append('<p>'+respuesta.mensaje+'</p>');


					setTimeout(function() {
						$("#respuesta").fadeOut("slow");
					}, 3000);
				}else{
					
					$("#respuesta").fadeIn("slow");
					$("#respuesta").append('<p>'+respuesta.mensaje+'</p>');

					setTimeout(function() {
						$("#respuesta").fadeOut("slow");
					}, 3000);
				}
			},
			error: function(error){

				$("#respuesta").fadeIn("slow");
				$("#respuesta").append('<p>'+respuesta.mensaje+'</p>');

				setTimeout(function() {
					$("#respuesta").fadeOut("slow");
				}, 3000);
			}
		})

	})
})