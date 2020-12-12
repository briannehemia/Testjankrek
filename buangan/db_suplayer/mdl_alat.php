<?php
	require_once'../db/config.php';

	class mdlalat extends db_connect{	
 
		public function __construct(){
			$this->connect();
	
		}
		
		public function auto_id_alatsup(){
			$con = $this->conn;
			$query = mysqli_query($con ,"SELECT SUBSTRING(max(id_alatsup),4) as kodeawal From tbalatsuplayer");
			$kode = mysqli_fetch_array($query);
			$kodeawal = substr($kode['kodeawal'], 1);
			$final = (int) $kodeawal;
			$kodetambah = $final + 1;
			if($kodetambah < 10){
				$sub = "ALS00";
			}elseif ($kodetambah < 100) {
				$sub = "ALS0";
			}elseif ($kodetambah < 1000) {
				$sub = "ALS";
			}
			echo $sub.$kodetambah;
		} 
 
		public function addalat($id_alatsup, $id_listalat, $nama_alat, $jumlah, $harga){
			$stmt = $this->conn->prepare("INSERT INTO `tbalatsuplayer` (`id_alatsup`, `id_listalat`, `nama_alat`, `jumlah`, `harga`) 
            VALUES (?, ?, ?, ?, ?)") or die($this->conn->error);
			$stmt->bind_param("sssss", $id_alatsup, $id_listalat, $nama_alat, $jumlah, $harga);
			if($stmt->execute()){
                $stmt->close(); 
				$this->conn->close();
				return true;
			}
        }
        
		public function read(){
			$stmt = $this->conn->prepare("SELECT * FROM `tbalatsuplayer` ORDER BY `id_alatsup` ASC") or die($this->conn->error);
			if($stmt->execute()){
				$result = $stmt->get_result();
				return $result;
			}
		}

		public function hapus($postid){
			$con = $this->conn;
			mysqli_query($con ,"delete from tbalatsuplayer where id_alatsup = '$postid'");
		}


		public function edtfalat($postid){
			$con = $this->conn;
			$result = mysqli_query($con ,"select * from tbalatsuplayer where id_alatsup = '$postid'");
			return $result;
		}

		public function edtalat($id, $id_listalat, $nama_alat, $jumlah, $harga){
			$con = $this->conn;
			$result = mysqli_query($con,"edtalat tbalatsuplayer set id_listalat='$id_listalat', nama_alat='$nama_alat', jumlah='$jumlah', harga='$harga' where id_alatsup='$id'");
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