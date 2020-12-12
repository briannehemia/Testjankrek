<?php
	require_once('config.php');

	class mdlmasalah extends db_connect{	
 
		public function __construct(){
			$this->connect();
	
		}
 
		public function addmasalah($nama, $email, $alamat, $jenis_kelamin, $masalah, $detailmasalah, $saran){
			$stmt = $this->conn->prepare("INSERT INTO `tbmasalah` (`nama`, `email`, `alamat`, `jenis_kelamin`, 
				`masalah`, `detail_masalah`, `saran`) 
            VALUES (?, ?, ?, ?, ?, ?, ?)") or die($this->conn->error);
			$stmt->bind_param("sssssss", $nama, $email, $alamat , $jenis_kelamin, $masalah, $detailmasalah, $saran);
			if($stmt->execute()){
                $stmt->close();
				$this->conn->close();
				return true;
			}
        }
        
		public function read(){
			$stmt = $this->conn->prepare("SELECT * FROM `tbmasalah` ORDER BY `id_masalah` ASC") or die($this->conn->error);
			if($stmt->execute()){
				$result = $stmt->get_result();
				return $result;
			}
		}

		public function hapus($postid){
			$con = $this->conn;
			mysqli_query($con ,"delete from tbmasalah where id_masalah = '$postid'");
		}


		public function edtfmasal($postid){
			$con = $this->conn;
			$result = mysqli_query($con ,"select * from tbmasalah where id_masalah = '$postid'");
			return $result;
		}

		public function edtmasalah($id, $nama, $email, $alamat, $jenis_kelamin, $masalah, $detailmasalah, $saran){
			$con = $this->conn;
			$result = mysqli_query($con,"edtmasalah tbmasalah set nama='$nama', email='$email', alamat='$alamat',  jenis_kelamin='$jenis_kelamin', masalah='$masalah', detail_masalah='$detail_masalah', saran='$saran' where id_masalah='$id'");
			return $result;
		}

 	}	
?>