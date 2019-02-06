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
            if($laServicios[$j][2]=='personal/consultar_personal')
            {
                $consultar=true;
            }
            if($laServicios[$j][2]=='personal/registrar_personal')
            {

                $registrar=true;
            }
            if($laServicios[$j][2]=='personal/desactivar_personal')
            {
                $desactivar=true;
            }
        }
    }
?>
<script>
function buscar(id)
{
    window.location.href="?vista=personal/consultar_personal&id="+id;
}

function desactivar(id)
{
    if(confirm("¿Está seguro que desea desactivar el personal seleccionado?"))
    {
      document.getElementById("cam_idtpersona").value=id;
      document.form_personal.submit();
    }
}

function activar(id)
{
    if(confirm("¿Desea activar el personal selecionado?"))
    {
        document.getElementById("cam_idtpersona").value=id;
        document.getElementById("cam_operacion").value='activar_personal';
        document.form_personal.submit();
    }
}
</script>    
<h1 class="page-header">Persona</h1>
    <!-- EMPIEZA: RECOMENDACION -->
          <div class="alert alert-info" role="alert">
            <strong><i class="fa fa-info-circle"></i></strong> Aquí podras registrar, cosultar, modificar y eliminar los personals del sistema.
          </div>
    <!-- FIN: RECOMENDACION -->
    <?php
    if($registrar)
    {
        echo '<a class="btn btn-success" id="btn_registrar" href="?vista=personal/registrar_personal"><i class="fa fa-plus"></i> Registrar personal</a>';
    }
    if($registrar)
    {
        echo '<a class="btn btn-success" id="btn_reporte" target="_blank" href="../reporte/listado_personal.php"><i class="fa fa-file-text"></i> Listado de Personas</a>';
    }
    ?>

    <form action="../controlador/control_personal.php" method="POST" name="form_personal" role="form" class="form">
        <input type="hidden" value="desactivar_personal" name="operacion" id="cam_operacion"/>
        <input type="hidden"  name="idtpersona" id="cam_idtpersona"/>
        <table class="cell-border compact hover stripe" id="filtro">
            <thead>
                <th>Nro.</th><th>Cédula</th><th>Apellido</th><th>Nombre</th><th>Télefono</th><th>Correo</th><?php if($consultar || $desactivar)
                        { echo '<th>Operación</th>';}?>
            </thead>
            <tbody>
            <?php
                require_once('../clases/clase_personal.php');
                $lobjPersona= new clsPersona;
                $laPersona=$lobjPersona->listar_personas();
                for($i=0;$i<count($laPersona);$i++)
                {
                    echo '<tr>';
                    echo '<td>'.($i+1).'</td>';
                    echo '<td>'.$laPersona[$i]['idtpersona'].'</td>';
                    echo '<td>'.$laPersona[$i]['apellidounoper'].'</td>';
                    echo '<td>'.$laPersona[$i]['nombreunoper'].' </td>';
                    echo '<td>'.$laPersona[$i]['telefonoper'].'</td>';
                    echo '<td>'.$laPersona[$i]['correoper'].'</td>';
                   if($consultar || $desactivar)
                   {
                       echo '<td>';
                       if($consultar)
                       {
                           echo '<a class="btn btn-info" href="#" onclick="buscar('.$laPersona[$i]['idtpersona'].')"><i class="fa fa-search"></i></a>';
                        
                       if($desactivar)
                       {
                           if($laPersona[$i]['estatusper']=='1')
                          {
                               echo ' <a class="btn btn-danger" href="#" onclick="desactivar('.$laPersona[$i]['idtpersona'].')" ><i class="fa fa-remove"></i></a>';

                           }
                           elseif ($laPersona[$i]['estatusper']=='0') 
                           {
                               echo ' <a class="btn btn-warning" title="Restaurar" href="#" onclick="activar('.$laPersona[$i]['idtpersona'].')" ><i class="fa fa-refresh"></i></a>';
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
