<?php

    class Movie{
        public $title;
        public $description;
        public $director;
        public $year;

        function __construct($title,$description,$director,$year){
            $this->title = $title;
            $this->description = $description;
            $this->director = $director;
            $this->year = $year;
        }
        
        public function setTitle($title){
            $this->title = $title;
        }
        public function setDescription($description){
            $this->description = $description;
        }
        public function setDirector($director){
            $this->director = $director;
        }
        public function setYear($year){
            $this->year = $year;
        }
        public function getTitle(){
            return $this->title;
        }
        public function getDescription(){
            return $this->description;
        }
        public function getDirector(){
            return $this->director;
        }
        public function getYear(){
            return $this->year;
        }
    }

?>