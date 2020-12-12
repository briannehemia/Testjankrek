<?php
	require_once '../db/mdl_regis.php';
	$conn = new mdlregis();

	$action = $_GET['action'];
	if($action == "tambah"){	
			$nama_pemilik = $_POST['nama_pemilik'];
			$nama_toko = $_POST['nama_toko'];
			$email  = $_POST['email'];
			$phone = $_POST['phone'];
			$password = $_POST['password'];
			$foto = $_POST['foto'];
			$level = $_POST['level'];
			$conn->addregistrasi($nama_pemilik, $nama_toko, $email, $phone, $password, $foto, $level);
			header('location:../login.php');

	// $action = $_GET['action'];
	// if($action == "tambah"){	
	// 		$nama = $_POST['nama'];
	// 		$email  = $_POST['email'];
	// 		$notelp = $_POST['phone'];
	// 		$password = $_POST['password'];
	// 		$conn->create($nama, $email,  $password, $notelp);
	// 		header('location: register.php');

	}elseif($action == "addregis"){ 	
			$nama_pemilik = $_POST['postnama_pemilik'];
			$nama_toko = $_POST['postnama_toko'];
			$email  = $_POST['postemail'];
			$phone = $_POST['postphone'];
			$password = $_POST['postpassword'];
			$foto = $_POST['postfoto'];
			$level = $_POST['postlevel'];
			$conn->addregistrasi($nama_pemilik, $nama_toko, $email, $phone, $password, $foto, $level);
		   	header("location:../admin/data-masalah.php");		
	
	}elseif($action == "hapusregis"){ 	
		$conn->hapus($_GET['postid']);
		header("location:../admin/data-masalah.php");

	}elseif($action == "edtregis"){
		$id = $_POST['editid'];
		$nama_pemilik = $_POST['editnama_pemilik'];
		$nama_toko = $_POST['editnama_toko'];
		$email  = $_POST['editemail'];
		$phone = $_POST['editphone'];
		$password = $_POST['editpassword'];
		$foto = $_POST['editfoto'];
		$level = $_POST['editlevel'];
		$conn->edtregistrasi($id, $nama_pemilik, $nama_toko, $email, $phone, $password, $foto, $level);
		header("location:../admin/data-masalah.php");
	}


	
?>