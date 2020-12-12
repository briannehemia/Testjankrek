<?php
	require_once'../db/config.php';

	class mdlrequestalat extends db_connect{	
 
		public function __construct(){
			$this->connect();
	
		}
 
		public function addrequestalat($id_listalat, $nama_alat, $jumlah, $tgl_max, $jam_max){
			$stmt = $this->conn->prepare("INSERT INTO `tbrequestalat` (`nama_alat`, `jumlah`, `tgl_max`, `jam_max`) 
            VALUES (?, ?, ?, ?, ?)") or die($this->conn->error);
			$stmt->bind_param("sssss", $id_listalat, $nama_alat, $jumlah, $tgl_max, $jam_max);
			if($stmt->execute()){
                $stmt->close();
				$this->conn->close();
				return true;
			}
        }
        
		public function read(){
			$stmt = $this->conn->prepare("SELECT * FROM `tbrequestalat` ORDER BY `id_requestalat` ASC") or die($this->conn->error);
			if($stmt->execute()){
				$result = $stmt->get_result();
				return $result;
			}
		}

		public function hapus($postid){
			$con = $this->conn;
			mysqli_query($con ,"delete from tbrequestalat where id_requestalat = '$postid'");
		}


		public function edtfrequestalat($postid){
			$con = $this->conn;
			$result = mysqli_query($con ,"select * from tbrequestalat where id_requestalat = '$postid'");
			return $result;
		}

		public function edtrequestalat($id, $id_requestalat, $nama_alat, $jumlah, $tgl_max, $jam_max){
			$con = $this->conn;
			$result = mysqli_query($con,"edtrequestalat tbrequestalat set id_requestalat='$id_requestalat', nama_alat='$nama_alat', jumlah='$jumlah', tgl_max='$tgl_max', jam_max='$jam_max' where id_requestalat='$id'");
			return $result;
		}

		public function drolistalat(){
			$stmt = $this->conn->prepare("SELECT * FROM `tblistalat` ") or die ($this->conn->error);
			if ($stmt->execute()) {
				$result = $stmt->get_result();
				return $result;
			}
		}

 	}	
?>