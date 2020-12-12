
<?php

// $servername    = "localhost";
// $username    = "dumet";
// $password    = "school";
// $dbname        = "komaldev";

// $conn    = mysqli_connect ($servername, $username, $password, $dbname);
// if (!$conn){
//     die ("Connection Failed: ". mysqli_connect_error());
//     }

// Koneksi library FPDF
require('../assets/fpdf/fpdf.php');
require('../db/mdl_laporan.php');
// Setting halaman PDF
$pdf = new FPDF('l','mm','A4');
// Menambah halaman baru
$pdf->AddPage();

//  width, Height, Size
$pdf->Image('../assets/image/bglaporan.jpg',0,0,300);
$pdf->Cell(10,7,'',0,1);
// Setting jenis font
$pdf->SetFont('Arial','B',24);
// Membuat string
$pdf->Cell(300,7,'Laporan Data Permasalahan',0,1,'C');
$pdf->SetFont('Arial','B',11);
$pdf->Cell(300,7,'KOMALDEV Indonesia',0,1,'C');
// Setting spasi kebawah supaya tidak rapat
$pdf->Cell(10,7,'',0,1);
$pdf->Cell(10,7,'',0,1);

$pdf->SetFont('Arial','B',10);
$pdf->Cell(20,6,'Nama',1,0);
$pdf->Cell(35,6,'Email',1,0);
$pdf->Cell(50,6,'Alamat',1,0);
$pdf->Cell(35,6,'Jenis Kelamin',1,0);
$pdf->Cell(35,6,'Masalah',1,0);
$pdf->Cell(50,6,'Detail Masalah',1,0);
$pdf->Cell(50,6,'Saran Solusi',1,1);
 
    $pdf->SetFont('Arial','',10);
    $con = new mdllaporan();
    $read = $con->viewlaporan();
	while($fetch = $read->fetch_array()){
// $pdf->SetFont('Arial','',10);
// $query = mysqli_query( $conn, "SELECT * FROM tbmasalah");
// while ($row = mysqli_fetch_array($query)){
    
    $pdf->Cell(20,6,$fetch['nama'],1,0);
    $pdf->Cell(35,6,$fetch['email'],1,0);
    $pdf->Cell(50,6,$fetch['alamat'],1,0);
    $pdf->Cell(35,6,$fetch['jenis_kelamin'],1,0);
    $pdf->Cell(35,6,$fetch['masalah'],1,0);
    $pdf->Cell(50,6,$fetch['detail_masalah'],1,0);
    $pdf->Cell(50,6,$fetch['saran'],1,1);
}

$pdf->Output();
?>
