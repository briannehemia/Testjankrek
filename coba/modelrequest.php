<?php
	require_once('../db/config.php');

	class modelrequest extends db_connect{	
 
		public function __construct(){
			$this->connect();
	
        }
        
        public function readrequest(){
			$con = $this->conn;
			$result = mysqli_query($con ,"select * from requestpegawai");
			return $result;

		}
		
        
	public function tampildana(){
		$con = $this->conn;
		$result = mysqli_query($con ,"select * from requestdana");
		return $result;

	}
		public function addreqpegawai($divisi, $jumlah,  $alasan, $syarat){
			$stmt = $this->conn->prepare("INSERT INTO `requestpegawai` (`divisiterkait`, `jumlahdibutuhkan`, `alasan`, `syarat` ) 
            VALUES (?, ?, ?, ?)") or die($this->conn->error);
			$stmt->bind_param("ssss", $divisi, $jumlah,  $alasan, $syarat);
			if($stmt->execute()){
                $stmt->close();
				$this->conn->close();
				return true;
			}
        }

		public function readreq($postid){
			$con = $this->conn;
			$result = mysqli_query($con ,"select * from requestpegawai where idrequestpegawai = '$postid'");
			return $result;
		}

		public function readreqdana($postid){
			$con = $this->conn;
			$result = mysqli_query($con ,"select * from requestdana where idrequestdana= '$postid'");
			return $result;
		}


		
		public function addreqdana($divisi, $jumlah,  $keperluan){
			$stmt = $this->conn->prepare("INSERT INTO `requestdana` (`divisiterkait`, `jumlahdana`, `keperluan` ) 
            VALUES (?, ?, ?)") or die($this->conn->error);
			$stmt->bind_param("sss", $divisi, $jumlah,  $keperluan);
			if($stmt->execute()){
                $stmt->close();
				$this->conn->close();
				return true;
			}
        }

	}	

?>