<?php
	require_once '../db_gudang/mdl_request.php';
	$conn = new mdlrequest();

	$aksi = $_GET['aksi'];
	if($aksi == "pegawai"){	
			$divisi = $_POST['postdivisi'];
			$jumlah  = $_POST['postjumlah'];
			$alasan = $_POST['postalasan'];
            $syarat = $_POST['postsyarat'];
            $conn->addreqpegawai($divisi, $jumlah,  $alasan, $syarat);
			header('location: ../gudang/mailreqpegawai.php');

	}


	
?>