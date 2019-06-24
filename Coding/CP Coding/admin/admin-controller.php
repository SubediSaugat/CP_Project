<?php
    include "../includes/dbConnection.php";

    class Admin{
        private $a_id;
        private $a_username;
        private $a_password;

        private $connect;

        function __construct(){
            $this->connect = new Connection();
        }

        // Admin Id
        public function getAdminId(){
            return $this->a_id;
        }
        public function setAdminId($a_id){
            $this->a_id = $a_id;
        }

        // Admin Username
        public function getAdminUsername(){
            return $this->a_username;
        }
        public function setAdminUsername($a_username){
            $this->a_username = $a_username;
        }
        // Admin Password
        public function setAdminPassword($a_password){
            $this->a_password = $a_password;
        }
        public function getAdminPassword(){
            return $this->a_password;
        }
        public function adminLogin()
        {
            $row = $this->connect->getData("SELECT * FROM `tbl_admin` WHERE `a_username` = '$this->a_username' and `a_password` = '$this->a_password'");
            if(count($row) == 1 )
            {
                session_start();
                $_SESSION['admin-id'] = $row[0]['a_id'];
                $_SESSION['admin-name'] = $row[0]['a_username'];
            }
            else
            {
                die(header ('Location: ../adminLogin.php?msg=incorrect'));
            }
            return true;
        }
        // Select Admin
        public function selectAdmin($a_id){
            return $this->connect->getData("SELECT * FROM `tbl_admin` WHERE `a_id` = '$a_id'");
        }
        // Update Admin Profile
        public function updateProfile($a_id){
            $sql = "UPDATE `tbl_admin` SET `a_username`='$this->a_username', `a_password`='$this->a_password' WHERE `a_id` = '$this->a_id'";
            return $this->connect->ud($sql);
            // echo $sql;
        }
    }
?>