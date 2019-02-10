<?php
	$consultar= $registrar= $eliminar=false;
	for($i=0;$i<count($laModulos);$i++)
    {
        $laServicios=$lobjRol->consultar_servicios($laModulos[$i][0]);
        for ($j=0; $j <count($laServicios) ; $j++) //Se recorre un ciclo para poder extraer los datos de cada uno de los servicios que tiene asignado el modulo para poder constuir el menú
        {
            if($laServicios[$j][2]=='bien/consultar_bien')
            {
                $consultar=true;
            }
            if($laServicios[$j][2]=='bien/registrar_bien')
            {

                $registrar=true;
            }
            if($laServicios[$j][2]=='bien/desactivar_bien')
            {
                $desactivar=true;
            }
        }
    }
?>
<script>
 function buscar(id)
 {
    window.location.href="?vista=bien/consultar_bien&id="+id;
 }
  function desactivar(id)
  {
     if(confirm("¿Esta seguro que desea desactivar el bien seleccionado?"))
    {
      document.getElementById("cam_idtcatalogo").value=id;
      document.form_catalogo.submit();
    }
  }
  function activar(id)
{
    if(confirm("¿Desea activar el catalogo selecionado?"))
    {
        document.getElementById("cam_idtcatalogo").value=id;
        document.getElementById("cam_operacion").value='activar_bien';
        document.form_catalogo.submit();
    }
}
</script>
<h1 class="page-header">Catalogo</h1>
<!-- EMPIEZA: RECOMENDACION -->
<div class="alert alert-info" role="alert">
    <strong><i class="fa fa-info-circle"></i></strong> Aquí podras registrar cosultar los Catalogos de los Activos.
</div>
<!-- FIN: RECOMENDACION -->
<?php
	if($registrar)
	{
		echo '<a class="btn btn-success" id="btn_registrar" href="?vista=bien/registrar_bien"><i class="fa fa-plus"></i> Registrar Catalogo</a>';
	}
 if($registrar)
    {
        echo '<a class="btn btn-success" id="btn_reporte" target="_blank" href="../reporte/listado_catalogo.php"><i class="fa fa-file-text"></i> Listado de Catalogo</a>';
    }
?>
<!-- EMPIEZA: FORMULARIO -->
<form role="form" class="form" action="../controlador/control_bien.php" method="POST" name="form_catalogo">
    <input type="hidden" value="desactivar_bien" name="operacion" id="cam_operacion" />
    <input type="hidden"  name="idtcatalogo" id="cam_idtcatalogo"/>
    <table class="table table-striped table-hover table-bordered bootstrap-datatable datatable dataTable" id="filtro">
        <thead>
            <th>Tipo</th><th>Clasificacion</th><th>Marca</th><th>Modelo</th><th>Color</th><th>Cantidad</th><?php if($consultar || $desactivar)
                    { echo '<th>Operación</th>';}?>
        </thead>
        <tbody>
          <?php
                require_once('../clases/clase_bien.php');
                $lobjCatalogo= new clsBien;
                $laCatalogo=$lobjCatalogo-> listar_bien();
                for($i=0;$i<count($laCatalogo);$i++)
                {
                    echo '<tr>';
                    echo '<td>'.$laCatalogo[$i]['nombretip'].' </td>';
                    echo '<td>'.$laCatalogo[$i]['nombrecat'].' </td>';
                    echo '<td>'.$laCatalogo[$i]['nombremar'].' </td>';
                    echo '<td>'.$laCatalogo[$i]['nombremode'].' </td>';
                    echo '<td>'.$laCatalogo[$i]['nombrecol'].' </td>';
                    echo '<td>'.$laCatalogo[$i]['cantidadcat'].' </td>';
                   if($consultar || $desactivar)
                   {
                       echo '<td>';
                       if($consultar)
                       {
                           echo '<a class="btn btn-info" href="#" onclick="buscar('.$laCatalogo[$i]['idtcatalogo'].')"><i class="fa fa-search"></i></a>';

                       if($desactivar)
                       {
                           if($laCatalogo[$i]['estatuscata']=='1')
                          {
                               echo ' <a class="btn btn-danger" href="#" onclick="desactivar('.$laCatalogo[$i]['idtcatalogo'].')" ><i class="fa fa-remove"></i></a>';

                           }
                           elseif ($laCatalogo[$i]['estatuscata']=='0')
                           {
                               echo ' <a class="btn btn-warning" title="Restaurar" href="#" onclick="activar('.$laCatalogo[$i]['idtcatalogo'].')" ><i class="fa fa-refresh"></i></a>';
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
