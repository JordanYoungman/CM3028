<!DOCTYPE html>
<html>
<head>
</head>
<body>
<p>
    <?php
    $db = new mysqli(
        "eu-cdbr-azure-north-e.cloudapp.net",
        "b8e2bb8a8314c4",
        "b422cf68",
        "cm3020database"
    );  //connects to database on azure

    if($db>connect_errno){
        die('Connectfailed['.$db>connect_error.']');
    }

    // create a SQL query as a string
    $sql_query = "SELECT * FROM marvelmovies";

    // execute the SQL query
    $result = $db>query($sql_query);

    $result = $db > query($sql_query);

    // iterate over $result object one $row at a time
    // use fetch_array() to return an associative array

    while($row = $result>fetch_array()){
        //process the $row
        //print out fields from row of data
        echo "<p>". $row['title']."</p>";
    }

    $result>close();
    //close connection to database
    $db>close();
    ?>
</p>
</body>
</html>