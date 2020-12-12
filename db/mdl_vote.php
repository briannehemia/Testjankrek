<?php
	require_once('../db/config.php');

	class mdlvote extends db_connect{	
 
		public function __construct(){
			$this->connect();
	
		}
 
		public function addvote($masalah, $detailmasalah, $saran, $vote){
			$stmt = $this->conn->prepare("INSERT INTO `tbvote` (`masalah`, `detail_masalah`, `saran`,`vote`) 
            VALUES (?, ?, ?, ?)") or die($this->conn->error);
			$stmt->bind_param("ssss", $masalah, $detailmasalah, $saran, $vote);
			if($stmt->execute()){
                $stmt->close();
				$this->conn->close();
				return true;
			}
        }
        
		public function read(){
			$stmt = $this->conn->prepare("SELECT * FROM `tbvote` ORDER BY `id_vote` ASC") or die($this->conn->error);
			if($stmt->execute()){
				$result = $stmt->get_result();
				return $result;
			}
		}

		public function hapus($postid){
			$con = $this->conn;
			mysqli_query($con ,"delete from tbvote where id_vote = '$postid'");
		}


		public function edtfmasal($postid){
			$con = $this->conn;
			$result = mysqli_query($con ,"select * from tbvote where id_vote = '$postid'");
			return $result;
		}

		public function edtvote($masalah, $detailmasalah, $saran, $vote){
			$con = $this->conn;
			$result = mysqli_query($con,"edtvote tbvote set masalah='$masalah', detail_masalah='$detail_masalah', saran='$saran' vote='$vote' where id_vote='$id'");
			return $result;
		}

 	}	
?>