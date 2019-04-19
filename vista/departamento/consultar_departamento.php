<?php
    require_once("../clases/clase_departamento.php");
    $lobjDepartamento=new clsDepartamento;
    
    $id=(isset($_GET['id']))?$_GET['id']:"";

    $lobjDepartamento->set_departamento($id);
    $laDepartamento=$lobjDepartamento->consultar_departamentos();
?>
<h1 class="page-header">Modificar Departamento</h1>
<!-- EMPIEZA: RECOMENDACION -->
<div class="alert alert-info" role="alert">
    <strong><i class="fa fa-info-circle"></i></strong> Aquí podras modificar los departamento.
</div>

<div class="alert alert-danger" role="alert">
  
   <i class="fa fa-info-circle"></i> A lado de los nombres de los campos aparece el simbolo:<strong> "?"</strong>, donde aparecera una breve ayuda. 
</div>
<!-- FIN: RECOMENDACION -->
<!-- EMPIEZA: FORMULARIO -->
<?php 
                    
                        if(isset($_GET['datos'])){
                            switch ($_GET['datos']) {

                                case 'existe':
                                    
                                    echo "<script>alert('No se puede modificar porque este codigo de departamento ya esta registrado!');</script>";

                                    echo "<br>";
                                    break;
                                

                               
                            }       
                        }
                     ?>
<form role="form" class="form" action="../controlador/control_departamento.php" method="POST" name="form_departamento">
    <input type="hidden" value="editar_departamento" name="operacion" />
    <input type="hidden"  name="iddepartamento" id="cam_departamento" value="<?php print($laDepartamento['iddepartamento']);?>" />
        <div class="col-md-1"></div>
        <div class="col-md-4">
            <div class="form-group">
                 <label for="cam_codigo">Codigo <span class="label label-warning" data-trigger="hover" data-container="body" data-toggle="popover" data-placement="right" data-content="Codigo del Departamento que se modificara."><i class="fa fa-question" ></i></span></label>
                <input class="form-control" type="text" name="denominacion" id="cam_codigo" value="<?php print ($laDepartamento['codigodep'])?>" required/>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                 <label for="cam_denominacion">Denominación <span class="label label-warning" data-trigger="hover" data-container="body" data-toggle="popover" data-placement="right" data-content="Nombre del departamento que se modificara."><i class="fa fa-question" ></i></span></label>
                <input class="form-control" type="text" name="denominacion" id="cam_denominacion" value="<?php print ($laDepartamento['denominacion'])?>" required/>
            </div>

        </div>


    <div class="row">
        <div class="col-md-6">
            <button type="button" class="btn  center-block" name="btn_regresar" id="btn_regresar" onclick="window.location.href='?vista=departamento/departamento';"><i class="fa fa-chevron-left"></i> Regresar</button>
        </div>
        <div class="col-md-6">
            <button type="submit" class="btn btn-success center-block" name="btn_enviar" id="btn_enviar"><i class="fa fa-check"></i> Modificar</button>
            
        </div>
    </div>
</form>
<!-- FIN: FORMULARIO -->