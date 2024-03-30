<?php
    class Person {
        public string $firstname;
        public string $surname;
        public static int $counter = 0;
        protected string $school;      // Accepts Null Values
        private ?int $age;      // Accepts Null Values

        public function __construct($firstname, $surname) {
            $this->firstname = $firstname;
            $this->surname = $surname;
            self::$counter++;
        }

        public function setAge($age) {
            $this->age = $age;
        }

        public function getAge() {
            return $this->age;
        }

        public static function getCounter() {
            return self::$counter;
        }
    }
?>