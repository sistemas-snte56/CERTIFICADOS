<?php 

define('FPDF_FONTPATH', 'font/');
require ('fpdf.php');
require ('config.php');

$cedula= $_POST['cedula'];
$strConsulta = "SELECT primer_nombre, primer_apellido from nacional where cedula='$cedula'";
$cedula = mysql_query($strConsulta);
$row = mysql_fetch_array($cedula);

//Propiedades
//$cedula = $_POST['cedula'];
$dia = '28';
$mes = 'Noviembre';
//$ano = '2013';

//$pdf = new FPDF('L','cm',array(29.700,21));
$pdf=new FPDF('L','mm','A4');
$pdf->SetTextColor(0,0,0);

$pdf->AddPage();
$pdf->Image('img/certificado.png',0,0,297,210,'PNG');

// Nombre y Apellido
$pdf->SetFont('helvetica','B',35);
$pdf->Text(80,105,$row['primer_nombre'] . " " . $row['primer_apellido']);

// Cedula
//$pdf->SetFont('helvetica','',8);
//$pdf->Text(1.7,6.1,$cedula);

// Dia
$pdf->SetFont('helvetica','B',15);
$pdf->Text(210,147,$dia);

// Mes

$pdf->SetFont('helvetica','B',15);
$pdf->Text(230,147,$mes);


$pdf->Output('certificado','I');
?>