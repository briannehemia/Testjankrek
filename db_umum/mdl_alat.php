<?php
	require_once'../db/config.php';

	class mdlalat extends db_connect{	
 
		public function __construct(){
			$this->connect();
	
		}
 
		public function addalat($nama_alat, $jumlah, $harga){
			$stmt = $this->conn->prepare("INSERT INTO `tbalatgudang` (`nama_alat`, `jumlah`, `harga`) 
            VALUES (?, ?, ?)") or die($this->conn->error);
			$stmt->bind_param("sss", $nama_alat, $jumlah, $harga);
			if($stmt->execute()){
                $stmt->close();
				$this->conn->close();
				return true;
			}
        }
        
		public function read(){
			$stmt = $this->conn->prepare("SELECT * FROM `tbalatgudang` ORDER BY `id_alat` ASC") or die($this->conn->error);
			if($stmt->execute()){
				$result = $stmt->get_result();
				return $result;
			}
		}

		public function hapus($postid){
			$con = $this->conn;
			mysqli_query($con ,"delete from tbalatgudang where id_alat = '$postid'");
		}


		public function edtfalat($postid){
			$con = $this->conn;
			$result = mysqli_query($con ,"select * from tbalatgudang where id_alat = '$postid'");
			return $result;
		}

		public function edtalat($id, $nama_alat, $jumlah, $harga){
			$con = $this->conn;
			$result = mysqli_query($con,"edtalat tbalatgudang set nama_alat='$nama_alat', jumlah='$jumlah', harga='$harga' where id_alat='$id'");
			return $result;
		}

 	}	
?>