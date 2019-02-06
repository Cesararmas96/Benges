$(function(){

	// Lista de tipo
	

	// lista de categoria	
	$('#cam_idttipo').change(function()
	{
		var el_tipo = $(this).val();
		
		// Lista de subcategoria
		$.post( '../controlador/categoriaselect.php', { tipo: el_tipo} ).done( function( respuesta )
		{
			$( '#cam_idtcategoria' ).html( respuesta );
		});
	});
	// Lista de marcas
		$('#cam_idtcategoria').change(function()
	{
		var la_categoria = $(this).val();
		
		// Lista de modelo
		$.post( '../controlador/subcategoriaselect.php', { categoria: la_categoria} ).done( function( respuesta )
		{
			$( '#cam_idtsubcategoria' ).html( respuesta );
		});
	});

	

	$('#cam_idtmarca').change(function()
	{
		var la_marca = $(this).val();
		
		// Lista de subcategoria
		$.post( '../controlador/modeloselect.php', { marca: la_marca} ).done( function( respuesta )
		{
			$( '#cam_idtmodelo' ).html( respuesta );
		});
	});
	//lista de sede
	$.post( '../controlador/sedeselect.php' ).done( function(respuesta)
	{
		$( '#cam_idsede' ).html( respuesta );
	});
	// lista de departamento
	$('#cam_idsede').change(function()
	{
		var la_sede = $(this).val();
		
		// Lista de subcategoria
		$.post( '../controlador/departamentoselect.php', { departamento: la_sede} ).done( function( respuesta )
		{
			$( '#cam_iddepartamento' ).html( respuesta );
		});
	});


})
