<?php
$consultar= $registrar= $desactivar=false;
for($i=0;$i<count($laModulos);$i++) 
    {
        $laServicios=$lobjRol->consultar_servicios($laModulos[$i][0]); 
        for ($j=0; $j <count($laServicios) ; $j++) //Se recorre un ciclo para poder extraer los datos de cada uno de los servicios que tiene asignado el modulo para poder constuir el menú
        {
            if($laServicios[$j][2]=='reasignacion/consultar_reasignacion')
            {
                $consultar=true;
            }
            if($laServicios[$j][2]=='reasignacion/registrar_reasignacion')
            {

                $registrar=true;
            }
            if($laServicios[$j][2]=='reasignacion/desactivar_reasignacion')
            {
                $desactivar=true;
            }
        }
    }
?>
<!-- <script>
function buscar(id)
{
    window.location.href="?vista=categoria/consultar_categoria&id="+id;
}

function desactivar(id)
{
    if(confirm("¿Está seguro que desea desactivar la categoria seleccionada?"))
    {
      document.getElementById("cam_idtcategoria").value=id;
      document.form_categoria.submit();
    }
}

function activar(id)
{
    if(confirm("¿Desea activar la categoria seleccioanda?"))
    {
        document.getElementById("cam_idtcategoria").value=id;
        document.getElementById("cam_operacion").value='activar_categoria';
        document.form_categoria.submit();
    }
}
</script>     -->
<h1 class="page-header">Reasignacion</h1>
    <!-- EMPIEZA: RECOMENDACION -->
          <div class="alert alert-info" role="alert">
            <strong><i class="fa fa-info-circle"></i></strong> Aquí podras reasignar los ejemplares en el sistema.
          </div>
    <!-- FIN: RECOMENDACION -->
    <?php
    if($registrar)
    {
        echo '<a class="btn btn-success" id="btn_registrar" href="?vista=reasignacion/registrar_reasignacion"><i class="fa fa-plus"></i> Realizar reasignacion</a>';
    }
    ?>
     <form action="../controlador/control_asignacion.php" method="POST" name="form_categoria" role="form" class="form">
        <input type="hidden" value="desactivar_categoria" name="operacion" id="cam_operacion"/>
        <input type="hidden"  name="idtcategoria" id="cam_idtcategoria"/>
        <!-- <table class="cell-border compact hover stripe" id="filtro">
            <thead>
                <th>Nro.</th><th>Nombre</th><th>Tipo</th><?php if($consultar || $desactivar)
                        // { echo '<th>Operación</th>';}?>
            </thead>
            <tbody> -->
            <!-- <?php 
                    // require_once('../clases/clase_categoria.php');
                    // $lobjCategoria=new clsCategoria;
                    // $laCategorias=$lobjCategoria->listar_categoria();
                    // for($i=0;$i<count($laCategorias);$i++)
                    {
                    // echo '<td>'.$laCategorias[$i]['idtcategoria'].'</td>';
                    // echo '<td>'.$laCategorias[$i]['nombrecat'].'</td>';
                    // echo '<td>'.$laCategorias[$i]['tipo'].'</td>';

                    // if($consultar || $desactivar)
                    {
                        // echo '<td>';
                        // if($consultar)
                        {
                            // echo '<a class="btn btn-info btn-sm" href="#" onclick="buscar('.$laCategorias[$i]['idtcategoria'].')"><i class="fa fa-search"></i></a>';
                        }
                        // if($desactivar)
                       {
                           // if($laCategorias[$i]['estatuscat']=='1')
                          {
                               // echo ' <a class="btn btn-danger" href="#" onclick="desactivar('.$laCategorias[$i]['idtcategoria'].')" ><i class="fa fa-remove"></i></a>';

                           }
                           // elseif ($laCategorias[$i]['estatuscat']=='0') 
                           {
                               // echo ' <a class="btn btn-warning" title="Restaurar" href="#" onclick="activar('.$laCategorias[$i]['idtcategoria'].')" ><i class="fa fa-refresh"></i></a>';
                           }
                       }
                    }
                    // echo '</tr>';
                    }
                ?>-->
                </tbody>
        </table>
    </form>
