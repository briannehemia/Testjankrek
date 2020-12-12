<?php
include 'koneksi.php';

public function tampilorder()
{
	$conn 			= db();
	$sql			= "SELECT tbl_order.no,tbl_obat.kodeobat,tbl_obat.namaobat,tbl_pemasok.nama,tbl_order.harga,tbl_order.jumlah,tbl_order.tgl FROM tbl_order JOIN tbl_obat ON tbl_obat.kodeobat=tbl_order.kodeobat JOIN tbl_pemasok ON tbl_order.kodepemasok=tbl_order.kodepemasok GROUP BY tbl_order.no";
	$resultorder 		= $conn->query($sql);
	return $resultorder;
} 

?>