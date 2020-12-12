<?php
	require_once'../db/config.php';

	class mdlrequestbarang extends db_connect{	
 
		public function __construct(){
			$this->connect();
	
		}
 
		public function addrequestbarang($id_listbarang, $nama_barang, $jumlah, $tgl_max, $jam_max){

			// $sql = mysql_query('SELECT * FROM tblistbarang ORDER BY nama_bahan ASC;'); 
			$stmt = $this->conn->prepare("INSERT INTO `tbrequestbarang` (`id_listbarang`, `nama_barang`, `jumlah`, `tgl_max`, `jam_max`) 
            VALUES (?, ?, ?, ?, ?)") or die($this->conn->error);
			$stmt->bind_param("sssss", $id_listbarang, $nama_barang, $jumlah, $tgl_max, $jam_max);
			if($stmt->execute()){
                $stmt->close();
				$this->conn->close();
				return true;
			}
        }
        
		public function read(){
			$stmt = $this->conn->prepare("SELECT * FROM `tbrequestbarang` ORDER BY `id_requestbarang` ASC") or die($this->conn->error);
			if($stmt->execute()){
				$result = $stmt->get_result();
				return $result;
			}
		}

		public function hapus($postid){
			$con = $this->conn;
			mysqli_query($con ,"delete from tbrequestbarang where id_requestbarang = '$postid'");
		}


		public function edtfrequestbarang($postid){
			$con = $this->conn;
			$result = mysqli_query($con ,"select * from tbrequestbarang where id_requestbarang = '$postid'");
			return $result;
		}

		public function edtrequestbarang($id, $nama_barang, $jumlah, $tgl_max, $jam_max){
			$con = $this->conn;
			$result = mysqli_query($con,"edtrequestbarang tbrequestbarang set nama_barang='$nama_barang', jumlah='$jumlah', tgl_max='$tgl_max', jam_max='$jam_max' where id_requestbarang='$id'");
			return $result;
		}

		public function drolistbarang(){
			$stmt = $this->conn->prepare("SELECT * FROM `tblistbarang` ") or die ($this->conn->error);
			if ($stmt->execute()) {
				$result = $stmt->get_result();
				return $result;
			}
		}

 	}	
?>