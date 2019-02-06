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
   $listado_usuario=$lobjUsuario->listar_usuario_desactivados();
   ob_end_clean();

   $lobjPdf=new clsFpdf();
   $lobjPdf->AliasNbPages();   // Agrega cuantas paginas disponible hay.

   //AddPage(Orientacion,tamaño)
   //Orientación de la pagina P=Vertical y L=Horizontal  
   //Tamaño de la pagina letter=carta y legal=oficio, exiten más pero estos son los mas comunes 
   $lobjPdf->AddPage("P","legal");
   //SetFont(Tipo de fuente,negrilla,tamaño de la fuente)
   $lobjPdf->SetFont("arial","BU",14);

   //Parametros de la función CELL (ancho,alto,texto,borde,salto de linea,alineación)

   $lobjPdf->Cell(0,6,utf8_decode("Listado Total de Usuarios Desactivados"),0,1,"C");
   $lobjPdf->ln(4);
   $lobjPdf->SetFillColor(123,135,240);

   $lobjPdf->SetFont("arial","B",12);
   $lobjPdf->SetX(33);
   $lobjPdf->Cell(28,8,utf8_decode("Usuario"),0,0,"C",1);
   $lobjPdf->Cell(60,8,utf8_decode("Personal"),0,0,"C",1);
   $lobjPdf->Cell(60,8,utf8_decode("Cargo"),0,0,"C",1);

   //Ln(cantidad de lineas en blanco)
   $lobjPdf->Ln(8);
   $lobjPdf->SetFont("arial","",12);
   $lobjPdf->SetLineWidth(0.5);
   $lobjPdf->SetDrawColor(255,255,255,255);
   $lobjPdf->SetFillColor(224,224,224);
   for($i=0;$i<count($listado_usuario);$i++)
   {  
      $lobjPdf->SetX(33);
      $lobjPdf->Cell(28,8,number_format($listado_usuario[$i]['idtusuario']),1,0,"C",1);
      $lobjPdf->Cell(60,8,utf8_decode($listado_usuario[$i]['nomyape']),1,0,"C",1);
      $lobjPdf->Cell(60,8,utf8_decode($listado_usuario[$i]['nombrerol']),1,0,"C",1);
      $lobjPdf->ln();
  

      //Ln(cantidad de lineas en blanco)
   // $lobjPdf->Ln(6);
      
   }

   

   $lobjPdf->Output('I','listado de usuarios Desactivados.pdf');

?>