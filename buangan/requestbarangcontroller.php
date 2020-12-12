<?php
	require_once '../db_gudang/mdl_requestbarang.php';
	$conn = new mdlrequestbarang();
	// CLASS UNTUK LOG KEAMANAN
	require_once '../db/mdl_log.php';
	$log  = new mdllog();
	//include data untuk keamanan
	require_once '../db/koneksi.php';

	$action = $_GET['action'];
	if($action == "tambah"){	
			$nama_barang = $_POST['nama_barang'];
			$jumlah  = $_POST['jumlah'];
			$tgl_max = $_POST['tgl_max'];
			$jam_max = $_POST['jam_max'];
			$conn->create($nama_barang, $jumlah, $tgl_max, $jam_max);
			header('location:../gudang/data-requestbarang.php');

	}elseif($action == "addrequestbarang"){ 
			$id_listbarang = $_POST['postid_listbarang'];
			$nama_barang = $_POST['postnama_barang'];
			$jumlah  = $_POST['postjumlah'];
			$tgl_max = $_POST['posttgl_max'];
			$jam_max = $_POST['postjam_max'];
			$conn->addrequestbarang($id_listbarang, $nama_barang, $jumlah, $tgl_max, $jam_max);

			// Log add data pelamar
			session_start();
			$loginnama = $_SESSION['nama'];
			$action = "Add Data";
			$keterangan = "Data yang telah di hapus adalah data dengan id_requestbarang ".$_GET['postid'] ." dan Berikut detailnya : <br/>" ."
nama_barang : " .$nama_barang ."<br/>" ."
jumlah : " .$jumlah ."<br/>" ."
tgl_max : " .$tgl_max ."<br/>" ."
jam_max : " .$jam_max;
			$log->logout($action, $loginnama, $keterangan);
			session_abort(); 
		   	header("location:../gudang/data-requestbarang.php");		
	
	}elseif($action == "hapus-bro"){ 

	// Log Hapus
		// $sql = "SELECT * FROM tbpendaftar WHERE idpendaftar='" .$_GET['postid'] ."' ";
	
		$query = mysqli_query($link, "SELECT * FROM tbrequestbarang WHERE id_requestbarang = '" .$_GET['postid'] ."' ");
		$data = mysqli_fetch_array($query);
		$keterangan = "Data yang telah di hapus adalah data dengan id_requestbarang ".$_GET['postid'] ." dan Berikut detailnya : <br/>" ."
nama_barang : " .$nama_barang['nama_barang'] ."<br/>" ."
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
		header("location:../gudang/data-requestbarang.php");

	}elseif($action == "edtrequestbarang"){
		$id = $_POST['editid'];
		$nama_barang = $_POST['editnama_barang'];
		$jumlah = $_POST['editjumlah'];
		$tgl_max = $_POST['edittgl_max'];
		$jam_max = $_POST['editjam_max'];
		$conn->edtrequestbarang($id, $nama_barang, $jumlah, $tgl_max, $jam_max);

		// Log add data pelamar
			session_start();
			$loginnama = $_SESSION['nama'];
			$action = "Add Data";
			$keterangan = "Data yang telah di hapus adalah data dengan id_requestbarang ".$_GET['postid'] ." dan Berikut detailnya : <br/>" ."
nama_barang : " .$nama_barang ."<br/>" ."
jumlah : " .$jumlah ."<br/>" ."
tgl_max : " .$tgl_max ."<br/>" ."
jam_max : " .$jam_max;
			$log->logout($action, $loginnama, $keterangan);
			session_abort();
		header("location:../gudang/data-requestbarang.php");
	}


	
?>