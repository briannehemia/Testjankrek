<?php
	require_once('../db/config.php');

	class mdlchatpegawai extends db_connect{	
 
		public function __construct(){
			$this->connect();
	
        }
        
        public function readchatpegawai(){
			$con = $this->conn;
			$result = mysqli_query($con ,"select * from tbchatpegawai");
			return $result;
		}
		
		public function addchatpegawai($divisi, $subjek, $pesan){
			$stmt = $this->conn->prepare("INSERT INTO `tbchatpegawai` (`divisi_terkait`, `subjek`, `pesan` ) 
            VALUES (?, ?, ?)") or die($this->conn->error);
			$stmt->bind_param("sss", $divisi, $subjek, $pesan);
			if($stmt->execute()){
                $stmt->close();
				$this->conn->close();
				return true;
			}
        }


	}	
?>