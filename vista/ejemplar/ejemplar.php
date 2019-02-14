<?php
	$consultar= $registrar= $eliminar=false;
	for($i=0;$i<count($laModulos);$i++)
    {
        $laServicios=$lobjRol->consultar_servicios($laModulos[$i][0]);
        for ($j=0; $j <count($laServicios) ; $j++) //Se recorre un ciclo para poder extraer los datos de cada uno de los servicios que tiene asignado el modulo para poder constuir el menú
        {
            if($laServicios[$j][2]=='ejemplar/consultar_ejemplar')
            {
                $consultar=true;
            }
            if($laServicios[$j][2]=='ejemplar/registrar_ejemplar')
            {

                $registrar=true;
            }
            if($laServicios[$j][2]=='ejemplar/desactivar_ejemplar')
            {
                $desactivar=true;
            }
						if($laServicios[$j][2]=='../reporte/listado_ejemplar')
						{
								$desactivar=true;
						}
        }
    }
?>
<script>
 function buscar(id)
 {
    window.location.href="?vista=ejemplar/consultar_ejemplar&id="+id;
 }
 function reporte(id)
 {
		window.location.href="?vista=../reporte/listado_ejemplar&id="+id;
 }
  function desactivar(id)
  {
     if(confirm("¿Esta seguro que desea desactivar el ejemplar seleccionado?"))
    {
      document.getElementById("cam_idtejemplar").value=id;
      document.form_ejemplar.submit();
    }
  }
    function activar(id)
{
    if(confirm("¿Desea activar el ejemplar selecionado?"))
    {
        document.getElementById("cam_idtejemplar").value=id;
        document.getElementById("cam_operacion").value='activar_ejemplar';
        document.form_ejemplar.submit();
    }
}
</script>
<h1 class="page-header">Activos</h1>
<!-- EMPIEZA: RECOMENDACION -->
<div class="alert alert-info" role="alert">
    <strong><i class="fa fa-info-circle"></i></strong> Aquí podras registrar y consultar los Ejemplares de los mobiliarios. 
</div>
<!-- FIN: RECOMENDACION -->

<?php
	if($registrar)
	{
		echo '<a class="btn btn-success" id="btn_registrar" href="?vista=ejemplar/registrar_ejemplar"><i class="fa fa-plus"></i> Registrar Activo</a>';
	}
  {
        echo '<a class="btn btn-success" id="btn_reporte" target="_blank" href="../reporte/listado_ejemplar.php"><i class="fa fa-file-text"></i> Listado de ejemplar</a>';
    }
?>
<!-- EMPIEZA: FORMULARIO -->
<form role="form" class="form" action="../controlador/control_ejemplar.php" method="POST" name="form_ejemplar">
    <input type="hidden" value="desactivar_ejemplar" name="operacion" id="cam_operacion"/>
    <input type="hidden"  name="idtejemplar" id="cam_idtejemplar"/>
    <table class="table table-striped table-hover table-bordered bootstrap-datatable datatable dataTable" id="filtro">
        <thead>
            <th>Codigo</th><th>Serial</th><th>Cantidad</th><th>Condicion</th><th>Descripcion</th><th>Fecha del Registro</th><th>Catalogo</th><?php if($consultar || $desactivar || $listar)
                    { echo '<th>Operación</th>';}?>
        </thead>
        <tbody>
          <?php
                require_once('../clases/clase_ejemplar.php');
                $lobjEjemplar= new clsEjemplar;
                $laEjemplar=$lobjEjemplar->listar_ejemplar();
                for($i=0;$i<count($laEjemplar);$i++)
                {
                    echo '<tr>';
                    echo '<td>'.$laEjemplar[$i]['codigoejemp'].'</td>';
                    echo '<td>'.$laEjemplar[$i]['serialejemp'].'</td>';
                    echo '<td>'.$laEjemplar[$i]['cantidadejemp'].'</td>';
                    echo '<td>'.$laEjemplar[$i]['nombrecond'].'</td>';
                    echo '<td>'.$laEjemplar[$i]['descripcionejemp'].'</td>';
                    echo '<td>'.$laEjemplar[$i]['fecharegistroejemp'].'</td>';
                    echo '<td>'.$laEjemplar[$i]['descripcioncat'].'</td>';

          

										if($consultar || $desactivar)
								  {
                       echo '<td>';

                       if($consultar)
                       {
                           echo '<a class="btn btn-info" href="#" onclick="buscar('.$laEjemplar[$i]['idtejemplar'].')"><i class="fa fa-search"></i></a>';

                       if($desactivar)
                       {
                           if($laEjemplar[$i]['estatusejemp']=='1')
                          {
                               echo ' <a class="btn btn-danger" href="#" onclick="desactivar('.$laEjemplar[$i]['idtejemplar'].')" ><i class="fa fa-remove"></i></a>';

                           }
                           else
                            if ($laEjemplar[$i]['estatusejemp']=='0')
                           {

                               echo ' <a class="btn btn-warning" title="Restaurar" href="#" onclick="activar('.$laEjemplar[$i]['idtejemplar'].')" ><i class="fa fa-refresh"></i></a>';


                           echo "</td>";
                           }            


                       }
                        echo "</td>";
                   }
                    echo '</tr>';
                }
              }
            ?>

            </tbody>
    </table>
</form>
<!-- FIN: FORMULARIO -->
