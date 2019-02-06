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
            if($laServicios[$j][2]=='condicion/consultar_condicion')
            {
                $consultar=true;
            }
            if($laServicios[$j][2]=='condicion/registrar_condicion')
            {

                $registrar=true;
            }
            if($laServicios[$j][2]=='condicion/desactivar_condicion')
            {
                $desactivar = true;


            }
        }
    }
?>
<script>

 function buscar(id)
 {
    window.location.href="?vista=condicion/consultar_condicion&id="+id;
 }
  function desactivar(id)
{
    if(confirm("¿Está seguro que desea desactivar el condicion seleccionado?"))
    {
      document.getElementById("cam_idtcondicion").value=id;
      document.form_condicion.submit();
    }
}

function activar(id)
{
    if(confirm("¿Desea activar el condicion selecionado?"))
    {
        document.getElementById("cam_idtcondicion").value=id;
        document.getElementById("cam_operacion").value='activar_condicion';
        document.form_condicion.submit();
    }
}
</script>    
<h1 class="page-header">Condicion</h1>
<!-- EMPIEZA: RECOMENDACION -->
<div class="alert alert-info" role="alert">
    <strong><i class="fa fa-info-circle"></i></strong> Aquí podras registrar cosultar las condicions.
</div>
<!-- FIN: RECOMENDACION -->
<?php
if($registrar)
{
    echo '<a class="btn btn-success" id="btn_registrar" href="?vista=condicion/registrar_condicion"><i class="fa fa-plus"></i> Registrar Condicion</a>';
}
?> 
<!-- EMPIEZA: FORMULARIO -->
    <form action="../controlador/control_condicion.php" method="POST" name="form_condicion" role="form" class="form">

    <input type="hidden" value="desactivar_condicion" name="operacion" id="cam_operacion" />
    <input type="hidden"  name="idtcondicion" id="cam_idtcondicion"/>
    <table class="cell-border compact hover stripe" id="filtro">
        <thead>
             <th>Codigo</th><th>Nombre</th><?php if($desactivar || $consultar)
                        { echo '<th>Operación</th>';} ?>
        </thead>
        <tbody>
        	<?php
        	require_once('../clases/clase_condicion.php');
                $lobjCondiciones=new clsCondicion;
                $laCondicion=$lobjCondiciones->listar_condicion();
                for($i=0;$i<count($laCondicion);$i++)
                {
                    echo '<tr>';
                    echo '<td>'.$laCondicion[$i]['idtcondicion'].'</td>';
                    echo '<td>'.$laCondicion[$i]['nombrecond'].' </td>';
                     if($consultar || $desactivar){
                  
                    	echo '<td>';
                    	if($consultar)
                    	{
                        echo '<a class="btn btn-info" href="#" onclick="buscar('.$laCondicion[$i]['idtcondicion'].')"><i class="fa fa-search"></i></a>';
                    	}
                    	if($desactivar)
                    		{
                            if($laCondicion[$i]['estatuscond']=='1')
                            {
                                echo ' <a class="btn btn-danger" href="#" onclick="desactivar('.$laCondicion[$i]['idtcondicion'].')" ><i class="fa fa-remove"></i></a>';

                            }
                            elseif ($laCondicion[$i]['estatuscond']=='0') 
                            {
                                echo ' <a class="btn btn-warning" title="Restaurar" href="#" onclick="activar('.$laCondicion[$i]['idtcondicion'].')" ><i class="fa fa-refresh"></i></a>';
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
<!-- FIN: FORMULARIO --> 