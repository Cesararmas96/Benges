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
            if($laServicios[$j][2]=='sede/consultar_sede')
            {
                $consultar=true;
            }
            if($laServicios[$j][2]=='sede/registrar_sede')
            {

                $registrar=true;
            }
            if($laServicios[$j][2]=='sede/desactivar_sede')
            {
                $desactivar = true;


            }
        }
    }
?>
<script>

 function buscar(id)
 {
    window.location.href="?vista=sede/consultar_sede&id="+id;
 }
  function desactivar(id)
{
    if(confirm("¿Está seguro que desea desactivar el sede seleccionado?"))
    {
      document.getElementById("cam_idsede").value=id;
      document.form_sede.submit();
    }
}

function activar(id)
{
    if(confirm("¿Desea activar el sede selecionado?"))
    {
        document.getElementById("cam_idsede").value=id;
        document.getElementById("cam_operacion").value='activar_sede';
        document.form_sede.submit();
    }
}
</script>    
<h1 class="page-header">Sede</h1>
<!-- EMPIEZA: RECOMENDACION -->
<div class="alert alert-info" role="alert">
    <i class="fa fa-info-circle"></i> Aquí podras registrar cosultar las sedes.
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
    echo '<a class="btn btn-success" id="btn_registrar" href="?vista=sede/registrar_sede"><i class="fa fa-plus"></i> Registrar Sede</a>';
}
?> 
<!-- EMPIEZA: FORMULARIO -->
    <form action="../controlador/control_sede.php" method="POST" name="form_sede" role="form" class="form">

    <input type="hidden" value="desactivar_sede" name="operacion" id="cam_operacion" />
    <input type="hidden"  name="idsede" id="cam_idsede"/>
    <table class="cell-border compact hover stripe" id="filtro">
        <thead>
             <th>Codigo</th><th>Nombre</th><?php if($desactivar || $consultar)
                        { echo '<th>Operación</th>';} ?>
        </thead>
        <tbody>
        	<?php
        	require_once('../clases/clase_sede.php');
                $lobjSede=new clsSede;
                $laSedes=$lobjSede->listar_sede();
                for($i=0;$i<count($laSedes);$i++)
                {
                    echo '<tr>';
                    echo '<td>'.$laSedes[$i]['idsede'].'</td>';
                    echo '<td>'.$laSedes[$i]['nombresede'].' </td>';
                     if($consultar || $desactivar){
                  
                    	echo '<td>';
                    	if($consultar)
                    	{
                        echo '<a class="btn btn-info" href="#" onclick="buscar('.$laSedes[$i]['idsede'].')"><i class="fa fa-search"></i></a>';
                    	}
                    	if($desactivar)
                    		{
                            if($laSedes[$i]['estatussed']=='1')
                            {
                                echo ' <a class="btn btn-danger" href="#" onclick="desactivar('.$laSedes[$i]['idsede'].')" ><i class="fa fa-remove"></i></a>';

                            }
                            elseif ($laSedes[$i]['estatussed']=='0') 
                            {
                                echo ' <a class="btn btn-warning" title="Restaurar" href="#" onclick="activar('.$laSedes[$i]['idsede'].')" ><i class="fa fa-refresh"></i></a>';
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