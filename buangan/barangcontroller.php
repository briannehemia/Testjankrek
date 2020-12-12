<?php
	require_once '../db_gudang/mdl_barang.php';
	$conn = new mdlbarang();
	// CLASS UNTUK LOG KEAMANAN
	require_once '../db/mdl_log.php';
	$log  = new mdllog();
	//include data untuk keamanan
	require_once '../db/koneksi.php';

	$action = $_GET['action'];
	if($action == "tambah"){	
			$nama_barang = $_POST['nama_barang'];
			$jumlah  = $_POST['jumlah'];
			$harga = $_POST['harga'];
			$conn->create($nama_barang, $jumlah, $harga);
			header('location:../gudang/data-barang.php');

	}elseif($action == "addbarang"){ 	
			$nama_barang = $_POST['postnama_barang'];
			$jumlah  = $_POST['postjumlah'];
			$harga = $_POST['postharga'];
			$conn->addbarang($nama_barang, $jumlah, $harga);

			// Log add data pelamar
			session_start();
			$loginnama = $_SESSION['nama'];
			$action = "Add Data";
			$keterangan = "Data yang telah di hapus adalah data dengan id_barang ".$_GET['postid'] ." dan Berikut detailnya : <br/>" ."
nama_barang : " .$nama_barang ."<br/>" ."
jumlah : " .$jumlah ."<br/>" ."
harga : " .$harga;
			$log->logout($action, $loginnama, $keterangan);
			session_abort(); 
		   	header("location:../gudang/data-barang.php");		
	
	}elseif($action == "hapus-bro"){ 

	// Log Hapus
		// $sql = "SELECT * FROM tbpendaftar WHERE idpendaftar='" .$_GET['postid'] ."' ";
	
		$query = mysqli_query($link, "SELECT * FROM tbbaranggudang WHERE id_barang = '" .$_GET['postid'] ."' ");
		$data = mysqli_fetch_array($query);
		$keterangan = "Data yang telah di hapus adalah data dengan id_barang ".$_GET['postid'] ." dan Berikut detailnya : <br/>" ."
nama_barang : " .$nama_barang['nama_barang'] ."<br/>" ."
jumlah : " .$jumlah['jumlah'] ."<br/>" ."
harga : " .$harga['harga'];

		session_start();
        $loginnama = $_SESSION['nama'];
        $action = "Delete Data"; 
        $log->logout($action, $loginnama, $keterangan);
		session_abort();
		// Hapus		
		$conn->hapus($_GET['postid']);
		header("location:../gudang/data-barang.php");

	}elseif($action == "edtbarang"){
		$id = $_POST['editid'];
		$nama_barang = $_POST['editnama_barang'];
		$jumlah = $_POST['editjumlah'];
		$harga = $_POST['editharga'];
		$conn->edtbarang($id, $nama_barang, $jumlah, $harga);

		// Log add data pelamar
			session_start();
			$loginnama = $_SESSION['nama'];
			$action = "Add Data";
			$keterangan = "Data yang telah di hapus adalah data dengan id_barang ".$_GET['postid'] ." dan Berikut detailnya : <br/>" ."
nama_barang : " .$nama_barang ."<br/>" ."
jumlah : " .$jumlah ."<br/>" ."
harga : " .$harga;
			$log->logout($action, $loginnama, $keterangan);
			session_abort();
		header("location:../gudang/data-barang.php");
	}


	
?>