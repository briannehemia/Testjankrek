<?php
require_once('../db/config.php');

class mdllaporan extends db_connect{	

    public function __construct(){
        $this->connect();

    }
            public function viewlaporan(){
                        $con = $this->conn;
                        $result = mysqli_query($con ,"select * from tbmasalah");
                        return $result;
                    }
    }
        
?>