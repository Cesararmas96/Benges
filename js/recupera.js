$(document).ready(function() {

	// la primera linea es para ejecutar el javascript cuando toda la pagina se cargo completamente

	$("#boton").click(function() {

		// Si el boton con id="boton" se le dio Click hace lo siguiente

		var usuario = $("#usuario").val(); // guardamos el valor del campo id="usuario" en una variable javascript

		if (usuario !="")
			// Comprobamos que el campo no este vacio
		{
			$.ajax({
				// ejecultamos el ajax
				url: '../controlador/control_recuperar.php',
				// llamamos al controlador
				type: 'POST',
				// El metodo de envio POST
				dataType: 'json',
				// De que forma obtendremos los datos que nos envie la base de datos: JSON
				
				// JSON: es una forma de transformar variables y datos para que Javascript lo reconozca

				// data son los datos que enviaremos por metodo JSON, la primera palabra es la variable que se crea y la segunda es el dato que se guardo en una variable anteriormente
				data: {Usu: usuario},

				// success es la accion que se ejecuta si se conecto con el controlador
				success: function(msg)
				{

					// msg es lo que se imprime mediante un ECHO en php

					if (msg != "Usuario invalido")
					{
						$("#Usu").hide(300);
						$("#Pregunta").html("Su pregunta: "+msg.Pregunta);
						$("#Comprobar").show(300);
					}
					else
					{
						alert(msg);
					}
				}
			});			
		}
		else
		{
			alert("Campo usuario vacio");
		}
	});

	$("#boton2").click(function(){
		var usuario = $("#usuario").val();
		var Respuesta = $("#Respuesta").val();
		if (Respuesta !="")
		{
			$.ajax({
				url: '../controlador/control_validarRespuesta.php',
				type: 'POST',
				data: {Usu: usuario,Respuesta: Respuesta},
				success: function(msg)
				{
					if (msg =="Valido respuestas")
					{
						$("#Comprobar").hide(300);
						$("#NuevaPass").show(300);
					}
					else
					{
						alert(msg);
					}
				}
			});			
		}
		else
		{
			alert("Campo Respuesta Vacios");
		}
	});
	$("#boton3").click(function() {
		var Usu = $("#usuario").val();
		var pass1 = $("#Pass1").val();
		var pass2 = $("#Pass2").val();
		if (pass1 !="" || pass2 !="")
		{
			if (pass1 == pass2)
			{
				$.ajax({
					url: '../controlador/control_cambiarContra.php',
					type: 'POST',
					data: {Usu:Usu,pass: pass1},
					success: function(msg)
					{
						if (msg=="Su contraseña fue cambiada con exito")
						{
							alert(msg);
							location.href="../index.php";
						}
						else
						{
							alert("Sucedio un error");
						}
					}
				});
			}
			else
			{
				alert("Ambas contraseñas deben ser iguales");
			}
		}
		else
		{
			alert("Introduzca ambas contraseñas");
		}
	});
});