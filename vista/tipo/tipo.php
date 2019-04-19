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
            if($laServicios[$j][2]=='tipo/consultar_tipo')
            {
                $consultar=true;
            }
            if($laServicios[$j][2]=='tipo/registrar_tipo')
            {

                $registrar=true;
            }
            if($laServicios[$j][2]=='tipo/desactivar_tipo')
            {
                $desactivar=true;
            }
        }
    }
?>
<script>
function buscar(id)
{
    window.location.href="?vista=tipo/consultar_tipo&id="+id;
}

function desactivar(id)
{
    if(confirm("¿Está seguro que desea desactivar el tipo seleccionado?"))
    {
      document.getElementById("cam_idttipo").value=id;
      document.form_tipo.submit();
    }
}

function activar(id)
{
    if(confirm("¿Desea activar el tipo selecionado?"))
    {
        document.getElementById("cam_idttipo").value=id;
        document.getElementById("cam_operacion").value='activar_tipo';
        document.form_tipo.submit();
    }
}
</script>    
<h1 class="page-header">Tipo</h1>
            <div class="alert alert-info" role="alert">
    <i class="fa fa-info-circle"></i> Aquí podras registrar, consultar y modificar los tipos.
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
        echo '<a class="btn btn-success" id="btn_registrar" href="?vista=tipo/registrar_tipo"><i class="fa fa-plus"></i> Registrar tipo</a>';
    }
    ?>
    <form action="../controlador/control_tipo.php" method="POST" name="form_tipo" role="form" class="form">
        <input type="hidden" value="desactivar_tipo" name="operacion" id="cam_operacion"/>
        <input type="hidden"  name="idttipo" id="cam_idttipo"/>
        <table class="cell-border compact hover stripe" id="filtro">
            <thead>
                <th>Nro.</th><th>Nombre</th><?php if($consultar || $desactivar)
                        { echo '<th>Operación</th>';}?>
            </thead>
            <tbody>
            <?php
                require_once('../clases/clase_tipo.php');
                $lobjTipo=new clsTipo;
                $laTipos=$lobjTipo->listar_tipo();
                for($i=0;$i<count($laTipos);$i++)
                {
                    echo '<tr>';
                    echo '<td>'.($i+1).'</td>';
                    echo '<td>'.$laTipos[$i]['nombretip'].' </td>';
                    if($consultar || $desactivar)
                    {
                        echo '<td>';
                        if($consultar)
                        {
                            echo '<a class="btn btn-info" href="#" onclick="buscar('.$laTipos[$i]['idttipo'].')"><i class="fa fa-search"></i></a>';
                        }
                        if($desactivar)
                        {
                            if($laTipos[$i]['estatustip']=='1')
                            {
                                echo ' <a class="btn btn-danger" href="#" onclick="desactivar('.$laTipos[$i]['idttipo'].')" ><i class="fa fa-remove"></i></a>';

                            }
                            elseif ($laTipos[$i]['estatustip']=='0') 
                            {
                                echo ' <a class="btn btn-warning" title="Restaurar" href="#" onclick="activar('.$laTipos[$i]['idttipo'].')" ><i class="fa fa-refresh"></i></a>';
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
