<?php

   require_once("../libreria/fpdf/clase_fpdf.php");
   require_once("../clases/clase_usuario.php");

 // $lobjUsuariolist=new clsUsuario();

   $lobjUsuario=new clsUsuario();  
   // $lobjRol = new clsRol();
   // $lobjServicio = new clsServicio();
   // $lobjPersona = new clsPersona();


   $id=(isset($_GET['id']))?$_GET['id']:"";
  
   $lobjUsuario->set_Usuario($id);  
   // $lobjRol->set_Rol($id);
   // $lobjServicio->set_Servicio($id);
   // $lobjPersona->set_Persona($id);

 // $lobjUsuariolist->set_Usuario($id);



   $laDatosUsuario=$lobjUsuario->consultar_usuario();  
   // $listado_usuario=$lobjUsuario->listar_rol();
   // $laDatosPersona=$lobjPersona->consultar_persona();

    // $laDatosUsulist=$lobjUsuariolist->listar_usuario();

   ob_end_clean();



   $lobjPdf=new clsFpdf();
   $lobjPdf->AddPage("P","legal");

   $lobjPdf->SetFont("arial","BU",14);
   $lobjPdf->Cell(0,6,utf8_decode("Detalles del Usuario"),0,1,"C");


   $lobjPdf->SetFont('arial','B',10);
   $lobjPdf->SetX(10);
   $lobjPdf->Cell(20,7,'Usuario: '.$laDatosUsuario['idtusuario'], 0,0);

   $lobjPdf->Ln();
   $lobjPdf->Cell(20,7,'Nombre: '.$laDatosPersona['nombreunoper']. ' ' .$laDatosPersona['nombredosper'], 0,0);

   $lobjPdf->SetX(80);
   $lobjPdf->Cell(20,7,'Apellido: '.$laDatosPersona['apellidounoper']. ' ' .$laDatosPersona['apellidodosper'],0,0);
   $lobjPdf->ln();


   $estatususu= $laDatosUsuario['estatususu'];
   if ($estatususu==1){
      $var='ACTIVO';
   }
   else{
      $var='DESACTIVADO';
   }

   $lobjPdf->Cell(20,7,'Estatus: '.$var, 0,0);


   $lobjPdf->ln(30);

   $lobjPdf->SetFillColor(123,135,240);
   $lobjPdf->SetFont("arial","B",12);
   $lobjPdf->SetX(33);
   $lobjPdf->Cell(28,8,utf8_decode("Usuario"),0,0,"C",1);
   $lobjPdf->Cell(60,8,utf8_decode("Cargo"),0,0,"C",1);
   $lobjPdf->Cell(60,8,utf8_decode("Operaciones"),0,0,"C",1);
   $lobjPdf->SetFillColor(255,255,255);
   $lobjPdf->Ln();
   $lobjPdf->SetX(33);

   

      $lobjPdf->Cell(28,8, $laDatosUsuario['idtusuario'],1,0,"C",1);
      $lobjPdf->Cell(60,8, $listado_usuario['idtusuario'],1,0,"C",1);
      $lobjPdf->Cell(60,8, '',1,0,"C",1);
   

   
  
   $lobjPdf->OutPut('I','Detalles de usuario.pdf');

  


?>