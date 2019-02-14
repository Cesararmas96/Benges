<?php
include('..nucleo/conexion2.php');

$dato = $_POST['dato'];

//EJECUTAMOS LA CONSULTA DE BUSQUEDA

$registro = mysql_query("SELECT * FROM tcatalogo");

//CREAMOS NUESTRA VISTA Y LA DEVOLVEMOS AL AJAX

echo '<table class="table table-striped table-condensed table-hover">
        	<tr>
            	<th width="300">Nombre</th>
                <th width="200">Tipo</th>
                <th width="150">Precio Unitario</th>
                <th width="150">Precio Distribuidor</th>
                <th width="150">Fecha Registro</th>
                <th width="50">Opciones</th>
            </tr>';

		echo '<tr>
				<td>'.$registro2['nomb_prod'].'</td>
				<td>'.$registro2['tipo_prod'].'</td>
				<td>S/. '.$registro2['precio_unit'].'</td>
				<td>S/. '.$registro2['precio_dist'].'</td>
				<td>'.fechaNormal($registro2['fecha_reg']).'</td>
				<td><a href="javascript:editarProducto('.$registro2['id_prod'].');" class="glyphicon glyphicon-edit"></a> <a href="javascript:eliminarProducto('.$registro2['id_prod'].');" class="glyphicon glyphicon-remove-circle"></a></td>
				</tr>';
	}
// }else{
// 	echo '<tr>
// 				<td colspan="6">No se encontraron resultados</td>
// 			</tr>';
// }
echo '</table>';
?>