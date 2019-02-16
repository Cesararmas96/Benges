<?php
$consultar= $registrar= $eliminar=false;
for($i=0;$i<count($laModulos);$i++) 
    {
        $laServicios=$lobjRol->consultar_servicios($laModulos[$i][0]); 
        for ($j=0; $j <count($laServicios) ; $j++) //Se recorre un ciclo para poder extraer los datos de cada uno de los servicios que tiene asignado el modulo para poder constuir el menú
        {
            if($laServicios[$j][2]=='color/consultar_color')
            {
                $consultar=true;
            }
            if($laServicios[$j][2]=='color/registrar_color')
            {

                $registrar=true;
            }
            if($laServicios[$j][2]=='color/desactivar_color')
            {
                $desactivar=true;
            }
        }
    }
?>
<script>
function buscar(id)
{
    window.location.href="?vista=color/consultar_color&id="+id;
}

function desactivar(id)
{
    if(confirm("¿Está seguro que desea desactivar el color seleccionada?"))
    {
      document.getElementById("cam_idtcolor").value=id;
      alert(id);
      document.form_color.submit();
    }
}

function activar(id)
{
    if(confirm("¿Desea activar el color seleccionado?"))
    {
        document.getElementById("cam_idtcolor").value=id;
        document.getElementById("cam_operacion").value='activar_color';
        document.form_color.submit();
    }
}
</script>    
<h1 class="page-header">Color</h1>
    <!-- EMPIEZA: RECOMENDACION -->
          <div class="alert alert-info" role="alert">
            <strong><i class="fa fa-info-circle"></i></strong> Aquí podras registrar, cosultar, modificar y eliminar el color del sistema.
          </div>
    <!-- FIN: RECOMENDACION -->
    <?php
    if($registrar)
    {
        echo '<a class="btn btn-success" id="btn_registrar" href="?vista=color/registrar_color"><i class="fa fa-plus"></i> Registrar color</a>';
    }
    ?>
    <form action="../controlador/control_color.php" method="POST" name="form_color" role="form" class="form">
        <input type="hidden" value="desactivar_color" name="operacion" id="cam_operacion"/>
        <input type="hidden"  name="idtcolor" id="cam_idtcolor"/>
        <table class="cell-border compact hover stripe" id="filtro">
            <thead>
                <th>Nro.</th><th>Nombre</th><?php if($consultar || $desactivar)
                        { echo '<th>Operación</th>';}?>
            </thead>
            <tbody>
            <?php
                require_once('../clases/clase_color.php');
                $lobjColor=new clsColor;
                $laColor=$lobjColor->listar_color();
                for($i=0;$i<count($laColor);$i++)
                {
                    echo '<tr>';
                    echo '<td>'.($i+1).'</td>';
                    echo '<td>'.$laColor[$i]['nombrecol'].' </td>';
                    if($consultar || $desactivar)
                    {
                        echo '<td>';
                        if($consultar)
                        {
                            echo '<a class="btn btn-info" href="#" onclick="buscar('.$laColor[$i]['idtcolor'].')"><i class="fa fa-search"></i></a>';
                        }
                        if($desactivar)
                        {
                            if($laColor[$i]['estatuscol']=='1')
                            {
                                echo ' <a class="btn btn-danger" href="#" onclick="desactivar('.$laColor[$i]['idtcolor'].')" ><i class="fa fa-remove"></i></a>';

                            }
                            elseif ($laColor[$i]['estatuscol']=='0') 
                            {
                                echo ' <a class="btn btn-warning" title="Restaurar" href="#" onclick="activar('.$laColor[$i]['idtcolor'].')" ><i class="fa fa-refresh"></i></a>';
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
