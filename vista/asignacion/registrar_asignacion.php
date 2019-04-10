<h1 class="page-header">Registrar Asignacion</h1>
<!-- EMPIEZA: RECOMENDACION -->
  <div class="alert alert-info" role="alert">
    <strong><i class="fa fa-info-circle"></i></strong> Aquí podras registrar una persona en el sistema.
  </div>
<!--   <?php

                        // if(isset($_GET['datos'])){
                        //     switch ($_GET['datos']) {

                        //         case 'existe':

                        //             echo "<script>alert('Esta cedula ya se encuentra registrada!');</script>";

                        //             echo "<br>";
                        //             break;



                        //     }
                        // }
                     ?> -->
<!-- FIN: RECOMENDACION -->
<form class="formulario" action="../controlador/control_asignacion.php" method="POST" name="form_asignacion" >
    <input type="hidden" value="registrar_asignacion" name="operacion" />
    <input type="hidden"  name="idtpersona" id="cam_idtpersona"/>
    
    <div class="row">
        <div class="col-sm-1"></div>
        <div class="col-sm-9">
            <div class="form-group">
                <label for="cam_idtdepartamento">Departamento <span class="label label-warning" data-trigger="hover" data-container="body" data-toggle="popover" data-placement="right" data-content="No ingrese puntos (.) ni comas (,)."><i class="fa fa-question" ></i></span></label>
                
                <select class="form-control">
                    <option>Seleccionar</option>
                </select>
                
            </div>
        </div>        
    </div>

    <div class="row">
        <div class="col-sm-1"></div>
        <div class="col-sm-9">
            <div class="form-group">
                <label for="cam_idtejemplar">Ejemplar <span class="label label-warning" data-trigger="hover" data-container="body" data-toggle="popover" data-placement="right" data-content="No ingrese puntos (.) ni comas (,)."><i class="fa fa-question" ></i></span></label>
                
                <select class="form-control">
                    <option>Seleccionar</option>
                </select>
                
            </div>
        </div>        
    </div>

    <div class="row">
        <div class="col-sm-1"></div>
        <div class="col-sm-4">
            <div class="form-group">
                <label for="cam_apellidounoper">Codigo <span class="label label-warning" data-trigger="hover" data-container="body" data-toggle="popover" data-placement="right" data-content="Campo solo de letras"><i class="fa fa-question" ></i></span></label>

                <input type="text" class="form-control" name="apellidounoper" id="cam_apellidounoper"  required />
            </div>
        </div>
        <div class="col-sm-1"></div>

        <div class="col-sm-4">
            <div class="form-group">
                <label for="cam_apellidodosper">Serial <span class="label label-warning" data-trigger="hover" data-container="body" data-toggle="popover" data-placement="right" data-content="Campo solo de letras"><i class="fa fa-question" ></i></span></label>
                <input type="text" class="form-control" name="apellidodosper" id="cam_apellidodosper" readonly="readonly"     />
            </div>
        </div>
    </div>

      <div class="row">
        <div class="col-sm-1"></div>
        <div class="col-sm-9">
            <div class="form-group">
                <label for="cam_idtdepartamento">Descripcion<span class="label label-warning" data-trigger="hover" data-container="body" data-toggle="popover" data-placement="right" data-content="No ingrese puntos (.) ni comas (,)."><i class="fa fa-question" ></i></span></label>
                
                <input type="text" class="form-control" readonly="readonly"  name="">
                
            </div>
        </div>        
    </div>

    

      
     

     


     
    <div class="row">
        <input type="hidden" name="ope" id="ope">
        <div class="col-md-5">
            <button type="button" class="btn btn-danger center-block" name="btn_regresar" id="btn_regresar" onclick="window.location.href='?vista=asignacion/asignacion';"><i class="fa fa-chevron-left"></i> Regresar</button>
        </div>
        <div class="col-md-5">
            <button type="submit" class="btn btn-danger center-block" name="btn_enviar" id="btn_enviar"  ><i class="fa fa-check"></i> Aceptar</button>
        </div>
    </div>



</form>
