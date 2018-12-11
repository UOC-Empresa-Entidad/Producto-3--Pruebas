<?php

require 'pdf/fpdf/fpdf.php';

$pdf= new FPDF();
$pdf->AddPage();


$pdf->SetFont('Arial','B',11);


$pdf->SetLeftMargin(20);
$pdf->SetY(90);

$pdf->Image('img/frikizone4.png',55,20,100,50,'png','#');
$pdf->Image('img/pagado.png',80,260,50,25,'png','#');

//Nombre
$pdf->Cell(100,5,'Nombre: --------',0,1,'L');
//Apellidos
$pdf->Cell(100,5,'Apellidos: --------',0, 1,'L');
//Calle, piso y número
$pdf->Cell(100,5,'Vivienda: --------',0, 1,'L');
//Población y provincia
$pdf->Cell(200,5,'Poblacion: -------- Provincia: --------',0, 1,'L');
//Telefono y correo
$pdf->Cell(200,5,'Telefono: -------- Correo: --------',0, 1,'L');

//espacio
$pdf->Cell(100,20,' ',0, 1,'C');

//productos y precios
$pdf->Cell(170,90,' Producto: --------                  Precio: --------',0, 1,'C');
$pdf->Cell(170,30,'Total: --------',0, 1,'C');



$pdf->Output();


?>