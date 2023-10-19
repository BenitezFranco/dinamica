<?php

include('../../configuracion.php');

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
    $this->Cell(50,10,'Reporte de autos',1,0,'C');
    // Line break
    $this->Ln(20);


}

// Page footer
function Footer()
{
    // Position at 1.5 cm from bottom
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Page number
    
    //$this->Cell(0,10,utf8_decode('Página '.$this->PageNo()).'/{nb}',0,0,'C');
    $this->Cell(0,10,mb_convert_encoding('Página '.$this->PageNo(), 'ISO-8859-1', 'UTF-8').'/{nb}',0,0,'C');
}
}
//prueba

$objAbmAuto = new AbmAuto();
$listaAuto = [];
$null= NULL;
$listaAuto = $objAbmAuto->buscar($null);

//fin prueba
// Instanciation of inherited class
$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();


$pdf->SetFont('Arial','B',12);
$pdf->Cell(40,10,'Patente',1,0,'C',0);
$pdf->Cell(30,10,'Marca',1,0,'C',0);
$pdf->Cell(30,10,"Modelo",1,0,'C',0);
//$this->Cell(40,10,utf8_decode("Nombre Dueño"),1,0,'C',0);
$pdf->Cell(40,10,mb_convert_encoding("Nombre Dueño", 'ISO-8859-1', 'UTF-8'),1,0,'C',0);
$pdf->Cell(40,10,mb_convert_encoding("Apellido Dueño", 'ISO-8859-1', 'UTF-8'),1,1,'C',0);
 
$pdf->SetFont('Times','',12);

foreach($listaAuto as $objAuto){
    $pdf->Cell(40,10,$objAuto["Patente"],1,0,'C',0);
    $pdf->Cell(30,10,$objAuto["Marca"],1,0,'C',0);
    $pdf->Cell(30,10,$objAuto["Modelo"],1,0,'C',0);
    $pdf->Cell(40,10,$objAuto["DniDuenio"]["Nombre"],1,0,'C',0);
    $pdf->Cell(40,10,utf8_decode($objAuto["DniDuenio"]["Apellido"]),1,1,'C',0);

}
/*
$pdf->AddPage();

$pdf->SetFont('Courier','B',15);
$pdf->Write(5,"Hola Mundo");
$pdf->Image('../img/descarga.jpeg',50,50,20,0,0,'https://www.fi.uncoma.edu.ar');
//$pdf->Ln(50);
$pdf->SetXY(20,50);
$pdf->SetTextColor(0,0,255);
$pdf->Write(5,"Volver");
*/
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