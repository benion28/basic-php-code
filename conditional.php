<?php
    echo "<hr>";
    echo "PHP Conditional Code Starts Here";
    echo "<hr>";

    $age = 28;
    $salary = 300000;

    // Sample If
    if ($age === 28) {
        echo "true"."<hr>";
    }

    // Without Circle Braces
    if ($age !== 20) echo "false"."<hr>";

    // Sample if-else
    if ($age > 20) {
        echo "0"."<hr>";
    } else {
        echo "1"."<hr>";
    }

    // Difference Between == and ===
    if ($age == 28) {
        echo "yes (==) -- 28: "."<br>";
    } else {
        echo "no (==) -- 28: "."<br>";
    }
    if ($age == '28') {
        echo "yes (==) -- '28': "."<br>";
    } else {
        echo "yes (==) -- '28': "."<br>";
    }
    if ($age === 28) {
        echo "yes (===) -- 28: "."<br>";
    } else {
        echo "no (===) -- 28: "."<br>";
    }
    if ($age === '28') {
        echo "yes (===) -- '28': "."<hr>";
    } else {
        echo "no (===) -- '28': "."<hr>";
    }

    // IF AND
    if ($age > 20 && $salary === 300000) {
        echo "Eligible"."<hr>";
    }

    // IF OR
    if ($age > 28 || $salary === 300000) {
        echo "Do Something"."<hr>";
    }

    // Ternary IF
    echo $age < 22 ? "Young"."<hr>" : "Old"."<hr>";

    // Short Ternary
    $myAge = $age ?: 18;
    echo "My Age: ";
    var_dump($myAge);
    echo "</pre>"."<hr>";

    // Null Coalescing Operator
    $firstName = isset($name) ? $name : 'Bemshima';
    $nickName =  $username ?? 'Benifresh';
    echo "First Name: ";
    var_dump($firstName);
    echo "</pre>"."<br>";
    echo "Nickname: ";
    var_dump($nickName);
    echo "</pre>"."<hr>";

    // Switch
    $userRole = "admin";
    switch ($userRole) {
        case 'admin':
            echo "User Role: "."admin"."<hr>";
            break;
        case 'user':
            echo "User Role: "."user"."<hr>";
            break;
        case 'editor':
            echo "User Role: "."editor"."<hr>";
            break;
        default:
            echo "User Role: "."invalid role"."<hr>";
            break;
    }
?>
