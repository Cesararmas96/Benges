<!--/**
* persona= vista ; Permite ver el listado de personals.
*
* @package    ModeloAulafrontino
* @license    http://www.gnu.org/licenses/gpl.txt  GNU GPL 3.0
* @author     Equipo de desarrollo Aula Frontino <aulafrontino@gmail.com>
* @link       https://github.com/EquipoAulaFrontino
* @version    v1.0
*/-->
<?php
$consultar= $registrar= $eliminar=false;
for($i=0;$i<count($laModulos);$i++) 
    {
        $laServicios=$lobjRol->consultar_servicios($laModulos[$i][0]); 
        for ($j=0; $j <count($laServicios) ; $j++) //Se recorre un ciclo para poder extraer los datos de cada uno de los servicios que tiene asignado el modulo para poder constuir el menú
        {
            if($laServicios[$j][2]=='usuario/consultar_usuario')
            {
                $consultar=true;
            }
            if($laServicios[$j][2]=='usuario/registrar_usuario')
            {

                $registrar=true;
            }
            if($laServicios[$j][2]=='usuario/desactivar_usuario')
            {
                $desactivar=true;
            }

             if($laServicios[$j][2]=='usuario/detalle_usuario')
            {
                $reporte=true;
            }
        }
    }
?>
<script>
function buscar(id)
{
    window.location.href="?vista=usuario/consultar_usuario&id="+id;
}

function desactivar(id)
{
    if(confirm("¿Está seguro que desea desactivar el usuario seleccionado?"))
    {
      document.getElementById("cam_idtusuario").value=id;
      document.form_usuario.submit();
    }
}

function reporte(id)
{
    window.location.href="?vista=reporte/detalle_usuario&id="+id;
}

function activar(id)
{
    if(confirm("¿Desea activar el usuario selecionado?"))
    {
        document.getElementById("cam_idtusuario").value=id;
        document.getElementById("cam_operacion").value='activar_usuario';
        document.form_usuario.submit();
    }
}
</script>    
<h1 class="page-header">Usuario</h1>
    <!-- EMPIEZA: RECOMENDACION -->
          <div class="alert alert-info" role="alert">
            <strong><i class="fa fa-info-circle"></i></strong> Aquí podras registrar, cosultar, modificar y eliminar los usuarios del sistema.
          </div>
    <!-- FIN: RECOMENDACION -->
    <?php
    if($registrar)
    {
        echo '<a style="margin: 0 10px 10px 0" class="btn btn-success" id="btn_registrar" href="?vista=usuario/registrar_usuario"><i class="fa fa-plus"></i> Registrar usuario</a>';
    }
    if($registrar)
    {
        echo '<a style="margin: 0 10px 10px 0" class="btn btn-success" id="btn_reporte" target="_blank" href="../reporte/listado_usuario.php"><i class="fa fa-file-text"></i> Listado de Usuario</a>';
    }

     if($registrar)
    {
        echo '<a style="margin: 0 10px 10px 0" class="btn btn-success" id="btn_reporte" target="_blank" href="../reporte/listado_usuarios_activos.php"><i class="fa fa-file-text"></i> Listado de Usuario Activos</a> ';
    }

    if($registrar){
      echo '<a  style="margin: 0 10px 10px 0" class="btn btn-success" id="btn_reporte" target="_blank" href="../reporte/listado_usuarios_desactivados.php"><i class="fa fa-file-text"></i> Listado de Usuario Desactivados</a>';
    }
    
    ?>
    
    <form action="../controlador/control_usuario.php" method="POST" name="form_usuario" role="form" class="form">
        <input type="hidden" value="desactivar_usuario" name="operacion" id="cam_operacion"/>
        <input type="hidden"  name="idtusuario" id="cam_idtusuario"/>
        <table class="cell-border compact hover stripe" id="filtro">
            <thead>
                <th>Nro.</th><th>Usuario</th><th>Personal</th><th>Cargo</th><?php if($consultar || $desactivar || $reporte)
                        { echo '<th>Operación</th>';}?>
            </thead>
            <tbody>
           <?php
                require_once('../clases/clase_usuario.php');
                $lobjUsuario= new clsUsuario;
                $laUsuario=$lobjUsuario->listar_usuario();
                for($i=0;$i<count($laUsuario);$i++)
                {
                    echo '<tr>';
                    echo '<td>'.($i+1).'</td>';
                    echo '<td>'.$laUsuario[$i]['idtusuario'].'</td>';
                    echo '<td>'.$laUsuario[$i]['nomyape'].'</td>';
                    echo '<td>'.$laUsuario[$i]['nombrerol'].' </td>';
                   if($consultar || $desactivar  || $reporte)
                   {
                       echo '<td>';

                       
                       if($consultar)
                       {
                           echo '<a class="btn btn-info" href="#" onclick="buscar('.$laUsuario[$i]['idtusuario'].')"><i class="fa fa-search"></i></a>';
                        
                       if($desactivar)
                       {
                           if($laUsuario[$i]['estatususu']=='1')
                          {
                               echo ' <a class="btn btn-danger" href="#" onclick="desactivar('.$laUsuario[$i]['idtusuario'].')" ><i class="fa fa-remove"></i></a>';

                           }


                           elseif ($laUsuario[$i]['estatususu']=='0') 
                           {
                               echo ' <a class="btn btn-warning" title="Restaurar" href="#" onclick="activar('.$laUsuario[$i]['idtusuario'].')" ><i class="fa fa-refresh"></i></a>';
                           }                           
                       }

                     if($reporte){

                     
                         echo '<a target="_blank" style="margin-left: 5px" class="btn btn-warning" href="../reporte/detalle_usuario.php?id='.$laUsuario[$i]['idtusuario'].'" data-trigger="hover" data-container="body" data-toggle="popover" data-placement="left" data-content="Detalles del Usuario."><i class="fa fa-file-text"></a>';
                      }
                   }
                    echo '</tr>';
                }
              }
            ?>

                </tbody>
        </table>
    </form >
