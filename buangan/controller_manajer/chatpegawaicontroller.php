<?php
	require_once '../db_manajer/mdl_chatpegawai.php';
	$conn = new mdlchatpegawai();

	$aksi = $_GET['aksi'];
	if($aksi == "chatpegawai"){	
			$divisi = $_POST['postdivisi'];
			$subjek  = $_POST['postsubjek'];
			$pesan = $_POST['postpesan'];
            $conn->addchatpegawai($divisi, $subjek,  $pesan);
			header('location: ../manajer/mailchatpegawai.php');

	}


	
?>