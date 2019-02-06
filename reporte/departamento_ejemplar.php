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
   require_once("../clases/clase_departamento.php");
   $lobjDepartamento=new clsDepartamento();
   $id=(isset($_GET['id']))?$_GET['id']:"";
   $lobjDepartamento->set_departamento($id);
   $laDepartamento=$lobjDepartamento->ejemplares_departamento();
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
   $lobjPdf->Cell(45,6,utf8_decode(""),0,0,"C");
   $lobjPdf->Cell(15,6,utf8_decode("N°"),1,0,"C");
   $lobjPdf->Cell(35,6,utf8_decode("Codigo"),1,0,"C");
   $lobjPdf->Cell(25,6,utf8_decode("serial"),1,0,"C");
   $lobjPdf->Cell(45,6,utf8_decode("Condicion"),1,0,"C");
   //Ln(cantidad de lineas en blanco)
   $lobjPdf->Ln(6);
   $lobjPdf->SetFont("arial","",12);
   for($i=0;$i<count($laDepartamento);$i++)
   {
      $lobjPdf->Cell(45,6,utf8_decode(""),0,0,"C");
      $lobjPdf->Cell(15,6,utf8_decode($i+1),1,0,"C");
      $lobjPdf->Cell(35,6,utf8_decode($laDepartamento[$i]['idtejemplar']),1,0,"C");
      $lobjPdf->Cell(25,6,utf8_decode($laDepartamento[$i]['serialejemp']),1,0,"C");
      $lobjPdf->Cell(45,6,utf8_decode($laDepartamento[$i]['nombrecond']),1,0,"C");

      //Ln(cantidad de lineas en blanco)
   $lobjPdf->Ln(6);

   }
   $lobjPdf->Ln(60);
   $lobjPdf->SetFont('Arial','BI',11);
   $lobjPdf->Cell(70);
   $lobjPdf->Cell(40,10,'Observacion',0,0,'C');
   $lobjPdf->Ln(25);
   $lobjPdf->Cell(40);
   $lobjPdf->cell(60,10,' _________________________________________________');

   $lobjPdf->Ln(75);
   $lobjPdf->Cell(10);
   $lobjPdf->cell(100,45,'Firma del jefe de Bienes Nacionales:');

   $lobjPdf->Ln(0);
   $lobjPdf->Cell(125);
   $lobjPdf->cell(100,45,'Firma del miembro de apoyo:');

   $lobjPdf->Ln(40);
   $lobjPdf->Cell(10);
   $lobjPdf->cell(130,10,' __________________________');

   $lobjPdf->Ln(0);
   $lobjPdf->Cell(125);
   $lobjPdf->cell(130,10,' __________________________');

   $lobjPdf->Output();

?>
