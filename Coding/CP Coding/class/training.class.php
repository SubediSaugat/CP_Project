<?php
    include "../includes/dbConnection.php";

    class Training{
        private $t_id;
        private $t_name;
        private $t_date;
        private $t_venue;
        private $t_description;
        private $t_image;

        private $connect;

        function __construct(){
            $this->connect = new Connection();
        }

        // Training Id
        public function getTrainingId(){
            return $this->t_id;
        }
        public function setTrainingId($t_id){
            $this->t_id = $t_id;
        }

        // Training Name
        public function getTrainingName(){
            return $this->t_name;
        }
        public function setTrainingName($t_name){
            $this->t_name = $t_name;
        }

        // Training Date
        public function getTrainingDate(){
            return $this->t_date;
        }
        public function setTrainingDate($t_date){
            $this->t_date = $t_date;
        }

        // Training Venue
        public function getTrainingVenue(){
            return $this->t_venue;
        }
        public function setTrainingVenue($t_venue){
            $this->t_venue = $t_venue;
        }

        // Training Description
        public function getTrainingDescription(){
            return $this->t_description;
        }
        public function setTrainingDescription($t_description){
            $this->t_description = $t_description;
        }

        // Training Image
        public function getTrainingImage(){
            return $this->t_image;
        }
        public function setTrainingImage($t_image){
            $this->t_image = $t_image;
        }

        // Add to database
        public function addTraining(){
            $sql = "INSERT INTO `tbl_trainning`(`t_id`, `t_name`, `t_date`, `t_venue`, `t_description`, `t_image`) VALUES (NULL, '$this->t_name', '$this->t_date', '$this->t_venue', '$this->t_description', '$this->t_image')";
            // echo $sql; exit;
            return $this->connect->ud($sql);
        }
        // Select All Training from database
        public function selectTraining(){
            return $this->connect->getData("SELECT * FROM `tbl_trainning`");
        }
    }
?>