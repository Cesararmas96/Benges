<?php
    require_once("../clases/clase_modelo.php");
    $lobjModelo=new clsModelo;

    $id=(isset($_GET['id']))?$_GET['id']:"";

    $lobjModelo->set_Modelo($id);
    $laModelo=$lobjModelo->consultar_modelo();
?>
<h1 class="page-header">Consultar/Modificar Modelo</h1>
<!-- EMPIEZA: RECOMENDACION -->
  <div class="alert alert-info" role="alert">
    <strong><i class="fa fa-info-circle"></i></strong> Aquí podras consultar y/o modificar los datos de un modelo en el sistema.
  </div>
<!-- FIN: RECOMENDACION -->
<?php

                        if(isset($_GET['datos'])){
                            switch ($_GET['datos']) {

                                case 'existe':

                                    echo "<script>alert('No se puede modificar porque este modelo ya esta registrado!');</script>";

                                    echo "<br>";
                                    break;



                            }
                        }
                     ?>
<form class="formulario" action="../controlador/control_modelo.php" method="POST" name="form_modelo">
    <input type="hidden" value="editar_modelo" name="operacion" />
    <input type="hidden"  name="idtmodelo" id="cam_idtmodelo" value="<?php print($laModelo['idtmodelo']);?>" />



           <div class="col-md-4">
         <label for="cam_idtmarca">Marca <span class="label label-warning" data-trigger="hover" data-container="body" data-toggle="popover" data-placement="right" data-content="Marca"><i class="fa fa-question" ></i></span></label>
                <select type="text" name="idtmarca" class="form-control" id="cam_idtmarca" style="width:200px; height:35px" maxlength="50" required>
                <option value="">Elegir</option>
                   <?php
                        require_once('../clases/clase_marca.php');
                        $lobjMarca=new ClsMarca;
                        $laMarca=$lobjMarca->listar_marcas_activas();
                        for($i=0;$i<count($laMarca);$i++)
                        {
                            $selected=($laMarca[$i]['idtmarca']==$laModelo['idtmarca'])?'selected':'';
                            echo '<option value="'.$laMarca[$i]['idtmarca'].'" '.$selected.'>'.$laMarca[$i]['nombremar'].'</option>';
                        }
                    ?>
            </select>

    </div>

    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="cam_cedulaest">Modelo <span class="label label-warning" data-trigger="hover" data-container="body" data-toggle="popover" data-placement="right" data-content="Modelo."><i class="fa fa-question" ></i></span></label>
                <input type="text" name="nombremode" class="form-control" id="cam_nombremodelo" style="width:200px; height:35px" maxlength="25" value="<?php print($laModelo['nombremode']);?>" required/>
                <div class="status_per"></div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <button type="button" class="btn btn-danger center-block" name="btn_regresar" id="btn_regresar" onclick="window.location.href='?vista=modelo/modelo';"><i class="fa fa-chevron-left"></i> Regresar</button>
        </div>
        <div class="col-md-6">
            <button type="submit" class="btn btn-danger center-block"><i class="fa fa-check" name="btn_enviar" id="btn_enviar"></i> Aceptar</button>
        </div>
    </div>
</form>
