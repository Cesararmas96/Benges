$(function(){


	// Lista de color
	$.post( '../controlador/select/colorselect.php' ).done( function(respuesta)
	{
		$( '#cam_idtcolor' ).html( respuesta );
	});



	// Lista de tipo
	$.post( '../controlador/select/tiposelect.php' ).done( function(respuesta)
	{
		$( '#cam_idttipo' ).html( respuesta );
	});

	// lista de categoria
	$('#cam_idttipo').change(function()
	{
		var el_tipo = $(this).val();
		var el_tipos = $(this).val();

		// Lista de subcategoria
		$.post( '../controlador/select/categoriaselect.php', { tipo: el_tipo} ).done( function( respuesta)
		{
			$( '#cam_idtcategoria' ).html( respuesta );
		});

		$.post( '../controlador/select/codigotip.php', { tipos: el_tipos} ).done( function( respuesta)
		{
			$( '#cam_cT' ).html( respuesta );

		});
	});
	// Lista de marcas
		$('#cam_idtcategoria').change(function()
	{
		var la_categoria = $(this).val();

		// Lista de modelo
		$.post( '../controlador/select/subcategoriaselect.php', { categoria: la_categoria} ).done( function( respuesta )
		{
			$( '#cam_idtsubcategoria' ).html( respuesta );
		});

		$.post( '../controlador/select/codigocate.php', { categoria: la_categoria} ).done( function( respuesta )
		{
			$( '#cam_cC' ).html( respuesta );
		});
	});
	$('#cam_idtsubcategoria').change(function()
{
	var la_subcat = $(this).val();
		$.post( '../controlador/select/codigosubcat.php', { subcat: la_subcat} ).done( function( respuesta )
	{
		$( '#cam_cS' ).html( respuesta );
	});
	})
	$.post( '../controlador/select/marcaselect.php' ).done( function(respuesta)
	{
		$( '#cam_idtmarca' ).html( respuesta );
	});

	$('#cam_idtmarca').change(function()
	{
		var la_marca = $(this).val();

		// Lista de subcategoria
		$.post( '../controlador/select/modeloselect.php', { marca: la_marca} ).done( function( respuesta )
		{
			$( '#cam_idtmodelo' ).html( respuesta );
		});
		$.post( '../controlador/select/codigomar.php', { marca: la_marca} ).done( function( respuesta)
		{
			$( '#cam_cM' ).html( respuesta );

		});
	});
	$('#cam_idtmodelo').change(function()
{
	var el_modelo = $(this).val();
		$.post( '../controlador/select/codigomode.php', { modelo: el_modelo} ).done( function( respuesta )
	{
		$( '#cam_cMo' ).html( respuesta );
	});
	})
	//lista de sede
	$.post( '../controlador/select/sedeselect.php' ).done( function(respuesta)
	{
		$( '#cam_idsede' ).html( respuesta );
	});
	// lista de departamento
	$('#cam_idsede').change(function()
	{
		var la_sede = $(this).val();

		// Lista de subcategoria
		$.post( '../controlador/select/departamentoselect.php', { departamento: la_sede} ).done( function( respuesta )
		{
			$( '#cam_iddepartamento' ).html( respuesta );
		});
	});
	$.post( '../controlador/select/sedeselect.php' ).done( function(respuesta)
	{
		$( '#cam_idsede1' ).html( respuesta );
	});
	$('#cam_idsede1').change(function()
	{
		var la_sede = $(this).val();

		// Lista de subcategoria
		$.post( '../controlador/select/departamentoselect.php', { departamento: la_sede} ).done( function( respuesta )
		{
			$( '#cam_iddepartamento1' ).html( respuesta );
		});
	});

	$.post( '../controlador/select/sedeselect.php' ).done( function(respuesta)
	{
		$( '#cam_idsede2' ).html( respuesta );
	});

	$('#cam_idsede2').change(function()
	{
		var la_sede = $(this).val();

		// Lista de subcategoria
		$.post( '../controlador/select/departamentoselect.php', { departamento: la_sede} ).done( function( respuesta )
		{
			$( '#cam_iddepartamento2' ).html( respuesta );
		});
	});

	$('#cam_iddepartamento1').change(function()
	{
		var el_ejemplar = $(this).val();

		// Lista de subcategoria
		$.post( '../controlador/select/ejemplarselect.php', { ejemplar: el_ejemplar} ).done( function( respuesta )
		{
			$( '#cam_idtejemplar' ).html( respuesta );
		});
	});

})
