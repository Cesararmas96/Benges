<?php
$consultar= $registrar= $desactivar=false;
for($i=0;$i<count($laModulos);$i++) 
    {
        $laServicios=$lobjRol->consultar_servicios($laModulos[$i][0]); 
        for ($j=0; $j <count($laServicios) ; $j++) //Se recorre un ciclo para poder extraer los datos de cada uno de los servicios que tiene asignado el modulo para poder constuir el menú
        {
            if($laServicios[$j][2]=='modelo/consultar_modelo')
            {
                $consultar=true;
            }
            if($laServicios[$j][2]=='modelo/registrar_modelo')
            {

                $registrar=true;
            }
            if($laServicios[$j][2]=='modelo/desactivar_modelo')
            {
                $desactivar=true;
            }
        }
    }
?>
<script>
function buscar(id)
{
    window.location.href="?vista=modelo/consultar_modelo&id="+id;
}

function desactivar(id)
{
    if(confirm("¿Está seguro de que desea desactivar el modelo seleccionado?"))
    {
      document.getElementById("cam_idtmodelo").value=id;
      document.form_modelo.submit();
    }
}

function activar(id)
{
    if(confirm("¿Desea activar el modelo seleccionado?"))
    {
        document.getElementById("cam_idtmodelo").value=id;
        document.getElementById("cam_operacion").value='activar_modelo';
        document.form_modelo.submit();
    }
}
</script>    
<h1 class="page-header">Modelo</h1>
    <!-- EMPIEZA: RECOMENDACION -->
    <div class="alert alert-info" role="alert">
        <i class="fa fa-info-circle"></i> Aquí podras registrar, consultar y modificar los Modelos.
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
        echo '<a class="btn btn-success" id="btn_registrar" href="?vista=modelo/registrar_modelo"><i class="fa fa-plus"></i> Registrar modelo</a>';
    }
    ?>
    <form action="../controlador/control_modelo.php" method="POST" name="form_modelo" role="form" class="form">
        <input type="hidden" value="desactivar_modelo" name="operacion" id="cam_operacion"/>
        <input type="hidden"  name="idtmodelo" id="cam_idtmodelo"/>
        <table class="cell-border compact hover stripe" id="filtro">
            <thead>
                <th>Nro.</th><th>Modelo</th><th>Marca</th><?php if($consultar || $desactivar)
                        { echo '<th>Operación</th>';}?>
            </thead>
            <tbody>
            <?php
                    require_once('../clases/clase_modelo.php');
                    $lobjModelo=new clsModelo;
                    $laModelo=$lobjModelo->listar_modelo();
                    for($i=0;$i<count($laModelo);$i++)
                    {
                    echo '<td>'.$laModelo[$i]['idtmodelo'].'</td>';
                    echo '<td>'.$laModelo[$i]['nombremode'].'</td>';
                    echo '<td>'.$laModelo[$i]['marca'].'</td>';

                    if($consultar || $desactivar)
                    {
                        echo '<td>';
                        if($consultar)
                        {
                            echo '<a class="btn btn-info " href="#" onclick="buscar('.$laModelo[$i]['idtmodelo'].')"><i class="fa fa-search"></i></a>';
                        }
                        if($desactivar)
                       {
                           if($laModelo[$i]['estatusmode']=='1')
                          {
                               echo ' <a class="btn btn-danger" href="#" onclick="desactivar('.$laModelo[$i]['idtmodelo'].')" ><i class="fa fa-remove"></i></a>';

                           }
                           elseif ($laModelo[$i]['estatusmode']=='0') 
                           {
                               echo ' <a class="btn btn-warning" title="Restaurar" href="#" onclick="activar('.$laModelo[$i]['idtmodelo'].')" ><i class="fa fa-refresh"></i></a>';
                           }
                       }
                    }
                    echo '</tr>';
                    }
                ?>
                </tbody>
        </table>
    </form>
