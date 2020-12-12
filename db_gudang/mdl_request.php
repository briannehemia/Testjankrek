<?php
	require_once('../db/config.php');

	class mdlrequest extends db_connect{	
 
		public function __construct(){
			$this->connect();
	
        }
        
        public function readrequest(){
			$con = $this->conn;
			$result = mysqli_query($con ,"select * from requestpegawai");
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


	}	
?>