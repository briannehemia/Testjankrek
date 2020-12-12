<?php
	require_once'../db/config.php';

	class mdlalatrusak extends db_connect{	
 
		public function __construct(){
			$this->connect();
	
		}
 
		public function addalat($nama_alat, $jumlah, $penanggungjawab){
			$stmt = $this->conn->prepare("INSERT INTO `tbalatrusak` (`nama_alat`, `jumlah`, `penanggungjawab`) 
            VALUES (?, ?, ?)") or die($this->conn->error);
			$stmt->bind_param("sss", $nama_alat, $jumlah, $penanggungjawab);
			if($stmt->execute()){
                $stmt->close();
				$this->conn->close();
				return true;
			}
        }
        
		public function read(){
			$stmt = $this->conn->prepare("SELECT * FROM `tbalatrusak` ORDER BY `id_alat_rusak` ASC") or die($this->conn->error);
			if($stmt->execute()){
				$result = $stmt->get_result();
				return $result;
			}
		}

		public function hapus($postid){
			$con = $this->conn;
			mysqli_query($con ,"delete from tbalatrusak where id_alat_rusak = '$postid'");
		}


		public function edtfalat($postid){
			$con = $this->conn;
			$result = mysqli_query($con ,"select * from tbalatrusak where id_alat_rusak = '$postid'");
			return $result;
		}

		public function edtalat($id, $nama_alat, $jumlah, $penanggungjawab){
			$con = $this->conn;
			$result = mysqli_query($con,"edtalat tbalatrusak set nama_alat='$nama_alat', jumlah='$jumlah', penanggungjawab='$penanggungjawab' where id_alat_rusak='$id'");
			return $result;
		}

 	}	
?>