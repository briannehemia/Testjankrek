<?php
	require_once '../db_gudang/mdl_requestalat.php';
	$conn = new mdlrequestalat();
	// CLASS UNTUK LOG KEAMANAN
	require_once '../db/mdl_log.php';
	$log  = new mdllog();
	//include data untuk keamanan
	require_once '../db/koneksi.php';

	$action = $_GET['action'];
	if($action == "tambah"){	
			$nama_alat = $_POST['nama_alat'];
			$jumlah  = $_POST['jumlah'];
			$tgl_max = $_POST['tgl_max'];
			$jam_max = $_POST['jam_max'];
			$conn->create($nama_alat, $jumlah, $tgl_max, $jam_max);
			header('location:../gudang/data-requestalat.php');

	}elseif($action == "addrequestalat"){ 	
			$nama_alat = $_POST['postnama_alat'];
			$jumlah  = $_POST['postjumlah'];
			$tgl_max = $_POST['posttgl_max'];
			$jam_max = $_POST['postjam_max'];
			$conn->addrequestalat($nama_alat, $jumlah, $tgl_max, $jam_max);

			// Log add data pelamar
			session_start();
			$loginnama = $_SESSION['nama'];
			$action = "Add Data";
			$keterangan = "Data yang telah di hapus adalah data dengan id_requestalat ".$_GET['postid'] ." dan Berikut detailnya : <br/>" ."
nama_alat : " .$nama_alat ."<br/>" ."
jumlah : " .$jumlah ."<br/>" ."
tgl_max : " .$tgl_max ."<br/>" ."
jam_max : " .$jam_max;
			$log->logout($action, $loginnama, $keterangan);
			session_abort(); 
		   	header("location:../gudang/data-requestalat.php");		
	
	}elseif($action == "hapus-bro"){ 

	// Log Hapus
		// $sql = "SELECT * FROM tbpendaftar WHERE idpendaftar='" .$_GET['postid'] ."' ";
	
		$query = mysqli_query($link, "SELECT * FROM tbrequestalat WHERE id_requestalat = '" .$_GET['postid'] ."' ");
		$data = mysqli_fetch_array($query);
		$keterangan = "Data yang telah di hapus adalah data dengan id_requestalat ".$_GET['postid'] ." dan Berikut detailnya : <br/>" ."
nama_alat : " .$nama_alat['nama_alat'] ."<br/>" ."
jumlah : " .$jumlah['jumlah'] ."<br/>" ."
tgl_max : " .$tgl_max['tgl_max'] ."<br/>" ."
jam_max : " .$jam_max['jam_max'];

		session_start();
        $loginnama = $_SESSION['nama'];
        $action = "Delete Data"; 
        $log->logout($action, $loginnama, $keterangan);
		session_abort();
		// Hapus		
		$conn->hapus($_GET['postid']);
		header("location:../gudang/data-requestalat.php");

	}elseif($action == "edtrequestalat"){
		$id = $_POST['editid'];
		$nama_alat = $_POST['editnama_alat'];
		$jumlah = $_POST['editjumlah'];
		$tgl_max = $_POST['edittgl_max'];
		$jam_max = $_POST['editjam_max'];
		$conn->edtrequestalat($id, $nama_alat, $jumlah, $tgl_max, $jam_max);

		// Log add data pelamar
			session_start();
			$loginnama = $_SESSION['nama'];
			$action = "Add Data";
			$keterangan = "Data yang telah di hapus adalah data dengan id_requestalat ".$_GET['postid'] ." dan Berikut detailnya : <br/>" ."
nama_alat : " .$nama_alat ."<br/>" ."
jumlah : " .$jumlah ."<br/>" ."
tgl_max : " .$tgl_max ."<br/>" ."
jam_max : " .$jam_max;
			$log->logout($action, $loginnama, $keterangan);
			session_abort();
		header("location:../gudang/data-requestalat.php");
	}


	
?>