<!--/**
* Asignatura = vista ; Permite ver el listado de asignaturas.
*
* @package    ModeloAulafrontino
* @license    http://www.gnu.org/licenses/gpl.txt  GNU GPL 3.0
* @author     Equipo de desarrollo Aula Frontino <aulafrontino@gmail.com>
* @link       https://github.com/EquipoAulaFrontino
* @version    v1.0
*/-->
<?php
    $consultar= $registrar= $desactivar=false;
    for($i=0;$i<count($laModulos);$i++)
    {
        $laServicios=$lobjRol->consultar_servicios($laModulos[$i][0]);
        for ($j=0; $j <count($laServicios) ; $j++) //Se recorre un ciclo para poder extraer los datos de cada uno de los servicios que tiene asignado el modulo para poder constuir el menú
        {
            if($laServicios[$j][2]=='traspaso/consultar_traspaso')
            {
                $consultar=true;
            }
            if($laServicios[$j][2]=='traspaso/registrar_traspaso')
            {

                $registrar=true;
            }
            if($laServicios[$j][2]=='traspaso/desactivar_traspaso')
            {
                $desactivar=true;
            }
        }
    }
?>
<script>
    function buscar(id)
    {
        window.location.href="?vista=traspaso/consultar_traspaso&id="+id;
    }
    function desactivar(id)
    {
        if(confirm("¿Está seguro que desea desactivar el traspaso seleccionada?"))
        {
          document.getElementById("cam_idasignatura").value=id;
          document.form_traspaso.submit();
        }
    }

    function activar(id)
    {
        if(confirm("¿Desea activar la asignatura seleccionada?"))
        {
            document.getElementById("cam_idtmovimiento").value=id;
            document.getElementById("cam_operacion").value='activar_traspaso';
            document.form_traspaso.submit();
        }
    }
</script>
<h1 class="page-header">Traspaso</h1>
<!-- EMPIEZA: RECOMENDACION -->
<div class="alert alert-info" role="alert">
    <strong><i class="fa fa-info-circle"></i></strong> Aquí podras registrar, cosultar, modificar y desactivar los traspasos del sistema.
</div>
<!-- FIN: RECOMENDACION -->
<?php
    if($registrar)
    {
        echo '<a class="btn btn-success" id="btn_registrar" href="?vista=traspaso/registrar_traspaso"><i class="fa fa-plus"></i> Registrar Movilización</a>';
    }
?>
<form role="form" class="form" action="../controlador/control_traspaso.php" method="POST" name="form_traspaso" role="form" class="form">
    <input type="hidden" value="desactivar_traspaso" name="operacion" id="cam_operacion"/>
    <input type="hidden"  name="idtmovimiento" id="cam_idtmovimiento"/>
    <table class="table table-striped table-hover table-bordered bootstrap-datatable datatable dataTable" id="filtro">
      <thead>
          <th>Codigo</th><th>Activo</th><th>Fecha</th><th>Desde</th><th>Hasta</th><th>Observación</th><?php if($consultar || $desactivar)
                  { echo '<th>Operación</th>';}?>
      </thead>
        <tbody>
        <?php
                require_once('../clases/clase_movilizacion.php');
                $lobjMovilizacion=new clsMovilizacion;
                $laMovilizacion=$lobjMovilizacion->listar_movimientos();
                for($i=0;$i<count($laMovilizacion);$i++)
                {
                    echo '<tr>';
                    echo '<td>'.$laMovilizacion[$i]['idtejemplar'].'</td>';
                    echo '<td>'.$laMovilizacion[$i]['nombrejemp'].'</td>';
                    echo '<td>'.strtoupper($laMovilizacion[$i]['fechamov']).'</td>';
                    echo '<td>'.strtoupper($laMovilizacion[$i]['denominacion']).'</td>';
                    echo '<td>'.strtoupper($laMovilizacion[$i]['departamento']).'</td>';
                    echo '<td>'.$laMovilizacion[$i]['observacionmov'].'</td>';


                    if($consultar || $desactivar)
                    {
                        echo '<td>';
                        if($consultar)
                        {
                            echo '<a class="btn-sm btn-info" href="#" onclick="buscar('.$laMovilizacion[$i]['idtmovimiento'].')"><i class="fa fa-search icon-white"></i></a>';
                        }

                        echo "</td>";
                    }
                    echo '</tr>';
                }
            ?>
            </tbody>
    </table>
</form>
