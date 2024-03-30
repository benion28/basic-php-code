<?php
    echo "<hr>";
    echo "PHP Date Code Starts Here";
    echo "<hr>";

    // Print Current Date
    $currentDate = date("Y-m-d H:i:s");
    echo "Date/Time(Now): ".$currentDate."<br>";

    // Print Yesterday
    echo "Date/Time(Yesterday): ".date("Y-m-d H:i:s", time() - 60 * 60 * 24)."<hr>";

    // Different Format
    $dateString = date("F j Y, H:i:s");
    echo "Date/Time(Formatted): ".$dateString."<hr>";

    // Print Current Time Stamp
    echo "Current Time Stamp: ".time()."<hr>";

    // Parse Date
    $parseDate = date_parse($currentDate);
    echo "Parsed Date: ";
    echo "<pre>";
    var_dump($parseDate);
    echo "</pre>"."<hr>";

    // Parse Date from Format
    $parseDateString = date_parse_from_format("F j Y, H:i:s", $dateString);
    echo "Parsed Date String: ";
    echo "<pre>";
    var_dump($parseDateString);
    echo "</pre>"."<hr>";
?>
