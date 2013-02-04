<?php
    $db_hostname = "localhost";
    $db_username = "alpinedbuser";
    $db_password = "1235813";
    $db_name     = "AlpineDB";

    $db_handle = mysql_connect($db_hostname, $db_username, $db_password) or die("Error: " . mysql_error());

    mysql_select_db($db_name);

    $name = $_POST["name"];
    $body = $_POST["body"];

    $result = mysql_query("INSERT INTO comments (name, body) VALUES ('$name', '$body')");

    if($result)
    {
        echo "<h1>Thank You</h1>";
        echo "Your comment was received.";
    }
    else
    {
        echo "<h1>Error</h1>";
        echo "We're sorry, but your request could not be completed at this time.";
    };
?>

