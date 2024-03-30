<?php
    echo "<hr>";
    echo "PHP Loops Code Starts Here";
    echo "<hr>";

    // While
    $counter = 0;
    echo "While (No Break): ";
    while ($counter < 10) {
        echo " ,".$counter;
        $counter++;
    }
    echo "<hr>";
    echo "While (Break): ";
    while ($counter < 100) {
        $tempCounter = ceil($counter);
        echo " ,".ceil($tempCounter);
        if ($tempCounter == 34) {
            break;
        }
        $counter *= 1.5;
    }

    // Do While
    $counter2 = 1;
    echo "<hr>";
    echo "Do While: ";
    do {
        echo " ,".$counter2;
        $counter2++;
    } while ($counter2 < 12);

    // For
    echo "<hr>";
    echo "For: ";
    for ($count = 0; $count < 15; $count++) {
        echo " ,".$count;
    }

    // Foreach
    echo "<hr>";
    echo "For Each: ";
    $fruits = ["Banana", "Apple", "Orange"];
    foreach ($fruits as $fruit) {
        echo " ,".$fruit;
    }
    echo "<hr>";
    echo "For Each (Index): ";
    foreach ($fruits as $count => $fruit) {
        echo "<br>".$count." ".$fruit;
    }

    // Iterate Over Associative Array
    echo "<hr>";
    $person = [
        'firstname' => 'Bernard',
        'surname' => 'Iorver',
        'age' => 28,
        'hobbies' => ['Football', 'Video Games']
    ];
    echo "Person (Value): ";
    foreach ($person as $value) {
        if (is_array($value)) {
            echo ", ".implode(", ", $value);
        } else {
            echo ", ".$value;
        }
    }
    echo "<hr>";
    echo "Person (Key): ";
    foreach ($person as $key => $value) {
        if (is_array($value)) {
            echo "<br>".$key.": ".implode(", ", $value);
        } else {
            echo "<br>".$key.": ".$value;
        }
    }
?>
