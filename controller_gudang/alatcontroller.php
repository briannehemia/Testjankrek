<?php
	require_once '../db_gudang/mdl_alat.php';
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
			$conn->create($nama_alat, $jumlah);
			header('location:../gudang/data-alat.php');

	}elseif($action == "addalat"){
			
			$nama_alat = $_POST['postnama_alat'];
			$jumlah = $_POST['postjumlah'];
			$conn->addalat($nama_alat, $jumlah);

			// Log add data pelamar
			session_start();
			$loginnama = $_SESSION['nama'];
			$action = "Add Data";
			$keterangan = "Data yang telah di hapus adalah data dengan nama_alat ".$_POST['postnama_alat'] ." dan Berikut detailnya : <br/>" ."
nama_alat : " .$nama_alat ."<br/>" ."
jumlah : " .$jumlah;
			$log->logout($action, $loginnama, $keterangan);
			session_abort(); 
		   	header("location:../gudang/data-alat.php");		
	
	}elseif($action == "hapus-bro"){ 

	// Log Hapus
		// $sql = "SELECT * FROM tbpendaftar WHERE idpendaftar='" .$_GET['postid'] ."' ";
	
		$query = mysqli_query($link, "SELECT * FROM tbalatgudang WHERE id_alat = '" .$_GET['postid'] ."' ");
		$data = mysqli_fetch_array($query);
		$keterangan = "Data yang telah di hapus adalah data dengan id_alat ".$_GET['postid'] ." dan Berikut detailnya : <br/>" ."
nama_alat : " .$nama_alat['nama_alat'] ."<br/>" ."
jumlah : " .$jumlah['jumlah'];

		session_start();
        $loginnama = $_SESSION['nama'];
        $action = "Delete Data"; 
        $log->logout($action, $loginnama, $keterangan);
		session_abort();
		// Hapus		
		$conn->hapus($_GET['postid']);
		header("location:../gudang/data-alat.php");

	}elseif($action == "edtalat"){
		$id = $_POST['editid'];
		$nama_alat = $_POST['editnama_alat'];
		$jumlah = $_POST['editjumlah'];
		$conn->edtalat($id, $nama_alat, $jumlah);

		// Log add data pelamar
			session_start();
			$loginnama = $_SESSION['nama'];
			$action = "Add Data";
			$keterangan = "Data yang telah di hapus adalah data dengan id_alat ".$_GET['postid'] ." dan Berikut detailnya : <br/>" ."
nama_alat : " .$nama_alat ."<br/>" ."
jumlah : " .$jumlah;
			$log->logout($action, $loginnama, $keterangan);
			session_abort();
		header("location:../gudang/data-alat.php");
	}
	elseif($action == "pengembalian"){
		$idalat = $_POST['postidalat'];
		$idalatrusak = $_POST['postidalatrusak'];
		$tangganglperbaikikan = $_POST['posttanggalperbaikan'];
		$nama_alat = $_POST['postnama_alat'];
		$penanggungjawab = $_POST['postpenanggungjawab'];
		$jumlahpengembalian = $_POST['postjumlah'];
		$jumlahAlat = $_POST['postjumlahalat'];
		$jumlahAlatRusak = $_POST['postjumlahalatrusak'];

		$updatejumlahbarang = $jumlahAlat + $jumlahpengembalian;
		$updatejumlahbarangrusak = $jumlahAlatRusak - $jumlahpengembalian; 

		$conn->postpengembalian($idalat, $idalatrusak, $tangganglperbaikikan, $nama_alat, $penanggungjawab, $jumlahpengembalian, $jumlahAlat, $updatejumlahbarang, $updatejumlahbarangrusak);

		// // Log add data pelamar
		// 	session_start();
		// 	$loginnama = $_SESSION['nama'];
		// 	$action = "Add Data";
		// 	$keterangan = "Data yang telah di hapus adalah data dengan id_alat ".$_GET['postid'] ." dan Berikut detailnya : <br/>" ."
		// 	nama_alat : " .$nama_alat ."<br/>" ."
		// 	jumlah : " .$jumlah;
		// 	$log->logout($action, $loginnama, $keterangan);
		// 	session_abort();
		header("location:../gudang/data-alat.php");
	}

	
?>