<?php
    echo "<hr>";
    echo "PHP Numbers Code Starts Here";

    // Declaring Numbers
    $a = 5;
    $b = 4;
    $c = 1.2;

    // Arithmetic Operations
    echo "<br>"."<br>";
    echo "A + B: ".$a + $b."<br>";
    echo "A - B: ".$a - $b."<br>";
    echo "A * B: ".$a * $b."<br>";
    echo "A / B: ".$a / $b."<br>";
    echo "A % B: ".$a % $b."<br>";
    echo "A + B + C: ".$a + $b + $c."<br>";
    echo "A + B * C: ".$a + $b * $c."<br>";

    // Assignment With Math Operators
    echo "<hr>";
    $a += $b;
    echo "A += B: ".$a."<br>";
    $a -= $b;
    echo "A -= B: ".$a."<br>";
    $a *= $b;
    echo "A *= B: ".$a."<br>";
    $a /= $b;
    echo "A /= B: ".$a."<br>";

    // Increment Operator
    echo "<hr>";
    echo "A++: ".$a++."<br>";
    echo "++A: ".++$a."<br>";

    // Decrement Operator
    echo "<hr>";
    echo "A--: ".$a--."<br>";
    echo "--A: ".--$a."<br>";

    // Number Checking Functions
    echo "<hr>";
    echo "Double C: ".is_double($c)."<br>";
    echo "Float C: ".is_float($c)."<br>";
    echo "Int B: ".is_int($b)."<br>";
    echo "Numeric C: ".is_numeric("$c")."<br>";

    // Conversion
    echo "<hr>";
    $strNumber = "12.34";
    $floatNumber = (float)$strNumber;
    var_dump($floatNumber);
    echo "<br>";
    $floatNumber = floatval($strNumber);
    var_dump($floatNumber);
    echo "<br>";
    $intNumber = (int)$strNumber;
    var_dump($intNumber);
    echo "<br>";
    $intNumber = intval($strNumber);
    var_dump($intNumber);

    // Number 
    echo "<hr>";
    echo "ABS (-15): ".abs(-15)."<br>";
    echo "POW (2, 3): ".pow(2, 3)."<br>";
    echo "SQRT (16): ".sqrt(16)."<br>";
    echo "MAX (2, 3): ".max(2, 3)."<br>";
    echo "MIN (2, 3): ".min(2, 3)."<br>";
    echo "ROUND (2.4): ".round(2.4)."<br>";
    echo "ROUND (2.6): ".round(2.6)."<br>";
    echo "FLOOR (2.6): ".floor(2.6)."<br>";
    echo "CEIL (2.4): ".ceil(2.4)."<br>";

    // Number Formatting
    echo "<hr>";
    $number = 1231435364734524.219;
    echo "Formatted Number: ".number_format($number, 2, ".", ",")."<br>";
?>