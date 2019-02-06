<?php
$consultar= $registrar= $desactivar=false;
for($i=0;$i<count($laModulos);$i++) 
    {
        $laServicios=$lobjRol->consultar_servicios($laModulos[$i][0]); 
        for ($j=0; $j <count($laServicios) ; $j++) //Se recorre un ciclo para poder extraer los datos de cada uno de los servicios que tiene asignado el modulo para poder constuir el menú
        {
            if($laServicios[$j][2]=='subcategoria/consultar_subcategoria')
            {
                $consultar=true;
            }
            if($laServicios[$j][2]=='subcategoria/registrar_subcategoria')
            {

                $registrar=true;
            }
            if($laServicios[$j][2]=='subcategoria/desactivar_subcategoria')
            {
                $desactivar=true;
            }
        }
    }
?>
<script>
function buscar(id)
{
    window.location.href="?vista=subcategoria/consultar_subcategoria&id="+id;
}

function desactivar(id)
{
    if(confirm("¿Está seguro que desea desactivar la subcategoria seleccionada?"))
    {
      document.getElementById("cam_idtsubcategoria").value=id;
      document.form_subcategoria.submit();
    }
}

function activar(id)
{
    if(confirm("¿Desea activar la subcategoria seleccionada?"))
    {
        document.getElementById("cam_idtsubcategoria").value=id;
        document.getElementById("cam_operacion").value='activar_subcategoria';
        document.form_subcategoria.submit();
    }
}
</script>    
<h1 class="page-header">Subcategoria</h1>
    <!-- EMPIEZA: RECOMENDACION -->
          <div class="alert alert-info" role="alert">
            <strong><i class="fa fa-info-circle"></i></strong> Aquí podras registrar, cosultar, modificar y desactivar las subcategorias del sistema.
          </div>
    <!-- FIN: RECOMENDACION -->
    <?php
    if($registrar)
    {
        echo '<a class="btn btn-success" id="btn_registrar" href="?vista=subcategoria/registrar_subcategoria"><i class="fa fa-plus"></i> Registrar subcategoria</a>';
    }
    ?>
    <form action="../controlador/control_subcategoria.php" method="POST" name="form_subcategoria" role="form" class="form">
        <input type="hidden" value="desactivar_subcategoria" name="operacion" id="cam_operacion"/>
        <input type="hidden"  name="idtsubcategoria" id="cam_idtsubcategoria"/>
        <table class="cell-border compact hover stripe" id="filtro">
            <thead>
                <th>Nro.</th><th>Nombre</th><th>Categoria</th><?php if($consultar || $desactivar)
                        { echo '<th>Operación</th>';}?>
            </thead>
            <tbody>
            <?php
                    require_once('../clases/clase_subcategoria.php');
                    $lobjSubcategoria=new clsSubcategoria;
                    $laSubcategoria=$lobjSubcategoria->listar_subcategoria();
                    for($i=0;$i<count($laSubcategoria);$i++)
                    {
                    echo '<td>'.$laSubcategoria[$i]['idtsubcategoria'].'</td>';
                    echo '<td>'.$laSubcategoria[$i]['nombresubcat'].'</td>';
                    echo '<td>'.$laSubcategoria[$i]['categoria'].'</td>';

                    if($consultar || $desactivar)
                    {
                        echo '<td>';
                        if($consultar)
                        {
                            echo '<a class="btn btn-info btn-sm" href="#" onclick="buscar('.$laSubcategoria[$i]['idtsubcategoria'].')"><i class="fa fa-search"></i></a>';
                        }
                        if($desactivar)
                       {
                           if($laSubcategoria[$i]['estatussubcat']=='1')
                          {
                               echo ' <a class="btn btn-danger" href="#" onclick="desactivar('.$laSubcategoria[$i]['idtsubcategoria'].')" ><i class="fa fa-remove"></i></a>';

                           }
                           elseif ($laSubcategoria[$i]['estatussubcat']=='0') 
                           {
                               echo ' <a class="btn btn-warning" title="Restaurar" href="#" onclick="activar('.$laSubcategoria[$i]['idtsubcategoria'].')" ><i class="fa fa-refresh"></i></a>';
                           }
                       }
                    }
                    echo '</tr>';
                    }
                ?>
                </tbody>
        </table>
    </form>
