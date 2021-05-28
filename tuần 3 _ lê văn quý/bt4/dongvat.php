<?php
 include_once './cat.php';
    abstract class Dongvat {
        protected $foot;
        protected $hand;
        protected $gender;
        protected $reproduction;

        abstract public function voice();
        abstract public function move();

        public function getFoot(){
            echo $this->foot;
        }
        
        public function getHand(){
            echo $this->hand;
        }

        private function getGender(){
            echo $this->gender;
        }

        public function getGenderRoot(){
            echo $this->gender;
        }
        public function getreproduction(){
            echo $this->reproduction;
        }
      
    }
?>