<?php
    echo "<hr>";
    echo "PHP File System Code Starts Here";
    echo "<hr>";

    // Magic constant
    echo __DIR__."<br>";
    echo __FILE__."<br>";
    echo __LINE__."<hr>";

    // Create Directory
    mkdir("test");

    // Rename Directory
    rename("test", "test2");

    // Delete Directory
    rmdir("test");
    rmdir("test2");

    // Read Files and Folders inside
    $file = scandir("./");
    echo "File: ";
    var_dump($file);
    echo "</pre>"."<hr>";

    // Write Contents to a File
    file_put_contents("test.txt", "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dignissimos cum laudantium eveniet animi esse iure, iusto a labore ut, veritatis saepe perferendis eos ab provident cupiditate aspernatur architecto consequatur accusamus. ".date("Y-m-d H:i:s")."<br>");

    // Get Contents From A file
    echo "Test.txt: ".file_get_contents("test.txt")."<hr>";

    // Get Contents From URL
    $userJSON = file_get_contents("https://jsonplaceholder.typicode.com/users");
    echo "User JSON: ".$userJSON."<hr>";

    // Convert JSON to Array
    $userArray = json_decode($userJSON, true);
    echo "User Array: ";
    var_dump($userArray);
    echo "</pre>"."<hr>";

    // Check if File Exists
    echo "Test.txt Exists: ".file_exists("test.txt")."<hr>";

    // Check if Specific Folder is Directory
    echo "Functions Directory: ".is_dir("functions")."<hr>";
?>
