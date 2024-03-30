<?php
    echo "<hr>";
    echo "PHP OOP Code Starts Here";
    echo "<hr>";

    // User 
    class User {
        public string $firstname;
        public string $surname;
    }

    // Mammal Class
    require_once "oop/Mammal.php";

    // Reptile Class
    require_once "oop/Reptile.php";

    // Student Class
    require_once "oop/Student.php";
    
    // Person Instance
    $user = new User();
    $user->firstname = "Bernard";
    $user->surname = "Iorver";
    echo "<pre>";
    echo "User (Class): ";
    var_dump($user);
    echo "</pre>"."<hr>";
    echo "User (Firstname): ".$user->firstname."<br>";
    echo "User (Surname): ".$user->surname."<hr>";

    // Mammal Instance
    $mammal = new Mammal("Dog", "White");
    echo "<pre>";
    echo "Mammal (Class): ";
    var_dump($mammal);
    echo "</pre>"."<hr>";

    // Reptile Instance
    $reptile = new Reptile("Snake", "Green");

    // Setter
    $reptile->setWeight(15);
    echo "<pre>";
    echo "Reptile (Class): ";
    var_dump($reptile);
    echo "</pre>"."<hr>";

    // Getter
    echo "Reptile (Weight): ".$reptile->getWeight()."<hr>";

    // Person Class
    $person1 = new Person("Victor", "Nwabudike");
    $person1->setAge(28);
    $person2 = new Person("Divine", "Benedict");
    $person2->setAge(17);
    $person3 = new Person("Isaac", "Akemson");
    $person3->setAge(16);
    $person4 = new Person("Gift", "Fredrick");
    $person4->setAge(16);
    $person5 = new Person("Eunice", "Aleke");
    $person5->setAge(19);
    $person6 = new Person("Jennifer", "Joseph");
    $person6->setAge(15);
    $person7 = new Person("Esther", "Dike");
    $person7->setAge(15);

    // Person Counter
    echo "Person (Counter): ".Person::$counter."<hr>";

    // Student Class
    $student = new Student("Esther", "Michael", "01nkgja6371y");
    $student->setAge(18);
    echo "<pre>";
    echo "Student (Class): ";
    var_dump($student);
    echo "</pre>"."<hr>";
?>
