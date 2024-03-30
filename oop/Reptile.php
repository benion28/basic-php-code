<?php
    class Reptile {
        public $name;
        public $color;
        private $weight;

        public function __construct($name, $color) {
            $this->name = $name;
            $this->color = $color;
        }

        public function setWeight($weight) {
            $this->weight = $weight;
        }

        public function getWeight() {
            return $this->weight;
        }
    }
?>