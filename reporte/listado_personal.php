<?php
   /**
   * Reporte listado de cursos activos
   *
   * @package    ModeloAulafrontino
   * @license    http://www.gnu.org/licenses/gpl.txt  GNU GPL 3.0
   * @author     Equipo de desarrollo Aula Frontino <aulafrontino@gmail.com>
   * @link       https://github.com/EquipoAulaFrontino
   * @version    v1.0
   */
   require_once("../libreria/fpdf/clase_fpdf.php");
   require_once("../clases/clase_personal.php");
   $lobjPersonal=new clspersona();
   $listado_persona=$lobjPersonal->listar_personas();
   ob_end_clean();

   $lobjPdf=new clsFpdf();
   $lobjPdf->AliasNbPages();

   //AddPage(Orientacion,tamaño)
   //Orientación de la pagina P=Vertical y L=Horizontal  
   //Tamaño de la pagina letter=carta y legal=oficio, exiten más pero estos son los mas comunes 
   $lobjPdf->AddPage("P","legal");
   //SetFont(Tipo de fuente,negrilla,tamaño de la fuente)
   $lobjPdf->SetFont("arial","B",12);
   //Ln(cantidad de lineas en blanco)
   $lobjPdf->Ln(3);

   //Parametros de la función CELL (ancho,alto,texto,borde,salto de linea,alineación)
   $lobjPdf->Cell(0,6,utf8_decode("Listado de Personal"),0,1,"C");
   $lobjPdf->Cell(28,6,utf8_decode("Cédula"),1,0,"C");
   $lobjPdf->Cell(35,6,utf8_decode("Nombre"),1,0,"C");
   $lobjPdf->Cell(35,6,utf8_decode("Apellido"),1,0,"C");
   $lobjPdf->Cell(35,6,utf8_decode("N° Telefonico"),1,0,"C");
   $lobjPdf->Cell(60,6,utf8_decode("Email"),1,0,"C");

   //Ln(cantidad de lineas en blanco)
   $lobjPdf->Ln(6);
   $lobjPdf->SetFont("arial","",12);
   for($i=0;$i<count($listado_persona);$i++)
   {
      $lobjPdf->Cell(28,6,utf8_decode($listado_persona[$i]['idtpersona']),1,0,"C");
      $lobjPdf->Cell(35,6,utf8_decode($listado_persona[$i]['nombreunoper']),1,0,"C");
      $lobjPdf->Cell(35,6,utf8_decode($listado_persona[$i]['apellidounoper']),1,0,"C");
      $lobjPdf->Cell(35,6,utf8_decode($listado_persona[$i]['telefonoper']),1,0,"C");
      $lobjPdf->Cell(60,6,utf8_decode($listado_persona[$i]['correoper']),1,0,"C");



      //Ln(cantidad de lineas en blanco)
   $lobjPdf->Ln(6);
      
   }

   $lobjPdf->Output();

?>