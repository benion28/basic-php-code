<?php
    class Mammal {
        public $name;
        public $color;

        public function __construct($name, $color) {
            echo "Mammal (Name): ".$name."<br>";
            echo "Mammal (Color): ".$color."<hr>";
        }
    }
?>