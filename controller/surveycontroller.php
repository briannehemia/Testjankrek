<?php
	require_once '../db/mdl_masalah.php';
	$conn = new mdlmasalah();

	$action = $_GET['action'];
	if($action == "tambah"){	
			$nama = $_POST['nama'];
			$email  = $_POST['email'];
			$notelp = $_POST['phone'];
			$password = $_POST['password'];
			$conn->create($nama, $email,  $password, $notelp);
			header('location: register.php');

	}elseif($action == "addmasal"){ 	
			$nama = $_POST['postnama'];
			$email  = $_POST['postemail'];
			$alamat = $_POST['postalamat'];
			$jenis_kelamin = $_POST['postjekel'];
			$masalah = $_POST['postmasalah'];
			$detailmasalah = $_POST['postdetailmasalah'];
			$saran = $_POST['postsaran'];
			$conn->addmasalah($nama, $email, $alamat, $jenis_kelamin, $masalah, $detailmasalah, $saran);
		   	header("location:../admin/data-masalah.php");		
	
	}elseif($action == "hapus-bro"){ 	
		$conn->hapus($_GET['postid']);
		header("location:../admin/data-masalah.php");

	}elseif($action == "edtmasal"){
		$id = $_POST['editid'];
		$nama = $_POST['editnama'];
		$email = $_POST['editemail'];
		$alamat = $_POST['editalamat'];
		$jenis_kelamin = $_POST['editjekel'];
		$masalah  = $_POST['editmasalah'];
		$detailmasalah  = $_POST['editdetailmasalah'];
		$saran  = $_POST['editsaran'];
		$conn->edtmasalah($id, $nama, $email, $alamat, $jenis_kelamin, $masalah, $detailmasalah, $saran);
		header("location:../admin/data-masalah.php");
	}


	
?>