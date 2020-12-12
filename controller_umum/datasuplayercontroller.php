<?php
	require_once '../db_gudang/mdl_datasuplayer.php';
	$conn = new mdldatasuplayer();
	// CLASS UNTUK LOG KEAMANAN
	require_once '../db/mdl_log.php';
	$log  = new mdllog();
	//include data untuk keamanan
	require_once '../db/koneksi.php';

	$action = $_GET['action'];
	if($action == "tambah"){	
			$id_suplayer = $_POST['id_suplayer'];
			$nama_pemilik  = $_POST['nama_pemilik'];
			$nama_toko = $_POST['nama_toko'];
			$no_rekening = $_POST['no_rekening'];
			$alamat  = $_POST['alamat'];
			$email = $_POST['email'];
			$phone = $_POST['phone'];
			$conn->tambah($id_suplayer, $nama_pemilik, $nama_toko, $no_rekening, $alamat, $email, $phone);
			header('location:../gudang/data-suplayer.php');

	}elseif($action == "adddatasuplayer"){ 	
			$id_suplayer = $_POST['postid_suplayer'];
			$nama_pemilik  = $_POST['postnama_pemilik'];
			$nama_toko = $_POST['postnama_toko'];
			$email = $_POST['postemail'];
			$no_rekening = $_POST['postno_rekening'];
			$alamat  = $_POST['postalamat'];
			$phone = $_POST['postphone'];
			$password = $_POST['postpassword'];
			$foto = $_POST['postfoto'];
			$level = $_POST['postlevel'];
			$conn->adddatasuplayer($id_suplayer, $nama_pemilik, $nama_toko, $email, $no_rekening, $alamat, $phone, $password, $foto, $level);

			// Log add data pelamar
			session_start();
			$loginnama = $_SESSION['nama'];
			$action = "Add Data";
			$keterangan = "Data yang telah di hapus adalah data dengan id_suplayer ".$_GET['postid'] ." dan Berikut detailnya : <br/>" ."
id_suplayer : " .$id_suplayer ."<br/>" ."
nama_pemilik : " .$nama_pemilik ."<br/>" ."
nama_toko : " .$nama_toko;
			$log->logout($action, $loginnama, $keterangan);
			session_abort(); 
		   	header("location:../gudang/data-suplayer.php");		
	
	}elseif($action == "hapus-bro"){ 

	// Log Hapus
		// $sql = "SELECT * FROM tbpendaftar WHERE idpendaftar='" .$_GET['postid'] ."' ";
	
		$query = mysqli_query($link, "SELECT * FROM tbdatasuplayer WHERE id_suplayer = '" .$_GET['postid'] ."' ");
		$data = mysqli_fetch_array($query);
		$keterangan = "Data yang telah di hapus adalah data dengan id_suplayer ".$_GET['postid'] ." dan Berikut detailnya : <br/>" ."
id_suplayer : " .$id_suplayer['id_suplayer'] ."<br/>" ."
nama_pemilik : " .$nama_pemilik['nama_pemilik'] ."<br/>" ."
nama_toko : " .$nama_toko['nama_toko'];

		session_start();
        $loginnama = $_SESSION['nama'];
        $action = "Delete Data"; 
        $log->logout($action, $loginnama, $keterangan);
		session_abort();
		// Hapus		
		$conn->hapus($_GET['postid']);
		header("location:../gudang/data-suplayer.php");

	}elseif($action == "edtdatasuplayer"){
		$id = $_POST['editid'];
		$id_suplayer = $_POST['editid_suplayer'];
		$nama_pemilik = $_POST['editnama_pemilik'];
		$nama_toko = $_POST['editnama_toko'];
		$no_rekening = $_POST['editno_rekening'];
		$alamat  = $_POST['editalamat'];
		$email = $_POST['editemail'];
		$phone = $_POST['editphone'];
		$conn->edtdatasuplayer($id_suplayer, $nama_pemilik, $nama_toko, $no_rekening, $alamat, $email, $phone);

		// Log add data pelamar
			session_start();
			$loginnama = $_SESSION['nama'];
			$action = "Add Data";
			$keterangan = "Data yang telah di hapus adalah data dengan id_suplayer ".$_GET['postid'] ." dan Berikut detailnya : <br/>" ."
id_suplayer : " .$id_suplayer ."<br/>" ."
nama_pemilik : " .$nama_pemilik ."<br/>" ."
nama_toko : " .$nama_toko;
			$log->logout($action, $loginnama, $keterangan);
			session_abort();
		header("location:../gudang/data-suplayer.php");
	}


	
?>