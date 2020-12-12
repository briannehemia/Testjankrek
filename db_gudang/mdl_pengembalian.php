<?php
	require_once'../db/config.php';

	class mdlalatrusak extends db_connect{	
 
		public function __construct(){
			$this->connect();
		}

		public function read(){
			$stmt = $this->conn->prepare("SELECT * FROM `tbalatrusak` ORDER BY `id_alat` ASC") or die($this->conn->error);
			if($stmt->execute()){
				$result = $stmt->get_result();
				return $result;
			}
		}

		public function getDataPengambalian($postid){
			$con = $this->conn;
			$result = mysqli_query($con ,"select * from tbalatrusak where id_alat_rusak = '$postid'");
			return $result;
		}

		
		public function getDataAlat($postid){
			$con = $this->conn;
			$result = mysqli_query($con ,"select * from tbalatgudang where id_alat = '$postid'");
			return $result;
		}

		public function editalatrusak($postid){
			$con = $this->conn;
			$result = mysqli_query($con ,"select * from tbalatrusak where id_alat_rusak = '$postid'");
			return $result;
		}

		public function editalatrusakpost($id, $nama_alat, $jumlah, $penanggungjawab){
			$con = $this->conn;
			$result = mysqli_query($con,"update tbalatrusak set nama_alat='$nama_alat', jumlah='$jumlah', penanggungjawab='$penanggungjawab' where id_alat_rusak='$id'");
			return $result;
		}

 	}	
?>