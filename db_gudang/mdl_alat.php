<?php
	require_once'../db/config.php';

	class mdlalat extends db_connect{	
 
		public function __construct(){
			$this->connect();
	
		}
 
		public function addalat($nama_alat, $jumlah){
			$stmt = $this->conn->prepare("INSERT INTO `tbalatgudang` (`nama_alat`, `jumlah`) 
            VALUES (?, ?)") or die($this->conn->error);
			$stmt->bind_param("ss", $nama_alat, $jumlah);
			if($stmt->execute()){
                $stmt->close();
				$this->conn->close();
				return true;
			}
			
		}
		
		public function postpengembalian($idalat, $idalatrusak, $tangganglperbaikikan, $nama_alat, $penanggungjawab, $jumlahpengembalian, $jumlahAlat, $updatejumlahbarang, $updatejumlahbarangrusak) {
			$stmt1 = $this->conn->prepare("INSERT INTO `tbriwayatpinjaman` (`id_alat`, `penanggung_jawab`, `nama_alat`, `tanggal_perbaikan`, `jumlah`) 
            VALUES (?, ?, ?, ?, ?)") or die($this->conn->error);
			$stmt1->bind_param("isssi", $idalat, $penanggungjawab, $nama_alat, $tangganglperbaikikan, $jumlahpengembalian);
			$stmt1->execute();
        
			$con = $this->conn;
			$resultUpdateAlat = mysqli_query($con,"update tbalatgudang set jumlah='$updatejumlahbarang' where id_alat='$idalat'");

			if ($updatejumlahbarangrusak == 0) {
				$resultUpdateAlatRusak = mysqli_query($con, "delete from tbalatrusak where id_alat_rusak = '$idalatrusak'");
			} else {
				$resultUpdateAlatRusak = mysqli_query($con,"update tbalatrusak set jumlah='$updatejumlahbarangrusak' where id_alat_rusak ='$idalatrusak'");
			}
			
			return $resultUpdateAlatRusak;
		}
        
		public function read(){
			$stmt = $this->conn->prepare("SELECT * FROM `tbalatgudang` ORDER BY `id_alat` ASC") or die($this->conn->error);
			if($stmt->execute()){
				$result = $stmt->get_result();
				return $result;
			}
		}

		public function hapus($postid){
			$con = $this->conn;
			mysqli_query($con ,"delete from tbalatgudang where id_alat = '$postid'");
		}


		public function edtfalat($postid){
			$con = $this->conn;
			$result = mysqli_query($con ,"select * from tbalatgudang where id_alat = '$postid'");
			return $result;
		}

		public function edtalat($id, $nama_alat, $jumlah){
			$con = $this->conn;
			$result = mysqli_query($con,"update tbalatgudang set nama_alat='$nama_alat', jumlah='$jumlah' where id_alat='$id'");
			return $result;
		}

 	}	
?>