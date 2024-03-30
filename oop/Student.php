<?php
    // Person Class
    require_once "Person.php";

    class Student extends Person {
        public string $studentId;

        public function __construct($firstname, $surname, $studentId) {
            parent::__construct($firstname, $surname);
            $this->studentId = $studentId;
            $this->school = "VSS";
        }
    }
?>