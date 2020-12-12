<?php
	require_once'../db/config.php';

	class mdlbarang extends db_connect{	
 
		public function __construct(){
			$this->connect();
	
		}
 
		public function addbarang($nama_barang, $jumlah, $harga){
			$stmt = $this->conn->prepare("INSERT INTO `tbbarangsuplayer` (`nama_barang`, `jumlah`, `harga`) 
            VALUES (?, ?, ?)") or die($this->conn->error);
			$stmt->bind_param("sss", $nama_barang, $jumlah, $harga);
			if($stmt->execute()){
                $stmt->close(); 
				$this->conn->close();
				return true;
			}
        }
        
		public function read(){
			$stmt = $this->conn->prepare("SELECT * FROM `tbbarangsuplayer` ORDER BY `id_barangsup` ASC") or die($this->conn->error);
			if($stmt->execute()){
				$result = $stmt->get_result();
				return $result;
			}
		}

		public function hapus($postid){
			$con = $this->conn;
			mysqli_query($con ,"delete from tbbarangsuplayer where id_barangsup = '$postid'");
		}


		public function edtfbarang($postid){
			$con = $this->conn;
			$result = mysqli_query($con ,"select * from tbbarangsuplayer where id_barangsup = '$postid'");
			return $result;
		}

		public function edtbarang($id, $nama_barang, $jumlah, $harga){
			$con = $this->conn;
			$result = mysqli_query($con,"edtbarang tbbarangsuplayer set nama_barang='$nama_barang', jumlah='$jumlah', harga='$harga' where id_barangsup='$id'");
			return $result;
		}

 	}	
?>