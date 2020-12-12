<?php
	require_once'../db/config.php';

	class mdllistalat extends db_connect{	
 
		public function __construct(){
			$this->connect();
	
		}
 
		public function addlistalat($id_listalat, $nama_alat){
			$stmt = $this->conn->prepare("INSERT INTO `tblistalat` (`id_listalat`, `nama_alat`) 
            VALUES (?, ?)") or die($this->conn->error);
			$stmt->bind_param("ss", $id_listalat, $nama_alat);
			if($stmt->execute()){
                $stmt->close();
				$this->conn->close();
				return true;
			}
        }
        
		public function read(){
			$stmt = $this->conn->prepare("SELECT * FROM `tblistalat` ORDER BY `id_listalat` ASC") or die($this->conn->error);
			if($stmt->execute()){
				$result = $stmt->get_result();
				return $result;
			}
		}

		public function hapus($postid){
			$con = $this->conn;
			mysqli_query($con ,"delete from tblistalat where id_listalat = '$postid'");
		}


		public function edtflistalat($postid){
			$con = $this->conn;
			$result = mysqli_query($con ,"select * from tblistalat where id_listalat = '$postid'");
			return $result;
		}

		public function edtlistalat($id, $id_listalat, $nama_alat){
			$con = $this->conn;
			$result = mysqli_query($con,"edtlistalat tblistalat set id_listalat='$id_listalat', nama_alat='$nama_alat' where id_listalat='$id'");
			return $result;
		}

 	}	
?>