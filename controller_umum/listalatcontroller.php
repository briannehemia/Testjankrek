<?php
	require_once '../db_gudang/mdl_listalat.php';
	$conn = new mdllistalat();
	// CLASS UNTUK LOG KEAMANAN
	require_once '../db/mdl_log.php';
	$log  = new mdllog();
	//include data untuk keamanan
	require_once '../db/koneksi.php';

	$action = $_GET['action'];
	if($action == "tambah"){	
			$id_listalat  = $_POST['id_listalat'];
			$nama_alat = $_POST['nama_alat'];
			$conn->create($id_listalat, $nama_alat);
			header('location:../gudang/data-listalat.php');

	}elseif($action == "addlistalat"){ 	
			$id_listalat  = $_POST['postid_listalat'];
			$nama_alat = $_POST['postnama_alat'];
			$conn->addlistalat($id_listalat, $nama_alat);

			// Log add data pelamar
			session_start();
			$loginnama = $_SESSION['nama'];
			$action = "Add Data";
			$keterangan = "Data yang telah di masukan adalah data dengan id_listalat ".$_GET['postid'] ." dan Berikut detailnya : <br/>" ."
id_listalat : " .$id_listalat ."<br/>" ."
nama_alat : " .$nama_alat;
			$log->logout($action, $loginnama, $keterangan);
			session_abort(); 
		   	header("location:../gudang/data-listalat.php");		
	
	}elseif($action == "hapus-bro"){ 

	// Log Hapus
		// $sql = "SELECT * FROM tbpendaftar WHERE idpendaftar='" .$_GET['postid'] ."' ";
	
		$query = mysqli_query($link, "SELECT * FROM tblistalatgudang WHERE id_listalat = '" .$_GET['postid'] ."' ");
		$data = mysqli_fetch_array($query);
		$keterangan = "Data yang telah di hapus adalah data dengan id_listalat ".$_GET['postid'] ." dan Berikut detailnya : <br/>" ."
id_listalat : " .$id_listalat['id_listalat'] ."<br/>" ."
nama_alat : " .$nama_alat['nama_alat'];

		session_start();
        $loginnama = $_SESSION['nama'];
        $action = "Delete Data"; 
        $log->logout($action, $loginnama, $keterangan);
		session_abort();
		// Hapus		
		$conn->hapus($_GET['postid']);
		header("location:../gudang/data-listalat.php");

	}elseif($action == "edtlistalat"){
		$id = $_POST['editid'];
		$id_listalat = $_POST['editid_listalat'];
		$nama_alat = $_POST['editnama_alat'];
		$conn->edtlistalat($id, $id_listalat, $nama_alat);

		// Log add data pelamar
			session_start();
			$loginnama = $_SESSION['nama'];
			$action = "Add Data";
			$keterangan = "Data yang telah di edit adalah data dengan id_listalat ".$_GET['postid'] ." dan Berikut detailnya : <br/>" ."
id_listalat : " .$id_listalat ."<br/>" ."
nama_alat : " .$nama_alat;
			$log->logout($action, $loginnama, $keterangan);
			session_abort();
		header("location:../gudang/data-listalat.php");
	}


	
?>