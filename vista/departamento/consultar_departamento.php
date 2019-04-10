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
    <input type="hidden"  name="iddepartamento" id="cam_iddepartamento"/>
    
        <div class="col-md-4">
            <div class="form-group">
            <br><br>
               
                 
                 <label for="cam_denominacion">Denominación <span class="label label-warning" data-trigger="hover" data-container="body" data-toggle="popover" data-placement="right" data-content="Nombre del departamento."><i class="fa fa-question" ></i></span></label>
                <input class="form-control" type="text" name="denominacion" id="cam_denominacion" style="width:200px; height:35px" value="<?php print ($laDepartamento['denominacion'])?>" required/>
            </div>
        </div>

<br>
    <div class="row">
        <div class="col-md-6">
            <label for="cam_encargado">Encargado <span class="label label-warning" data-trigger="hover" data-container="body" data-toggle="popover" data-placement="right" data-content="Encargado."><i class="fa fa-question" ></i></span></label>
            
            <select type="text" name="idtpersona" class="form-control" id="idtpersona" style="width:200px; height:35px" required>
                <option value="">Elegir</option>
                <?php
                    require_once('../clases/clase_personal.php');
                    $lobjPersona=new ClsPersona;
                    $laPersona=$lobjPersona->listar_personas_activas();
                    for($i=0;$i<count($laPersona);$i++){                        
                        $selected=($laPersona[$i]['idtpersona']==$laDepartamento['idtpersona'])?'selected':'';
                        echo '<option value="'.$laPersona[$i]['idtpersona'].'" '.$selected.'>'.$laPersona[$i]['nombreunoper'].'</option>';
                    }
                ?>
            </select>       
        </div> 

        <br><br><br><br>
    
        <div class="row">
        <div class="col-md-6">
            <br>
         <label for="cam_idsede">Sede <span class="label label-warning" data-trigger="hover" data-container="body" data-toggle="popover" data-placement="right" data-content="Sede"><i class="fa fa-question" ></i></span></label>
                <select type="text" name="idsede" class="form-control" id="idsede" style="width:200px; height:35px" required>
                <option value="">Elegir</option>
                 <?php
                        require_once('../clases/clase_sede.php');
                        $lobjSede=new ClsSede;
                        $laSede=$lobjSede->listar_sedes_activas();
                        for($i=0;$i<count($laSede);$i++)
                        {
                             $selected=($laSede[$i]['idsede']==$laDepartamento['idsede'])?'selected':'';
                            echo '<option value="'.$laSede[$i]['idsede'].'" '.$selected.'>'.$laSede[$i]['nombresede'].'</option>';
                        }
                    ?>
            </select>

    </div>    </div>
    <br>
    <div class="row">
        <div class="col-md-6">
            <button type="button" class="btn btn-danger center-block" name="btn_regresar" id="btn_regresar" onclick="window.location.href='?vista=departamento/departamento';"><i class="fa fa-chevron-left"></i> Regresar</button>
        </div>
        <div class="col-md-6">
            <button type="submit" class="btn btn-danger center-block" name="btn_enviar" id="btn_enviar"><i class="fa fa-check"></i> Aceptar</button>
        </div>
    </div>
</form>
<!-- FIN: FORMULARIO -->