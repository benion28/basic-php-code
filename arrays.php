<?php
    echo "<hr>";
    echo "PHP Arrays Code Starts Here";
    echo "<hr>";

    // Create Arrays
    $fruits = ["Banana", "Apple", "Orange"];
    echo "Fruits: ";
    var_dump($fruits);
    $foods = array("Rice", "Beans", "Yam");
    echo "<br>";
    echo "<pre>";
    echo "Food: ";
    var_dump($foods);
    echo "</pre>"."<hr>";

    // Get Element by Index
    echo "Fruits[1]: ".$fruits[1]."<hr>";

    // Set Element by Index
    $fruits[0] = "Peach";
    echo "<pre>";
    echo "Fruits: ";
    var_dump($fruits);
    echo "</pre>"."<hr>";

    // Check If Array Has Element At Index
    echo "Fruits at Index[2]: ".isset($fruits[2])."<br>";
    echo "Fruits at Index[3]: ".isset($fruits[3])."<hr>";

    // Append Element
    $fruits[] = "Banana";
    echo "<pre>";
    echo "Fruits: ";
    var_dump($fruits);
    echo "</pre>"."<hr>";

    // Print the Length of the Array
    echo "Total Fruits: ".count($fruits)."<br>";
    echo "Total Food: ".count($foods)."<hr>";

    // Add Element at the End of the Array
    array_push($foods, "Potatoes");
    echo "<pre>";
    echo "Foods: ";
    var_dump($foods);
    echo "</pre>"."<hr>";

    // Remove Element from the End of the Array
    echo "Remove last Foods: ".array_pop($foods);
    echo "<pre>";
    echo "Foods: ";
    var_dump($foods);
    echo "</pre>"."<hr>";

    // Add Element from the Beginning of the Array
    array_unshift($foods, "Potatoes");
    echo "<pre>";
    echo "Foods: ";
    var_dump($foods);
    echo "</pre>"."<hr>";

    // Remove Element from the Beginning of the Array
    echo "Remove first Fruits: ".array_shift($fruits);
    echo "<pre>";
    echo "Fruits: ";
    var_dump($fruits);
    echo "</pre>"."<hr>";

    // Split the String into an Array
    $fuits_items = $fruits[0].",".$fruits[1].",".$fruits[2];
    echo "<br>"."Fruit Items: ".$fuits_items;
    echo "<pre>";
    echo "Fruit Items Array: ";
    var_dump(explode(",", $fuits_items));
    echo "</pre>"."<hr>";

    // Combine Array Elements into String
    $food_items = implode("&", $foods);
    echo "Food Items: ".$food_items."<hr>";

    // Check if Elements exists in the Array
    echo "<pre>";
    echo "Check Fruits (Apple): ";
    var_dump(in_array("Apple", $fruits));
    echo "</pre>";
    echo "<pre>";
    echo "Check Food (Mango): ";
    var_dump(in_array("Apple", $foods));
    echo "</pre>"."<hr>";

    // Search Element Index in the Array
    echo "<pre>";
    echo "Check Fruits (Apple): ";
    var_dump(array_search("Apple", $fruits));
    echo "</pre>";
    echo "<pre>";
    echo "Check Food (Mango): ";
    var_dump(array_search("Apple", $foods));
    echo "</pre>"."<hr>";

    // Merge two Arrays
    $eatables = array_merge($foods, $fruits);
    echo "<pre>";
    echo "Eatables 1: ";
    var_dump($eatables);
    echo "</pre>";
    echo "<pre>";
    echo "Eatables -1: ";
    var_dump(...$fruits, ...$foods);
    echo "</pre>"."<hr>";

    // Sorting of Arrays (Reversed Order)
    sort($eatables);
    echo "<pre>";
    echo "Sort Eatables (Ascending): ";
    var_dump($eatables);
    echo "</pre>";
    rsort($eatables);
    echo "<pre>";
    echo "Sort Eatables (Reversed): ";
    var_dump($eatables);
    echo "</pre>"."<hr>";

    // Create an Associative Array
    $person = [
        'firstname' => 'Bernard',
        'surname' => 'Iorver',
        'age' => 28,
        'hobbies' => ['Football', 'Video Games']
    ];
    echo "Person (Dump): ";
    echo "<pre>";
    var_dump($person);
    echo "</pre>";
    echo "Person (Print): "."<pre>";
    print_r($person);
    echo "</pre>"."<hr>";
    
    // Get Element by Key
    echo "Name: ".$person['firstname']."<br>";

    // Set Element by Key
    $person['username'] = "benion";
    echo "Username: ".$person['username']."<hr>";

    // Null Coalescing Assignment Operator
    if (!isset($person['state'])) {
        $person['state'] = "Kaduna";
    }
    echo "State: ".$person['state']."<br>";
    $person['city'] ??= "Kaduna South";
    $person['city'] = $person['city'] ?? "Chikun";
    echo "City: ".$person['city']."<hr>";

    // Print the Keys of the Array
    echo "Person (Key): ";
    echo "<pre>";
    var_dump(array_keys($person));
    echo "</pre>"."<hr>";

    // Print the Values of the Array
    echo "Person (Values): ";
    echo "<pre>";
    var_dump(array_values($person));
    echo "</pre>"."<hr>";

    // Sorting Associative Arrays by Key
    ksort($person);
    echo "Person (Key Sort): ";
    echo "<pre>";
    var_dump($person);
    echo "</pre>"."<hr>";

    // Sorting Associative Arrays by Values
    asort($person);
    echo "Person (Value Sort): ";
    echo "<pre>";
    var_dump($person);
    echo "</pre>"."<hr>";

    // Two Dimensional Arrays
    $todos = [
        ['title' => 'Todo Title 1', 'completed' => true],
        ['title' => 'Todo Title 2', 'completed' => false]
    ];
    echo "Todos (Array): ";
    echo "<pre>";
    var_dump($todos);
    echo "</pre>";
?>
