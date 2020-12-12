<?php

// Koneksi library FPDF
require('../assets/fpdf/fpdf.php');
require('../db_suplayer/mdl_data.php');
// Setting halaman PDF
$pdf = new FPDF('l','mm','A4');
// Menambah halaman baru
$pdf->AddPage();

//  width, Height, Size
// $pdf->Image('../assets/image/bglaporan.jpg',0,0,300);
$pdf->Cell(10,7,'',0,1);
// Setting jenis font
$pdf->SetFont('Arial','B',24);
// Membuat string
$pdf->Cell(300,7,'Data Stok',0,1,'C');
$pdf->SetFont('Arial','B',11);
$pdf->Cell(300,7,'Suplayer',0,1,'C');
// Setting spasi kebawah supaya tidak rapat
$pdf->Cell(10,7,'',0,1);
$pdf->Cell(10,7,'',0,1);

$pdf->SetFont('Arial','B',10);
$pdf->Cell(50,6,'Nama Barang',1,0,'C');
$pdf->Cell(35,6,'Jumlah',1,0,'C');
$pdf->Cell(50,6,'Harga',1,1,'C');
 
    $pdf->SetFont('Arial','',10);
    $con = new mdllaporan();
    $read = $con->viewlaporan();
	while($fetch = $read->fetch_array()){
// $pdf->SetFont('Arial','',10);
// $query = mysqli_query( $conn, "SELECT * FROM tbmasalah");
// while ($row = mysqli_fetch_array($query)){
    
    $pdf->Cell(50,6,$fetch['nama_barang'],1,0,'C');
    $pdf->Cell(35,6,$fetch['jumlah'],1,0,'C');
    $pdf->Cell(50,6,$fetch['harga'],1,1,'C');
}

$pdf->Output();
?>
