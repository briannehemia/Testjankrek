<?php
	require_once '../db_gudang/mdl_alatrusak.php';
	$conn = new mdlalatrusak();
	// CLASS UNTUK LOG KEAMANAN
	require_once '../db/mdl_log.php';
	$log  = new mdllog();
	//include data untuk keamanan
	require_once '../db/koneksi.php';

	$action = $_GET['action'];
	if($action == "tambah"){	
			$nama_alat = $_POST['nama_alat'];
			$jumlah  = $_POST['jumlah'];
			$penanggungjawab = $_POST['penanggungjawab'];
			$conn->create($nama_alat, $jumlah, $penanggungjawab);
			header('location:../gudang/data-alat-rusak.php');

	}elseif($action == "addalat"){ 	
			$id = $_POST['postid'];
			$nama_alat = $_POST['postnama_alat'];
			$jumlah  = $_POST['postjumlah'];
			$penanggungjawab = $_POST['postpenanggungjawab'];

			$jumlahbrgudang = $_POST['jumlahbrgudang'];
			$jumlahbrrusak =$_POST['jumlahbrrusak'];
			$penguranganbrgudang = $jumlahbrgudang - $jumlahbrrusak;
		
			
			$conn->addalat($id, $penguranganbrgudang, $nama_alat, $jumlahbrrusak, $penanggungjawab);

			// Log add data pelamar
			session_start();
			$loginnama = $_SESSION['nama'];
			$action = "Add Data";
			$keterangan = "Data yang telah di hapus adalah data dengan id_alat ".$_GET['postid'] ." dan Berikut detailnya : <br/>" ."
nama_alat : " .$nama_alat ."<br/>" ."
jumlah : " .$jumlah ."<br/>" ."
penanggungjawab : " .$penanggungjawab;
			$log->logout($action, $loginnama, $keterangan);
			session_abort(); 
		   	header("location:../gudang/data-alat-rusak.php");		
	
	}elseif($action == "hapus-bro"){ 

	// Log Hapus
		// $sql = "SELECT * FROM tbpendaftar WHERE idpendaftar='" .$_GET['postid'] ."' ";
	
		$query = mysqli_query($link, "SELECT * FROM tbalatrusak WHERE id_alat = '" .$_GET['postid'] ."' ");
		$data = mysqli_fetch_array($query);
		$keterangan = "Data yang telah di hapus adalah data dengan id_alat ".$_GET['postid'] ." dan Berikut detailnya : <br/>" ."
nama_alat : " .$nama_alat['nama_alat'] ."<br/>" ."
jumlah : " .$jumlah['jumlah'] ."<br/>" ."
penanggungjawab : " .$penanggungjawab['penanggungjawab'];

		session_start();
        $loginnama = $_SESSION['nama'];
        $action = "Delete Data"; 
        $log->logout($action, $loginnama, $keterangan);
		session_abort();
		// Hapus		
		$conn->hapus($_GET['postid']);
		header("location:../gudang/data-alat-rusak.php");

	}elseif($action == "edtalat"){
		$id = $_POST['editid'];
		$nama_alat = $_POST['editnama_alat'];
		$jumlah = $_POST['editjumlah'];
		$penanggungjawab = $_POST['editpenanggungjawab'];
		$conn->edtalat($id, $nama_alat, $jumlah, $penanggungjawab);

		// Log add data pelamar
			session_start();
			$loginnama = $_SESSION['nama'];
			$action = "Add Data";
			$keterangan = "Data yang telah di hapus adalah data dengan id_alat ".$_GET['postid'] ." dan Berikut detailnya : <br/>" ."
nama_alat : " .$nama_alat ."<br/>" ."
jumlah : " .$jumlah ."<br/>" ."
penanggungjawab : " .$penanggungjawab;
			$log->logout($action, $loginnama, $keterangan);
			session_abort();
		header("location:../gudang/data-alat-rusak.php");
	}
	elseif($action == "edtalatrusak"){
		$id = $_POST['editid'];
		$nama_alat = $_POST['editnama_alat'];
		$jumlah = $_POST['editjumlah'];
		$penanggungjawab = $_POST['editpenanggungjawab'];
		$conn->edtalat($id, $nama_alat, $jumlah, $penanggungjawab);

		// Log add data pelamar
			session_start();
			$loginnama = $_SESSION['nama'];
			$action = "Add Data";
			$keterangan = "Data yang telah di hapus adalah data dengan id_alat ".$_GET['postid'] ." dan Berikut detailnya : <br/>" ."
	nama_alat : " .$nama_alat ."<br/>" ."
	jumlah : " .$jumlah ."<br/>" ."
	penanggungjawab : " .$penanggungjawab;
			$log->logout($action, $loginnama, $keterangan);
			session_abort();
		header("location:../gudang/data-alat-rusak.php");
	}



	
?>