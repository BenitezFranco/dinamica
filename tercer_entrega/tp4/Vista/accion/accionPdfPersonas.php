<?php

include('../../configuracion.php');
include('../../util/fpdf/fpdf.php');

class PDF extends FPDF
{
// Page header
function Header()
{
    // Logo
    $this->Image('../img/descarga.jpeg',10,6,20);
    // Arial bold 15
    $this->SetFont('Arial','B',12);
    
    // Move to the right
    $this->Cell(60);
    // Title
    $this->SetTextColor(16,21,109);
    $this->Cell(80,10,'Reporte de Personas',1,0,'C');
   
    $this->SetTextColor(0,0,0);
    //agrego grupo 11
    $this->SetXY(160, 10);
    $this->SetFont('Arial', 'B', 12);
  
    $this->Cell(30, 10, 'Grupo 11-PWD', 0, 0, 'C');
    // Line break
    $this->Ln(20);

    $this->Cell(20,10,'Nro DNI',1,0,'C',0);
    $this->Cell(30,10,'Apellido',1,0,'C',0);
    $this->Cell(30,10,"Nombre",1,0,'C',0);
    $this->Cell(25,10,("Fecha Nac."),1,0,'C',0);
    $this->Cell(30,10,("Telefono"),1,0,'C',0);
    $this->Cell(45,10,("Domicilio"),1,1,'C',0);

   

}

// Page footer
function Footer()
{
    // Position at 1.5 cm from bottom
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Page number
    $this->Cell(0,10,utf8_decode('Página '.$this->PageNo()).'/{nb}',0,0,'C');
}
}

$objAbmPersona = new AbmPersona();
$listaPersonas = [];
$null= NULL;
$listaPersonas = $objAbmPersona->buscar($null);

// Instanciation of inherited class
$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Times','',12);
$pdf->SetTextColor(46, 64, 83);
foreach($listaPersonas as $objPersona){
    $pdf->Cell(20,10,$objPersona["NroDni"],1,0,'C',0);
    $pdf->Cell(30,10,$objPersona["Apellido"],1,0,'C',0);
    $pdf->Cell(30,10,$objPersona["Nombre"],1,0,'C',0);
    $pdf->Cell(25,10,$objPersona["fechaNac"],1,0,'C',0);
    $pdf->Cell(30,10,($objPersona["Telefono"]),1,0,'C',0);
    $pdf->Cell(45,10,($objPersona["Domicilio"]),1,1,'C',0);



}
$pdf->Output();




/*


$pdf= new FPDF(); //uso el constructor con sus valores por defecto ('P','mm', A4)
$pdf->AddPage(); //creamos una nueva pagina
$pdf->SetFont('Arial','B',16); //Es obligatorio escoger una fuente
$pdf->SetX(10);//margen de la hoja
$pdf->SetY(10); //salto de linea de 10 mm?
$pdf->Cell(40,10,'HOLA MUNDO!, estoy utilizando fpdf',1);//Imprimo una celda
$pdf->SetY(20);
$pdf->Cell(60,10,'Hecho con FPDF.',0,1,'C'); //celda con texto centrado
$pdf->Output();*/
?>