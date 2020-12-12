<?php
	require_once'../db/config.php';

	class mdllistbarang extends db_connect{	
 
		public function __construct(){
			$this->connect();
	
		}
 
		public function addlistbarang($id_listbarang, $nama_barang){
			$stmt = $this->conn->prepare("INSERT INTO `tblistbarang` (`id_listbarang`, `nama_barang`) 
            VALUES (?, ?)") or die($this->conn->error);
			$stmt->bind_param("ss", $id_listbarang, $nama_barang);
			if($stmt->execute()){
                $stmt->close();
				$this->conn->close();
				return true;
			}
        }
        
		public function read(){
			$stmt = $this->conn->prepare("SELECT * FROM `tblistbarang` ORDER BY `id_listbarang` ASC") or die($this->conn->error);
			if($stmt->execute()){
				$result = $stmt->get_result();
				return $result;
			}
		}

		public function hapus($postid){
			$con = $this->conn;
			mysqli_query($con ,"delete from tblistbarang where id_listbarang = '$postid'");
		}


		public function edtflistbarang($postid){
			$con = $this->conn;
			$result = mysqli_query($con ,"select * from tblistbarang where id_listbarang = '$postid'");
			return $result;
		}

		public function edtlistbarang($id, $id_listbarang, $nama_barang){
			$con = $this->conn;
			$result = mysqli_query($con,"edtlistbarang tblistbarang set id_listbarang='$id_listbarang', nama_barang='$nama_barang' where id_listbarang='$id'");
			return $result;
		}

 	}	
?>