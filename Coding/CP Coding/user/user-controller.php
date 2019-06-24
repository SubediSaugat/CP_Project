<?php
    include "../includes/dbConnection.php";

    class User{
        private $u_id;
        private $f_name;
        private $email;
        private $contact;
        private $member_type;
        private $message;
        private $address;
        private $dob;
        private $gender;
        private $password;
        private $confirm_password;

        private $connect;

        function __construct(){
            $this->connect = new Connection();
        }

        // User Id
        public function getUserId(){
            return $this->u_id;
        }

        public function setUserId($u_id){
            $this->u_id = $u_id;
        }

        // Full Name
        public function getFullName(){
            return $this->f_name;
        }

        public function setFullName($f_name){
            $this->f_name = $f_name;
        }
        // Email
        public function getUserEmail(){
            return $this->f_name;
        }

        public function setUserEmail($email){
            $this->email = $email;
        }

        // Contact
        public function getUserContact(){
            return $this->contact;
        }

        public function setUserContact($contact){
            $this->contact = $contact;
        }

        // Member Type
        public function getUserMemberType(){
            return $this->member_type;
        }

        public function setUserMemberType($member_type){
            $this->member_type = $member_type;
        }

        // Message
        public function getUserMessage(){
            return $this->message;
        }

        public function setUserMessage($message){
            $this->message = $message;
        }

        // Address
        public function getUserAddress(){
            return $this->address;
        }

        public function setUserAddress($address){
            $this->address = $address;
        }

        // dob
        public function getUserDOB(){
            return $this->dob;
        }

        public function setUserDOB($dob){
            $this->dob = $dob;
        }

        // Gender
        public function getUserGender(){
            return $this->gender;
        }

        public function setUserGender($gender){
            $this->gender = $gender;
        }


        // Password
        public function getUserPassword(){
            return $this->password;
        }

        public function setUserPassword($password){
            $this->password = $password;
        }

        // Confirm Password
        public function getUserCpassword(){
            return $this->confirm_password;
        }

        public function setUserCpassword($confirm_password){
            $this->confirm_password = $confirm_password;
        }

        // Register
        public function userRegister(){
            $sql = "INSERT INTO `tbl_register_user`(`u_id`, `f_name`, `email`, `contact`, `member_type`, `message`, `address`, `dob`, `gender`, `password`, `confirm_password`) VALUES (NULL, '$this->f_name', '$this->email', '$this->contact', '$this->member_type', '$this->message', '$this->address', '$this->dob', '$this->gender', '$this->password', '$this->confirm_password')";
            // echo $sql;
            return $this->connect->ud($sql);
        }

        public function userLogin()
        {
            $row = $this->connect->getData("SELECT * FROM `tbl_register_user` WHERE `email` = '$this->email' and `password` = '$this->password'");
            if(count($row) == 1 )
            {
                session_start();
                $_SESSION['user-id'] = $row[0]['u_id'];
                $_SESSION['user-name'] = $row[0]['f_name'];
            }
            else
            {
                die(header ('Location: ../userLogin.php?msg=incorrect'));
            }
            return true;
        }
    }
?>