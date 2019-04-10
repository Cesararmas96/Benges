<?php
$consultar= $registrar= $desactivar=false;
for($i=0;$i<count($laModulos);$i++) 
    {
        $laServicios=$lobjRol->consultar_servicios($laModulos[$i][0]); 
        for ($j=0; $j <count($laServicios) ; $j++) //Se recorre un ciclo para poder extraer los datos de cada uno de los servicios que tiene asignado el modulo para poder constuir el menú
        {
            if($laServicios[$j][2]=='asignacion/consultar_asignacion')
            {
                $consultar=true;
            }
            if($laServicios[$j][2]=='asignacion/registrar_asignacion')
            {

                $registrar=true;
            }
            if($laServicios[$j][2]=='asignacion/desactivar_asignacion')
            {
                $desactivar=true;
            }
        }
    }
?>
<!-- <script>
function buscar(id)
{
    window.location.href="?vista=categoria/consultar_categoria&id="+id;
}

function desactivar(id)
{
    if(confirm("¿Está seguro que desea desactivar la categoria seleccionada?"))
    {
      document.getElementById("cam_idtcategoria").value=id;
      document.form_categoria.submit();
    }
}

function activar(id)
{
    if(confirm("¿Desea activar la categoria seleccioanda?"))
    {
        document.getElementById("cam_idtcategoria").value=id;
        document.getElementById("cam_operacion").value='activar_categoria';
        document.form_categoria.submit();
    }
}
</script>     -->
<h1 class="page-header">Asignacion</h1>
    <!-- EMPIEZA: RECOMENDACION -->
          <div class="alert alert-info" role="alert">
            <strong><i class="fa fa-info-circle"></i></strong> Aquí podras asignar los ejemplares en el sistema.
          </div>
    <!-- FIN: RECOMENDACION -->
    <?php
    if($registrar)
    {
        echo '<a class="btn btn-success" id="btn_registrar" href="?vista=asignacion/registrar_asignacion"><i class="fa fa-plus"></i> Registrar Asignacion</a>';
    }
    ?>
    <form action="../controlador/control_asignacion.php" method="POST" name="form_categoria" role="form" class="form">
        <input type="hidden" value="desactivar_categoria" name="operacion" id="cam_operacion"/>
        <input type="hidden"  name="idtcategoria" id="cam_idtcategoria"/>
        <table class="cell-border compact hover stripe" id="filtro">
            <thead>
                <th>Codigo</th><th>Serial</th><th>Departamento</th><?php if($consultar)
                        { echo '<th>Operación</th>';}?>
            </thead>
            <tbody>
           
            </tbody>
        </table>
    </form> 
