<?php
	require_once '../db_gudang/mdl_listbarang.php';
	$conn = new mdllistbarang();
	// CLASS UNTUK LOG KEAMANAN
	require_once '../db/mdl_log.php';
	$log  = new mdllog();
	//include data untuk keamanan
	require_once '../db/koneksi.php';

	$action = $_GET['action'];
	if($action == "tambah"){	
			$id_listbarang  = $_POST['id_listbarang'];
			$nama_barang = $_POST['nama_barang'];
			$conn->create($id_listbarang, $nama_barang);
			header('location:../gudang/data-listbarang.php');

	}elseif($action == "addlistbarang"){ 	
			$id_listbarang  = $_POST['postid_listbarang'];
			$nama_barang = $_POST['postnama_barang'];
			$conn->addlistbarang($id_listbarang, $nama_barang);

			// Log add data pelamar
			session_start();
			$loginnama = $_SESSION['nama'];
			$action = "Add Data";
			$keterangan = "Data yang telah di masukan adalah data dengan id_listbarang ".$_GET['postid'] ." dan Berikut detailnya : <br/>" ."
id_listbarang : " .$id_listbarang ."<br/>" ."
nama_barang : " .$nama_barang;
			$log->logout($action, $loginnama, $keterangan);
			session_abort(); 
		   	header("location:../gudang/data-listbarang.php");		
	
	}elseif($action == "hapus-bro"){ 

	// Log Hapus
		// $sql = "SELECT * FROM tbpendaftar WHERE idpendaftar='" .$_GET['postid'] ."' ";
	
		$query = mysqli_query($link, "SELECT * FROM tblistbaranggudang WHERE id_listbarang = '" .$_GET['postid'] ."' ");
		$data = mysqli_fetch_array($query);
		$keterangan = "Data yang telah di hapus adalah data dengan id_listbarang ".$_GET['postid'] ." dan Berikut detailnya : <br/>" ."
id_listbarang : " .$id_listbarang['id_listbarang'] ."<br/>" ."
nama_barang : " .$nama_barang['nama_barang'];

		session_start();
        $loginnama = $_SESSION['nama'];
        $action = "Delete Data"; 
        $log->logout($action, $loginnama, $keterangan);
		session_abort();
		// Hapus		
		$conn->hapus($_GET['postid']);
		header("location:../gudang/data-listbarang.php");

	}elseif($action == "edtlistbarang"){
		$id = $_POST['editid'];
		$id_listbarang = $_POST['editid_listbarang'];
		$nama_barang = $_POST['editnama_barang'];
		$conn->edtlistbarang($id, $id_listbarang, $nama_barang);

		// Log add data pelamar
			session_start();
			$loginnama = $_SESSION['nama'];
			$action = "Add Data";
			$keterangan = "Data yang telah di edit adalah data dengan id_listbarang ".$_GET['postid'] ." dan Berikut detailnya : <br/>" ."
id_listbarang : " .$id_listbarang ."<br/>" ."
nama_barang : " .$nama_barang;
			$log->logout($action, $loginnama, $keterangan);
			session_abort();
		header("location:../gudang/data-listbarang.php");
	}


	
?>