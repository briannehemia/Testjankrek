<?php
	require_once'../db/config.php';

	class mdldatasuplayer extends db_connect{	
 
		public function __construct(){
			$this->connect();
	
		}
 
		public function adddatasuplayer($id_suplayer, $nama_pemilik, $nama_toko, $email, $no_rekening, $alamat, $phone, $password, $foto, $level){
			$encodepassword = base64_encode($password);
			$stmt = $this->conn->prepare("INSERT INTO `tbdatasuplayer` (`id_suplayer`, `nama_pemilik`, `nama_toko`, `no_rekening`, `alamat`, `email`, `phone`, `password`, `foto`, `level`) 
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)") or die($this->conn->error);
			$stmt->bind_param("ssssssssss", $id_suplayer, $nama_pemilik, $nama_toko, $email, $no_rekening, $alamat, $phone, $encodepassword, $foto, $level);
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


		public function edtfdatasuplayer($postid){
			$con = $this->conn;
			$result = mysqli_query($con ,"select * from tbdatasuplayer where id_suplayer = '$postid'");
			return $result;
		}

		public function edtdatasuplayer($id_suplayer, $nama_pemilik, $nama_toko, $no_rekening, $alamat, $email, $phone){
			$con = $this->conn;
			$result = mysqli_query($con,"edtdatasuplayer tbdatasuplayer set id_suplayer='$id_suplayer', nama_pemilik='$nama_pemilik', nama_toko='$nama_toko', no_rekening='$no_rekening', alamat='$alamat', email='$email', ='$phone' where id_suplayer='$id'");
			return $result;
		}

 	}	
?>