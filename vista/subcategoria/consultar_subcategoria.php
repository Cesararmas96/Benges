<?php
    require_once("../clases/clase_subcategoria.php");
    $lobjSubcategoria=new clsSubcategoria;

    $id=(isset($_GET['id']))?$_GET['id']:"";

    $lobjSubcategoria->set_Subcategoria($id);
    $laSubcategoria=$lobjSubcategoria->consultar_subcategoria();
?>
<h1 class="page-header">Consultar/Modificar Subcategoria</h1>
<!-- EMPIEZA: RECOMENDACION -->
  <div class="alert alert-info" role="alert">
    <strong><i class="fa fa-info-circle"></i></strong> Aquí podras consultar y/o modificar los datos de una subcategoria en el sistema.
  </div>
<!-- FIN: RECOMENDACION -->
<?php

                        if(isset($_GET['datos'])){
                            switch ($_GET['datos']) {

                                case 'existe':

                                    echo "<script>alert('No se puede modificar porque esta subcategoria ya esta registrada!');</script>";

                                    echo "<br>";
                                    break;



                            }
                        }
                     ?>
<form class="formulario" action="../controlador/control_subcategoria.php" method="POST" name="form_subcategoria">
    <input type="hidden" value="editar_subcategoria" name="operacion" />
    <input type="hidden"  name="idtsubcategoria" id="cam_idtsubcategoria" value="<?php print($laSubcategoria['idtsubcategoria']);?>" />



           <div class="col-md-4">
         <label for="cam_idtcategoria">Categoria <span class="label label-warning" data-trigger="hover" data-container="body" data-toggle="popover" data-placement="right" data-content="Categoria"><i class="fa fa-question" ></i></span></label>
                <select type="text" name="idtcategoria" class="form-control" id="cam_idtcategoria" style="width:200px; height:35px" maxlength="50" required>
                <option value="">Elegir</option>
                   <?php
                        require_once('../clases/clase_categoria.php');
                        $lobjCategoria=new ClsCategoria;
                        $laCategoria=$lobjCategoria->listar_categorias_activas();
                        for($i=0;$i<count($laCategoria);$i++)
                        {
                            $selected=($laCategoria[$i]['idtcategoria']==$laSubcategoria['idtcategoria'])?'selected':'';
                            echo '<option value="'.$laCategoria[$i]['idtcategoria'].'" '.$selected.'>'.$laCategoria[$i]['nombrecat'].'</option>';
                        }
                    ?>
            </select>

    </div>

    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="cam_cedulaest">Subcategoria <span class="label label-warning" data-trigger="hover" data-container="body" data-toggle="popover" data-placement="right" data-content="Subcategoria."><i class="fa fa-question" ></i></span></label>
                <input type="text" name="nombresubcat" class="form-control" id="cam_nombresubcategoria" style="width:200px; height:35px" maxlength="25" value="<?php print($laSubcategoria['nombresubcat']);?>" required/>
                <div class="status_per"></div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <button type="button" class="btn btn-danger center-block" name="btn_regresar" id="btn_regresar" onclick="window.location.href='?vista=subcategoria/subcategoria';"><i class="fa fa-chevron-left"></i> Regresar</button>
        </div>
        <div class="col-md-6">
            <button type="submit" class="btn btn-danger center-block"><i class="fa fa-check" name="btn_enviar" id="btn_enviar"></i> Aceptar</button>
        </div>
    </div>
</form>
