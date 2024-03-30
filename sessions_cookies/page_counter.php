<?php
    echo "<hr>";
    echo "Page Counter Code Starts Here";
    echo "<hr>";

    session_start();
    echo "Session ID: ".session_id();

    $_SESSION["name"] = "Benifresh";

    echo "<hr>"."<pre>";
    echo "Session: ";
    var_dump($_SESSION);
    echo "</pre>"."<hr>";

    unset($_SESSION["name"]); // or use session_unset();

    echo "<pre>";
    echo "Session: ";
    var_dump($_SESSION);
    echo "</pre>"."<hr>";

    $_SESSION["page_counter"] = $_SESSION["page_counter"] ?? 0;
    $_SESSION["page_counter"]++;
    $pageCounter = $_SESSION["page_counter"] ?? 0;

    if ($_SESSION["page_counter"] === 10) {
        echo "Thanks for visiting us 10 times"."<hr>";
        session_unset();
        session_destroy();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page Counter</title>
</head>
<body>
    <h1>My Awesome Page, Visited: <?php echo $pageCounter; ?> times.</h1>
</body>
</html>