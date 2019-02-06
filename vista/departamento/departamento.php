<!--/**
* Módulo = vista ; Permite ver el listado de módulos registrados.
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
            if($laServicios[$j][2]=='departamento/consultar_departamento')
            {
                $consultar=true;
            }
            if($laServicios[$j][2]=='departamento/registrar_departamento')
            {

                $registrar=true;
            }
            if($laServicios[$j][2]=='departamento/desactivar_departamento')
            {
                $desactivar=true;
            }
             if($laServicios[$j][2]=='departamento/activos_departamento')
            {
                $listar=true;
            }

        }
    }
?>
<script>
function buscar(id)
{
    window.location.href="?vista=departamento/consultar_departamento&id="+id;
}
function lista(id)
{
    window.location.href="?vista=departamento/activos_departamento&id="+id;
}

function desactivar(id)
{
    if(confirm("¿Está seguro que desea desactivar el departamento seleccionado?"))
    {
      document.getElementById("cam_iddepartamento").value=id;
      document.form_departamento.submit();
    }
}

function activar(id)
{
    if(confirm("¿Desea activar el departamento selecionado?"))
    {
        document.getElementById("cam_iddepartamento").value=id;
        document.getElementById("cam_operacion").value='activar_departamento';
        document.form_departamento.submit();
    }
}
</script>
<h1 class="page-header">Departamento</h1>
<!-- EMPIEZA: RECOMENDACION -->
<div class="alert alert-info" role="alert">
    <strong><i class="fa fa-info-circle"></i></strong> Aquí podras registrar cosultar los departamento.
</div>
<!-- FIN: RECOMENDACION -->
<?php
if($registrar)
{
    echo '<a class="btn btn-success" id="btn_registrar" href="?vista=departamento/registrar_departamento"><i class="fa fa-plus"></i> Registrar departamento</a>';
}

?>
<!-- EMPIEZA: FORMULARIO -->
<form role="form" class="form" action="../controlador/control_departamento.php" method="POST" name="form_departamento">
    <input type="hidden" value="desactivar_departamento" name="operacion" id="cam_operacion"/>
    <input type="hidden"  name="iddepartamento" id="cam_iddepartamento"/>
    <table class="table table-striped table-hover table-bordered bootstrap-datatable datatable dataTable" id="filtro">
        <thead>
            <th>Codigo</th><th>Denominacion</th><th>Encargado</th><th>Sede</th><?php if($consultar || $desactivar || $listar)
                    { echo '<th>Operación</th>';}?>
        </thead>
        <tbody>
        <?php
                require_once('../clases/clase_departamento.php');
                $lobjDepartamento=new clsDepartamento;
                $laDepartamento=$lobjDepartamento->listar_departamento();
                for($i=0;$i<count($laDepartamento);$i++)
                {
                    echo '<td>'.$laDepartamento[$i]['iddepartamento'].'</td>';
                    echo '<td>'.$laDepartamento[$i]['denominacion'].'</td>';
                    echo '<td>'.$laDepartamento[$i]['nomyape'].'</td>';
                    echo '<td>'.$laDepartamento[$i]['nombresede'].'</td>';

                    if($consultar || $desactivar || $listar)
                    {
                        echo '<td>';
                        if($consultar)
                        {
                            echo '<a class="btn btn-info btn-sm" href="#" onclick="buscar('.$laDepartamento[$i]['iddepartamento'].')"><i class="fa fa-search"></i></a>';
                        }
                         if($desactivar)
                       {
                           if($laDepartamento[$i]['estatusdep']=='1')
                          {
                               echo ' <a class="btn btn-danger" href="#" onclick="desactivar('.$laDepartamento[$i]['iddepartamento'].')" ><i class="fa fa-remove"></i></a>';

                           }
                           elseif ($laDepartamento[$i]['estatusdep']=='0')
                           {
                               echo ' <a class="btn btn-warning" title="Restaurar" href="#" onclick="activar('.$laDepartamento[$i]['iddepartamento'].')" ><i class="fa fa-refresh"></i></a>';
                           }
                       }if($listar)

                        echo '
                            <a class="btn btn-warning" href="#" onclick="lista('.$laDepartamento[$i]['iddepartamento'].')" ><i class="fa fa-file-text"></i></a>';

                        echo "</td>";

                    }

                    echo '</tr>';
                }
            ?>
            </tbody>
    </table>
</form>
<!-- FIN: FORMULARIO -->
