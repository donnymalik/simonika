<?php
include 'koneksi.php';
require('fpdf/fpdf.php');

$pdf = new FPDF("P","cm","A4");

$pdf->SetMargins(1,0.8,1.5,1);
$pdf->AliasNbPages();
$pdf->AddPage();


$pdf->SetFont('Arial','',8);
$id = $_GET['id'];
$query = mysqli_query($conn,"SELECT * FROM iii WHERE iii_id = $id") or die (mysqli_error());
while($data=mysqli_fetch_array($query))
{
	$pdf->SetFont('Times','B',15);
	$pdf->Cell(0,1,$data['iii_niv'],0,9,'C');
	$pdf->ln(0.3);
	$pdf->SetFont('Times','',9);
	$pdf->SetY(4);
	$pdf->SetX(2);
	
	$pdf->SetFont('Times','',12);
	$pdf->SetY(6);
	$pdf->SetX(2);
	$pdf->Cell(4,0,"Nama Penggagas  ",0,0,'L');
	$pdf->Cell(1,0,": ",0,0,'C');
	$pdf->Cell(1.5,0,$data['iii_pgs'],0,1,'L');
	$pdf->SetY(6.5);
	$pdf->SetX(2);
	$pdf->Cell(4,0,"Nama Instansi  ",0,0,'L');
	$pdf->Cell(1,0,": ",0,0,'C');
	$pdf->Cell(1.5,0,$data['iii_nis'],0,1,'L');
	$pdf->SetY(7);
	$pdf->SetX(2);
	$pdf->Cell(4,0,"Jenis Inovasi  ",0,0,'L');
	$pdf->Cell(1,0,": ",0,0,'C');
	$pdf->Cell(1.5,0,$data['iii_ji'],0,1,'L');
	$pdf->SetY(7.5);
	$pdf->SetX(2);
	$pdf->Cell(4,0,"Angkatan  ",0,0,'L');
	$pdf->Cell(1,0,": ",0,0,'C');
	$pdf->Cell(1.5,0,$data['iii_akt'],0,1,'L');
	$pdf->SetY(8);
	$pdf->SetX(2);
	$pdf->Cell(4,0,"Tahun  ",0,0,'L');
	$pdf->Cell(1,0,": ",0,0,'C');
	$pdf->Cell(1.5,0,$data['iii_th'],0,1,'L');
	$pdf->SetY(8.5);
	$pdf->SetX(2);
	$pdf->Cell(4,0,"Deskripsi  ",0,0,'L');
	$pdf->Cell(1,0,": ",0,1,'C');
	$pdf->SetY(9);
	$pdf->SetX(2);
	$pdf->MultiCell(0,0.5,$data['iii_des'],0,'J');

}

$pdf->Output("Laporan_Inovasi.pdf","I");

?>
