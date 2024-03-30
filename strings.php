<?php
    echo "<hr>";
    echo "PHP Strings Code Starts Here";

    // Create Simple Strings
    echo "<hr>";
    $name = 'bernard';
    $greeting = "hello, i am $name. i am 28yrs old";
    echo $greeting."<br>";;

    // String Concatenation
    echo "<hr>";
    echo "Hello "."World "."From ".$name."<br>";

    // String Functions
    echo "<hr>";
    echo "1 - strlen: ".strlen($greeting)."<br>";
    echo "2 - trim: ".trim($greeting)."<br>";
    echo "3 - iltrim: ".ltrim($greeting)."<br>";
    echo "4 - rtrim: ".rtrim($greeting)."<br>";
    echo "5 - str_word_count: ".str_word_count($greeting)."<br>";
    echo "6 - strrev: ".strrev($greeting)."<br>";
    echo "7 - strtoupper: ".strtoupper($greeting)."<br>";
    echo "8 - strtolower: ".strtolower($greeting)."<br>";
    echo "9 - ucfirst: ".ucfirst($greeting)."<br>";
    echo "10 - lcfirst: ".lcfirst($greeting)."<br>";
    echo "11 - ucwords: ".ucwords($greeting)."<br>";
    echo "12 - strpos: ".strpos($greeting, strtolower($name))."<br>";
    echo "13 - stripos: ".stripos($greeting, strtolower($name))."<br>";
    echo "14 - substr: ".substr($greeting, 8, 17)."<br>";
    echo "15 - str_replace: ".str_replace(ucfirst($name), "Benion", $greeting)."<br>";
    echo "16 - str_ireplace: ".str_ireplace(ucfirst($name), "Benion", $greeting)."<br>";

    // Multiline Text And Line Break
    echo "<hr>";
    $age = 28;
    $longText = "
        Hello, my name is $name,
        i am $age years old,
        and love programming.
    ";
    echo "Long Text (No Break): ".$longText."<br>"."<br>";
    echo "Long Text (Break): ".nl2br($longText)."<br>"."<br>";
    $longTextBold = "
        Hello, my name is <b> $name </b>,
        i am <b> $age </b> years old,
        and love programming.
    ";
    echo "Long Text (Bold): ".$longTextBold."<br>"."<br>";
    echo "Long Text (HTML Entities): ".htmlentities($longTextBold)."<br>"."<br>";
    echo "Long Text (HTML Entities And Break): ".nl2br(htmlentities($longTextBold))."<br>";
    echo "Decode HTML Entities".html_entity_decode("&lt;b&gt; bernard &lt;/b&gt");
?>
