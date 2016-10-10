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

    if($db>connect_errno){
        die('Connectfailed['.$db>connect_error.']');
    }

    // create a SQL query as a string
    $sql = "SELECT * FROM marvelmovies";

    $result=mysqli_query($db,$sql);
    while($row = $result->fetch_array())
    {
        $movieTitle = $row["title"];
        echo  "<p>". $movieTitle."</p>";
    }

    $result->close();
    //close connection to database
    $db->close();
    ?>
</body>
</html>