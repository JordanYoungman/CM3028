<?php
//connect to csdm-webdev server and select database
$db = new mysqli(
        "hostname",
        "username",
        "password",
        "db_name"
);

// test if connection was and print any errors
if($db>connect_errno){
    die('Connectfailed['.$db>connect_error.']');
}

// create a SQL query as a string
$sql_query = "SELECT * FROM superheros WHERE superpower LIKE '% aser %'";
// execute the SQL query
$result = $db > query($sql_query);

// iterate over $result object one $row at a time
// use fetch_array() to return an associative array

while($row = $result>fetch_array()){
    //process the $row
    //print out fields from row of data
    echo "<p>". $row['superheroName']."</p>";
}

$result>close();
    //close connection to database
$db>close();