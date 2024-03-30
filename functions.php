<?php
    echo "<hr>";
    echo "PHP Functions Code Starts Here";
    echo "<hr>";

    // Function Which Prints a Greeting
    function hello() {
        echo "Hello I am Bernard"."<hr>";
    }
    hello();

    // Function With Argument
    function greet($name) {
        return "Hello I am $name"."<hr>";
    }
    echo greet("Benion");

    // Create Sum of Two Functions
    function sum($a, $b) {
        return $a + $b;
    }
    echo "Sum (5 + 3): ".sum(5, 3)."<br>";

    // Create Function to Sum all Numbers
    function multiSum(...$numbers) {
        $value = 0;
        foreach($numbers as $number) {
            $value += $number;
        }
        return $value;
    }
    echo "Multi Sum: ".multiSum(5, 4, 3, 2, 1)."<br>";

    // Arrow Function
    function multiReduce(...$numbers) {
        return array_reduce($numbers, fn($carry, $item) => $carry + $item);
    }
    echo "Multi Reduce: ".multiReduce(5, 4, 3, 2, 1)."<hr>";
    $product = fn($a, $b) => $a * $b;
    echo "Product (5 * 3): ".$product(5, 3)."<hr>";

    // Include A Function
    require_once "functions/math.php";
    echo "Add (4 + 5): ".add(4, 5)."<br>";
    echo "Subtract (5 - 4): ".subtract(5, 4)."<hr>";
?>
