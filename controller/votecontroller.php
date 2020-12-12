<?php
	require_once '../db/mdl_vote.php';
	$conn = new mdlvote();

	$action = $_GET['action'];
	if($action == "tambah"){	
			$nama = $_POST['nama'];
			$email  = $_POST['email'];
			$notelp = $_POST['phone'];
			$password = $_POST['password'];
			$conn->create($nama, $email,  $password, $notelp);
			header('location: register.php');

	}elseif($action == "addvote"){ 	
			$masalah = $_POST['postmasalah'];
			$detailmasalah = $_POST['postdetailmasalah'];
			$saran = $_POST['postsaran'];
			$vote = $_POST['postvote'];
			$conn->addvote($masalah, $detailmasalah, $saran, $vote);
		   	header("location:../admin/data-vote.php");		
	
	}elseif($action == "hapus-bro"){ 	
		$conn->hapus($_GET['postid']);
		header("location:../admin/data-vote.php");

	}elseif($action == "edtvote"){
		$masalah  = $_POST['editmasalah'];
		$detailmasalah  = $_POST['editdetailmasalah'];
		$saran  = $_POST['editsaran'];
		$vote  = $_POST['editvote'];
		$conn->edtvote($masalah, $detailmasalah, $saran, $vote);
		header("location:../admin/data-vote.php");
	}


	
?>