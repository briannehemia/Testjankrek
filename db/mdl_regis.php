<?php
	require_once('../db/config.php');

	class mdlregis extends db_connect{	
 
		public function __construct(){
			$this->connect();
	
		}
 
		public function addregistrasi($nama_pemilik, $nama_toko, $email, $phone, $password, $foto, $level){
			$encodepassword = base64_encode($password);
			$stmt = $this->conn->prepare("INSERT INTO `tbdatasuplayer` (`nama_pemilik`, `nama_toko`, `email`, `phone`,`password`, `foto`, `level`) 
            VALUES (?, ?, ?, ?, ?, ?, ?)") or die($this->conn->error);
			$stmt->bind_param("sssssss", $nama_pemilik, $nama_toko, $email, $phone, $encodepassword, $foto, $level);
			if($stmt->execute()){
                $stmt->close();
				$this->conn->close();
				return true;
			}
        }
        
		public function read(){
			$stmt = $this->conn->prepare("SELECT * FROM `tbdatasuplayer` ORDER BY `id_suplayer` ASC") or die($this->conn->error);
			if($stmt->execute()){
				$result = $stmt->get_result();
				return $result;
			}
		}

		public function hapus($postid){
			$con = $this->conn;
			mysqli_query($con ,"delete from tbdatasuplayer where id_suplayer = '$postid'");
		}


		public function edtfregistrasi($postid){
			$con = $this->conn;
			$result = mysqli_query($con ,"select * from tbdatasuplayer where id_suplayer = '$postid'");
			return $result;
		}

		public function edtregistrasi($id_suplayer, $nama_pemilik, $nama_toko, $email, $phone, $password, $foto, $level){
			$con = $this->conn;
			$result = mysqli_query($con,"edtregistrasi tbdatasuplayer set nama_pemilik='$nama_pemilik', nama_toko='$nama_toko', email='$email', phone='$phone', password='$password', foto='$foto', level='$level' where id_suplayer='$id_suplayer'");
			return $result;
		}

 	}	
?>