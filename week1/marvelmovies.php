<!DOCTYPE html>
<html>
<head>
</head>
<body>
<h1>Hello !!!</h1>
    <?php

    $db = new mysqli(
        "eu-cdbr-azure-north-e.cloudapp.net",
        "b8e2bb8a8314c4",
        "b422cf68",
        "cm3020database"
    );  //connects to database on azure


    // test if connection was established, and print any errors
    if (!$db) {
        die('Connect Error: ' . mysqli_connect_errno());
    }

    // create a SQL query as a string
    $sql_query = "SELECT * FROM marvelmovies";
    // execute the SQL query
    $result = $db->query($sql_query);
    // iterate over $result object one $row at a time
    // use fetch_array() to return an associative array
    echo "<p><strong>All Movies: </strong>";
    while($row = $result->fetch_array()){
        // print out fields from row of data
        echo $row['title'] . " | ";
    }

    echo "</p>";
    $sql_query = "SELECT * FROM marvelmovies where title like '%X-Men%'";
    $result = $db->query($sql_query);
    echo "<p><strong>X-Men Movies: </strong>";
    while($row = $result->fetch_array()){
        // print out fields from row of data
        echo $row['title'] . " | ";
    }

    echo "</p>";
    $sql_query = "SELECT * FROM marvelmovies where productionStudio like 'Marvel Studios'";
    $result = $db->query($sql_query);
    echo "<p><strong>Marvel: </strong>";
    while($row = $result->fetch_array()){
        // print out fields from row of data
        echo $row['title'] . " | ";
    }

    echo "</p>";
    $sql_query = "SELECT * FROM marvelmovies where yearReleased > 2010";
    $result = $db->query($sql_query);
    echo "<p><strong>After 2010: </strong>";
    while($row = $result->fetch_array()){
        // print out fields from row of data
        echo $row['title'] . " | ";
    }
    echo "</p>";
    $result->close();
    // close connection to database
    $db->close();