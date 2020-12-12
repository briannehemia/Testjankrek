<?php

$filepath = realpath (dirname(__FILE__));
require_once($filepath."/config.php");
 
	class modellaporan extends db_connect{	
 
		public function __construct(){
			$this->connect();
	
		}
 

    public function viewpemasukan($postid){
        $con = $this->conn;
        $formatdate = date('m', strtotime($postid));
        $result = mysqli_query($con ,"SELECT * FROM pengeluaran WHERE MONTH(tanggal) = '$formatdate'");
        return $result;
    }


    public function sumpengeluaran($postid){
        $con = $this->conn;
        $formatdate = date('m', strtotime($postid));
        $coba = mysqli_query($con ,"SELECT SUM(jumlahpengeluaran) AS 'total' FROM pengeluaran WHERE MONTH(tanggal) = '$formatdate'");
        $data=mysqli_fetch_assoc($coba);
        echo 'Rp ' .number_format($data['total'], '2', ',', '.');
        }

       
    }
?>