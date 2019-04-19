<!--/**
* Estudiante = vista ; Permite ver el listado de estudiantes.
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
            if($laServicios[$j][2]=='marca/consultar_marca')
            {
                $consultar=true;
            }
            if($laServicios[$j][2]=='marca/registrar_marca')
            {

                $registrar=true;
            }
            if($laServicios[$j][2]=='marca/desactivar_marca')
            {
                $desactivar=true;
            }
        }
    }
?>
<script>
function buscar(id)
{
    window.location.href="?vista=marca/consultar_marca&id="+id;
}

function desactivar(id)
{
    if(confirm("¿Está seguro que desea desactivar la marca seleccionada?"))
    {
      document.getElementById("cam_idtmarca").value=id;
      document.form_marca.submit();
    }
}

function activar(id)
{
    if(confirm("¿Desea activar la marca seleccioanda?"))
    {
        document.getElementById("cam_idtmarca").value=id;
        document.getElementById("cam_operacion").value='activar_marca';
        document.form_marca.submit();
    }
}
</script>    
<h1 class="page-header">Marca</h1>
    <!-- EMPIEZA: RECOMENDACION -->
    <div class="alert alert-info" role="alert">
        <i class="fa fa-info-circle"></i> Aquí podras registrar, consultar y modificar las marcas.
        <br>
        <i class="fa fa-info-circle"></i> Permite al usuario desactivar el registro <i class="fa fa-remove"></i>.
        <br>
        <i class="fa fa-info-circle"></i> Permite al usuario activar el registro <i class="fa fa-refresh"> </i>.
        <br>
        <i class="fa fa-info-circle"></i> Permite al usuario consultar/modificar el registro <i class="fa fa-search"></i>.
    </div>

    <!-- FIN: RECOMENDACION -->
    <?php
    if($registrar)
    {
        echo '<a class="btn btn-success" id="btn_registrar" href="?vista=marca/registrar_marca"><i class="fa fa-plus"></i> Registrar marca</a>';
    }
    ?>
    <form action="../controlador/control_marca.php" method="POST" name="form_marca" role="form" class="form">
        <input type="hidden" value="desactivar_marca" name="operacion" id="cam_operacion"/>
        <input type="hidden"  name="idtmarca" id="cam_idtmarca"/>
        <table class="cell-border compact hover stripe" id="filtro">
            <thead>
                <th>Nro.</th><th>Nombre</th><?php if($consultar || $desactivar)
                        { echo '<th>Operación</th>';}?>
            </thead>
            <tbody>
            <?php
                require_once('../clases/clase_marca.php');
                $lobjMarca=new clsMarca;
                $laMarcas=$lobjMarca->listar_marca();
                for($i=0;$i<count($laMarcas);$i++)
                {
                    echo '<tr>';
                    echo '<td>'.($i+1).'</td>';
                    echo '<td>'.$laMarcas[$i]['nombremar'].' </td>';
                    if($consultar || $desactivar)
                    {
                        echo '<td>';
                        if($consultar)
                        {
                            echo '<a class="btn btn-info" href="#" onclick="buscar('.$laMarcas[$i]['idtmarca'].')"><i class="fa fa-search"></i></a>';
                        }
                        if($desactivar)
                        {
                            if($laMarcas[$i]['estatusmar']=='1')
                            {
                                echo ' <a class="btn btn-danger" href="#" onclick="desactivar('.$laMarcas[$i]['idtmarca'].')" ><i class="fa fa-remove"></i></a>';

                            }
                            elseif ($laMarcas[$i]['estatusmar']=='0') 
                            {
                                echo ' <a class="btn btn-warning" title="Restaurar" href="#" onclick="activar('.$laMarcas[$i]['idtmarca'].')" ><i class="fa fa-refresh"></i></a>';
                            }
                        }
                        echo "</td>";
                    }
                    echo '</tr>';
                }
            ?>
                </tbody>
        </table>
    </form>
