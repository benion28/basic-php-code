<?php
    echo "<hr>";
    echo "PHP Variable Code Starts Here";

    // Variable Types
    $name = "Bernard";  // String
    $age = 28;  // Integer
    $isMale = true;  // Boolean (1 for true and "" for false)
    $height = 1.85;  // Float/Double
    $salary = null;  // Null

    // Print Variables
    echo "<br>";
    echo "Name: ".$name."<br>";
    echo "Age: ".$age."<br>";
    echo "isMale: ".$isMale."<br>";
    echo "Height: ".$height."<br>";
    echo "Salary: ".$salary."<hr>";

    // Print Variable Types
    echo "Name: ".gettype($name)."<br>";
    echo "Age: ".gettype($age)."<br>";
    echo "isMale: ".gettype($isMale)."<br>";
    echo "Height: ".gettype($height)."<br>";
    echo "Salary: ".gettype($salary)."<br>";

    // Variable Changing Function
    echo "<hr>";
    echo "Name: ".is_string($name)."<br>";
    echo "Age: ".is_int($age)."<br>";
    echo "isMale: ".is_bool($isMale)."<br>";
    echo "Height: ".is_double($height)."<br>";

    // Check If Variable Is Declared
    echo "<hr>";
    echo "Name: ".isset($name)."<br>";
    echo "Address: ".isset($address)."<br>";

    // Constants
    echo "<hr>";
    define("PI", 3.142);
    echo "PI: ".PI."<br>";

    // Using PHP Built-In Constants
    echo "<hr>";
    echo "SORT_ASC: ".SORT_ASC."<br>";
    echo "PHP_INT_MAX: ".PHP_INT_MAX."<br>";
?>