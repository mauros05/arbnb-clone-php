<?php 
    class BookingsModel {
        public function __construct(){
            require_once "connect/Connect.php";
            $dbConnect = new Connect();
            $this->db  = $dbConnect->connect();
        }

        public function new(){

        }

        public function create(){
            
        }
    }
?>