<!--/**
* Registrar Módulo = vista ; Permite registrar un módulo.
*
* @package    ModeloAulafrontino
* @license    http://www.gnu.org/licenses/gpl.txt  GNU GPL 3.0
* @author     Equipo de desarrollo Aula Frontino <aulafrontino@gmail.com>
* @link       https://github.com/EquipoAulaFrontino
* @version    v1.0
*/-->
<h1 class="page-header">Registrar Departamento</h1>
<!-- EMPIEZA: RECOMENDACION -->
<div class="alert alert-info" role="alert">
    <strong><i class="fa fa-info-circle"></i></strong> Aquí podras registrar los departamento.
</div>
<!-- FIN: RECOMENDACION -->
<!-- EMPIEZA: FORMULARIO -->
<?php

                        if(isset($_GET['datos'])){
                            switch ($_GET['datos']) {

                                case 'existe':

                                    echo "<script>alert('Este codigo del  departamento ya esta registrado!');</script>";

                                    echo "<br>";
                                    break;



                            }
                        }
                     ?>
<form role="form" class="form" action="../controlador/control_departamento.php" method="POST" name="form_departamento">
    <input type="hidden" value="registrar_departamento" name="operacion" />
    <input type="hidden"  name="iddepartamento" id="cam_iddepartamento"/>

        <div class="col-md-4">
            <div class="form-group">
            <br><br>
                <label for="cam_codigo">Código <span class="label label-warning" data-trigger="hover" data-container="body" data-toggle="popover" data-placement="right" data-content="Codigo."><i class="fa fa-question" ></i></span></label>
                <input class="form-control"  type="text" name="iddepartamento" id="cam_iddepartamento" maxlength="20" style="width:170px; height:35px" required/>
                 <br>
                 <label for="cam_denominacion">Denominación <span class="label label-warning" data-trigger="hover" data-container="body" data-toggle="popover" data-placement="right" data-content="Nombre del departamento."><i class="fa fa-question" ></i></span></label>
                <input class="form-control" type="text" name="denominacion" id="cam_denominacion" style="width:200px; height:35px" required/>
            </div>
        </div>

<br>
    <div class="row">
        <div class="col-md-6">
        <label for="cam_encargado">Encargado <span class="label label-warning" data-trigger="hover" data-container="body" data-toggle="popover" data-placement="right" data-content="Encargado."><i class="fa fa-question" ></i></span></label>
                <select type="text" name="idtpersona" class="form-control" id="idtpersona" style="width:170px; height:35px" required>
                <option value="">Elegir</option>
                <?php
                        require_once('../clases/clase_personal.php');
                        $lobjPersona=new ClsPersona;
                        $laPersona=$lobjPersona->listar_personas();
                        for($i=0;$i<count($laPersona);$i++)
                        {
                            echo '<option value="'.$laPersona[$i]['idtpersona'].'" >'.$laPersona[$i]['nombreunoper'].'</option>';
                        }
                    ?>
            </select>



                  </div> <br><br><br><br>

        <div class="row">
        <div class="col-md-6">
         <label for="cam_idsede">Sede <span class="label label-warning" data-trigger="hover" data-container="body" data-toggle="popover" data-placement="right" data-content="Sede"><i class="fa fa-question" ></i></span></label>
                <select type="text" name="idsede" class="form-control" id="idsede" style="width:170px; height:35px" required>
                <option value="">Elegir</option>
                <?php
                        require_once('../clases/clase_sede.php');
                        $lobjSede=new clsSede;
                        $laSede=$lobjSede->listar_sede();
                        for($i=0;$i<count($laSede);$i++)
                        {
                            echo '<option value="'.$laSede[$i]['idsede'].'" >'.$laSede[$i]['nombresede'].'</option>';
                        }
                    ?>
            </select>

    </div>    </div>
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
