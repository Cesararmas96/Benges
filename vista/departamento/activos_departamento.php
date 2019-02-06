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
    require_once("../clases/clase_departamento.php");
    $lobjDepartamentos=new clsDepartamento;

    $id=(isset($_GET['id']))?$_GET['id']:"";

    $lobjDepartamentos->set_departamento($id);
    $laDepartamentos=$lobjDepartamentos->nombre_departamento();
?>
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

            if($laServicios[$j][2]=='departamento/desactivar_departamento')
            {
                $desactivar=true;
            }
             if($laServicios[$j][2]=='departamento/activos_departamento')
            {
                $listar=true;
            }
            if($laServicios[$j][2]=='departamento/departamento_ejemplar')
           {
               $reporte=true;
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
<h1 class="page-header">Departamento de  <?php echo strtolower($laDepartamentos['denominacion']);?></h1>
<!-- EMPIEZA: RECOMENDACION -->
<div class="alert alert-info" role="alert">
    <strong><i class="fa fa-info-circle"></i></strong> Aquí podras registrar cosultar los departamento.
</div>
<!-- FIN: RECOMENDACION -->
<?php
if($reporte)
{
    echo '<a class="btn btn-success" id="btn_reporte" target="_blank" href="../reporte/departamento_ejemplar.php?id='.$id.'"><i class="fa fa-file-text"></i> Listar activos</a>';
}
?>
<!-- EMPIEZA: FORMULARIO -->
<form role="form" class="form" action="../controlador/control_departamento.php" method="POST" name="form_departamento">
    <input type="hidden" value="desactivar_departamento" name="operacion" id="cam_operacion"/>
    <input type="hidden"  name="iddepartamento" id="cam_iddepartamento"/>
    <table class="table table-striped table-hover table-bordered bootstrap-datatable datatable dataTable" id="filtro">
        <thead>
            <th>N°</th><th>Codigo</th><th>serial</th><th>Descripcion</th><th>Condicion</th>
        </thead>
        <tbody>
        <?php
                require_once('../clases/clase_departamento.php');
                $lobjDepartamento=new clsDepartamento;
                $id=(isset($_GET['id']))?$_GET['id']:"";
                $lobjDepartamento->set_departamento($id);
                $laDepartamento=$lobjDepartamento->ejemplares_departamento();
                for($i=0;$i<count($laDepartamento);$i++)
                {
                    echo '<tr>';
                    echo '<td>'.($i+1).'</td>';
                    echo '<td>'.$laDepartamento[$i]['idtejemplar'].'</td>';
                    echo '<td>'.$laDepartamento[$i]['serialejemp'].'</td>';
                    echo '<td>'.$laDepartamento[$i]['descripcionejemp'].'</td>';
                    echo '<td>'.$laDepartamento[$i]['nombrecond'].'</td>';

                     echo '</tr>';
                    }
                    ?>
        </thead>
        <tbody>

            </tbody>
    </table>
</form>
<!-- FIN: FORMULARIO -->
