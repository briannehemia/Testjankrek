<?php
	require_once '../db/modelrequest.php';
	$conn = new modelrequest();

	$aksi = $_GET['aksi'];
	if($aksi == "pegawai"){	
			$divisi = $_POST['postdivisi'];
			$jumlah  = $_POST['postjumlah'];
			$alasan = $_POST['postalasan'];
            $syarat = $_POST['postsyarat'];
            $conn->addreqpegawai($divisi, $jumlah,  $alasan, $syarat);
			header('location: ../admin/mailreqpegawai.php');

	}

	elseif($aksi == "dana"){	
		$divisi = $_POST['postdivisi'];
		$jumlah  = $_POST['postjumlah'];
		$keperluan = $_POST['postkeperluan'];
	
		$conn->addreqdana($divisi, $jumlah,  $keperluan);
		header('location: ../admin/mailreqdana.php');

}
	
?>