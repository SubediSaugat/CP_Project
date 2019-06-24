<?php
    include "../includes/dbConnection.php";

    class Sports{
        private $sf_id;
        private $sf_type;
        private $sf_description;
        private $sf_image;

        private $connect;

        function __construct(){
            $this->connect = new Connection();
        }

        // Sports Id
        public function getSportsId(){
            return $this->sf_id;
        }
        public function setSportsId($sf_id){
            $this->sf_id = $sf_id;
        }

        // Sports Name
        public function getSportsTitle(){
            return $this->sf_type;
        }
        public function setSportsTitle($sf_type){
            $this->sf_type = $sf_type;
        }

        // Sports Description
        public function getSportsDescription(){
            return $this->sf_description;
        }
        public function setSportsDescription($sf_description){
            $this->sf_description = $sf_description;
        }

        // Sports Image
        public function getSportsImage(){
            return $this->sf_image;
        }
        public function setSportsImage($sf_image){
            $this->sf_image = $sf_image;
        }

        // Add to database
        public function addSports(){
            $sql = "INSERT INTO `tbl_sports_facilities`(`sf_id`, `sf_type`, `sf_description`, `sf_image`) VALUES (NULL, '$this->sf_type','$this->sf_description', '$this->sf_image')";
            // echo $sql; exit;
            return $this->connect->ud($sql);
        }
         // Select All Event from database
        public function selectSport(){
            return $this->connect->getData("SELECT * FROM `tbl_sports_facilities`");
        }
    }
?>