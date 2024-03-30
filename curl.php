<?php
    echo "<hr>";
    echo "PHP CURL Code Starts Here";
    echo "<hr>";

    $url = "https://jsonplaceholder.typicode.com/users";

    // Sample Example to get Data
    $resource = curl_init($url);
    curl_setopt($resource, CURLOPT_RETURNTRANSFER, true);
    $result = curl_exec($resource);
    echo "CURL Result: ".$result."<hr>";
    $info = curl_getinfo($resource);
    echo "<pre>";
    echo "Resource (Info): ";
    var_dump($info);
    echo "</pre>"."<hr>";
    $code = curl_getinfo($resource, CURLINFO_HTTP_CODE);
    echo "<pre>";
    echo "Resource (Code): ";
    var_dump($code);
    echo "</pre>"."<hr>";

    // Post Request
    $resource2 = curl_init();
    $user = [
        "name" => "Divine Martins",
        "username" => "pearl",
        "email" => "divinemartins@email.com"
    ];
    curl_setopt_array($resource2, [
        CURLOPT_URL => $url,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_POST => true,
        CURLOPT_HTTPHEADER => ["content-type: application/json"],
        CURLOPT_POSTFIELDS => json_encode($user)
    ]);
    $result2 = curl_exec($resource2);
    curl_close($resource2);
    echo "POST Result: ".$result2."<hr>";
?>
