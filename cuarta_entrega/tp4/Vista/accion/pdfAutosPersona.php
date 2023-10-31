<?php

$dni = $_GET['dni'];


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
    $this->Cell(80,10,'Reporte de autos por persona',1,0,'C');
   
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


//PRUEBA
// Función para mostrar los datos de los autos
function MostrarDatosAutos($pdf, $autos)
{
    $pdf->Ln();  

    $pdf->SetFont('Arial', '', 12);
    $pdf->SetTextColor(0, 0, 0);

    $pdf->Cell(0, 10, 'Autos:', 0, 1, 'L');

    $pdf->Cell(40, 10, 'Patente', 1, 0, 'C');
    $pdf->Cell(40, 10, 'Marca', 1, 0, 'C');
    $pdf->Cell(40, 10, 'Modelo', 1, 1, 'C');
    if (count($autos) == 0) {
        $pdf->SetFont('Arial', '', 12);
        $pdf->SetTextColor(0, 0, 0);
        $pdf->Cell(0, 10, 'Esta persona no posee autos registrados', 0, 1, 'L');
    } else {
    foreach ($autos as $auto) {
        $pdf->Cell(40, 10, $auto['Patente'], 1, 0, 'C');
        $pdf->Cell(40, 10, $auto['Marca'], 1, 0, 'C');
        $pdf->Cell(40, 10, $auto['Modelo'], 1, 1, 'C');
    }
}
}
//FIN PRUEBA

$objAbmPersona = new AbmPersona();
$duenio = [];
$duenio = $objAbmPersona->buscar(['NroDni' => $dni]);
// Instanciation of inherited class
$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Times','',12);
$pdf->SetTextColor(46, 64, 83);
foreach($duenio as $objPersona){
    $pdf->Cell(20,10,$objPersona["NroDni"],1,0,'C',0);
    $pdf->Cell(30,10,$objPersona["Apellido"],1,0,'C',0);
    $pdf->Cell(30,10,$objPersona["Nombre"],1,0,'C',0);
    $pdf->Cell(25,10,$objPersona["fechaNac"],1,0,'C',0);
    $pdf->Cell(30,10,($objPersona["Telefono"]),1,0,'C',0);
    $pdf->Cell(45,10,($objPersona["Domicilio"]),1,1,'C',0);
    $autos = obtenerAutosDeLaPersona($objPersona["NroDni"]);  // traigo los datos de los autos de la persona
    MostrarDatosAutos($pdf, $autos);


}
$pdf->Output();

function obtenerAutosDeLaPersona($dni)
{
 
$objAbmAuto = new AbmAuto();
$listaAuto = [];
$listaAuto = $objAbmAuto->buscar(['DniDuenio' => $dni]);

$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Times','',12);
foreach($listaAuto as $objAuto){
    $pdf->Cell(40,10,$objAuto["Patente"],1,0,'C',0);
    $pdf->Cell(30,10,$objAuto["Marca"],1,0,'C',0);
    $pdf->Cell(30,10,$objAuto["Modelo"],1,0,'C',0);
} return $listaAuto;
}