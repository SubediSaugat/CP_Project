<?php
    include "../includes/dbConnection.php";

    class Event{
        private $e_id;
        private $e_title;
        private $e_start_date;
        private $e_date;
        private $e_venue;
        private $e_description;
        private $e_image;

        private $connect;

        function __construct(){
            $this->connect = new Connection();
        }

        // Event Id
        public function getEventId(){
            return $this->e_id;
        }
        public function setEventId($e_id){
            $this->e_id = $e_id;
        }

        // Event Name
        public function getEventTitle(){
            return $this->e_title;
        }
        public function setEventTitle($e_title){
            $this->e_title = $e_title;
        }

        // Event Start Date
        public function getEventStartDate(){
            return $this->e_start_date;
        }
        public function setEventStartDate($e_start_date){
            $this->e_start_date = $e_start_date;
        }

        // Event Date
        public function getEventDate(){
            return $this->e_date;
        }
        public function setEventDate($e_date){
            $this->e_date = $e_date;
        }

        // Event Venue
        public function getEventVenue(){
            return $this->e_venue;
        }
        public function setEventVenue($e_venue){
            $this->e_venue = $e_venue;
        }

        // Event Description
        public function getEventDescription(){
            return $this->e_description;
        }
        public function setEventDescription($e_description){
            $this->e_description = $e_description;
        }

        // Event Image
        public function getEventImage(){
            return $this->e_image;
        }
        public function setEventImage($e_image){
            $this->e_image = $e_image;
        }

        // Add to database
        public function addEvent(){
            $sql = "INSERT INTO `tbl_events` (`e_id`, `e_title`, `e_start_date`, `e_date`, `e_venue`, `e_description`, `e_image`) VALUES (NULL, '$this->e_title','$this->e_start_date','$this->e_date','$this->e_venue','$this->e_description','$this->e_image')";
            // echo $sql; exit;
            return $this->connect->ud($sql);
        }
         // Select All Event from database
        public function selectEvent(){
            return $this->connect->getData("SELECT * FROM `tbl_events`");
        }
    }
?>