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
   require_once("../clases/clase_usuario.php");
   $lobjUsuario=new clsUsuario();
   $listado_usuario=$lobjUsuario->listar_usuario();
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
   $lobjPdf->Cell(0,6,utf8_decode("Listado de Usuario"),0,1,"C");
   $lobjPdf->Cell(28,6,utf8_decode("Usuario"),1,0,"C");
   $lobjPdf->Cell(60,6,utf8_decode("Personal"),1,0,"C");
   $lobjPdf->Cell(60,6,utf8_decode("Cargo"),1,0,"C");
   //Ln(cantidad de lineas en blanco)
   $lobjPdf->Ln(6);
   $lobjPdf->SetFont("arial","",12);
   for($i=0;$i<count($listado_usuario);$i++)
   {
      $lobjPdf->Cell(28,6,utf8_decode($listado_usuario[$i]['idtusuario']),1,0,"C");
      $lobjPdf->Cell(60,6,utf8_decode($listado_usuario[$i]['nomyape']),1,0,"C");
      $lobjPdf->Cell(60,6,utf8_decode($listado_usuario[$i]['nombrerol']),1,0,"C");

      //Ln(cantidad de lineas en blanco)
   $lobjPdf->Ln(6);
      
   }

   $lobjPdf->Output();

?>