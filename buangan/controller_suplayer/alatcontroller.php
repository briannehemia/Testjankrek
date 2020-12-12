<?php
	require_once '../db_suplayer/mdl_alat.php';
	$conn = new mdlalat();
	// CLASS UNTUK LOG KEAMANAN
	require_once '../db/mdl_log.php';
	$log  = new mdllog();
	//include data untuk keamanan
	require_once '../db/koneksi.php';

	$action = $_GET['action'];
	if($action == "tambah"){	
			$nama_alat = $_POST['nama_alat'];
			$jumlah  = $_POST['jumlah'];
			$harga = $_POST['harga'];
			$conn->create($nama_alat, $jumlah, $harga);
			header('location:../suplayer/data-alat.php');

	}elseif($action == "addalat"){ 	
		$$id_alatsup = $_POST['postidauto']; 
			$id_listalat = $_POST['postid_listalat'];
			$nama_alat = $_POST['postnama_alat'];
			$jumlah  = $_POST['postjumlah'];
			$harga = $_POST['postharga'];
			$conn->addalat($id_alatsup, $id_listalat, $nama_alat, $jumlah, $harga);

			// Log add data pelamar
			session_start();
			$loginnama = $_SESSION['nama'];
			$action = "Add Data";
			$keterangan = "Data yang telah di hapus adalah data dengan id_alatsup ".$_GET['postid'] ." dan Berikut detailnya : <br/>" ."
nama_alat : " .$nama_alat ."<br/>" ."
jumlah : " .$jumlah ."<br/>" ."
harga : " .$harga;
			$log->logout($action, $loginnama, $keterangan);
			session_abort(); 
		   	header("location:../suplayer/data-alat.php");		
	
	}elseif($action == "hapus-bro"){ 

	// Log Hapus
		// $sql = "SELECT * FROM tbpendaftar WHERE idpendaftar='" .$_GET['postid'] ."' ";
	
		$query = mysqli_query($link, "SELECT * FROM tbalatsuplayer WHERE id_alatsup = '" .$_GET['postid'] ."' ");
		$data = mysqli_fetch_array($query);
		$keterangan = "Data yang telah di hapus adalah data dengan id_alatsup ".$_GET['postid'] ." dan Berikut detailnya : <br/>" ."
nama_alat : " .$nama_alat['nama_alat'] ."<br/>" ."
jumlah : " .$jumlah['jumlah'] ."<br/>" ."
harga : " .$harga['harga'];

		session_start();
        $loginnama = $_SESSION['nama'];
        $action = "Delete Data"; 
        $log->logout($action, $loginnama, $keterangan);
		session_abort();
		// Hapus		
		$conn->hapus($_GET['postid']);
		header("location:../suplayer/data-alat.php");

	}elseif($action == "edtalat"){
		$id = $_POST['editid'];
		$nama_alat = $_POST['editnama_alat'];
		$jumlah = $_POST['editjumlah'];
		$harga = $_POST['editharga'];
		$conn->edtalat($id, $nama_alat, $jumlah, $harga);

		// Log add data pelamar
			session_start();
			$loginnama = $_SESSION['nama'];
			$action = "Add Data";
			$keterangan = "Data yang telah di hapus adalah data dengan id_alatsup ".$_GET['postid'] ." dan Berikut detailnya : <br/>" ."
nama_alat : " .$nama_alat ."<br/>" ."
jumlah : " .$jumlah ."<br/>" ."
harga : " .$harga;
			$log->logout($action, $loginnama, $keterangan);
			session_abort();
		header("location:../suplayer/data-alat.php");
	}


	
?>