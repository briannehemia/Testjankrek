<?php
	require_once '../db/mdl_log.php';
    $conn = new mdllog();

    $aksi = $_GET['action']; 
	if($aksi == "logout"){
        session_start();
        $loginnama = $_SESSION['nama'];	
		$action = "Logout";
		$keterangan = "";
        $conn->Logout($action, $loginnama, $keterangan);
        session_destroy();
        header('location: ../login.php');
    
    }elseif($aksi == "logaddpelamar") {
        session_start();
        $loginnama = $_SESSION['nama'];
        $action = "Add Data";
        $keterangan = "Penambahan Data ke tabe pelamar ";
        $conn->logaddpelamar($action, $loginnama, $keterangan);
        session_abort();
    
    }elseif($aksi == ""){
        

    }
      
?>