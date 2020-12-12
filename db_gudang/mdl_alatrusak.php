<?php
	require_once'../db/config.php';

	class mdlalatrusak extends db_connect{	
 
		public function __construct(){
			$this->connect();
	
		}
 
		public function addalat($id, $penguranganbrgudang, $nama_alat, $jumlahbrrusak, $penanggungjawab){
			$stmt1 = $this->conn->prepare("INSERT INTO `tbalatrusak` (`id_alat`, `nama_alat`, `jumlah`, `penanggungjawab`) 
            VALUES (?, ?, ?, ?)") or die($this->conn->error);
			$stmt1->bind_param("isss", $id, $nama_alat, $jumlahbrrusak, $penanggungjawab);
			$stmt1->execute();
            //     $stmt1->close();
			// 	$this->conn->close();
			// 	return true;
			// }

			$con = $this->conn;
			$result = mysqli_query($con,"update tbalatgudang set jumlah='$penguranganbrgudang' where id_alat='$id'");
			return $result;
        }
        
		public function read(){
			$stmt = $this->conn->prepare("SELECT * FROM `tbalatrusak` ORDER BY `id_alat` ASC") or die($this->conn->error);
			if($stmt->execute()){
				$result = $stmt->get_result();
				return $result;
			}
		}

		public function hapus($postid){
			$con = $this->conn;
			mysqli_query($con ,"delete from tbalatrusak where id_alat = '$postid'");
		}


		public function editalat($postid){
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